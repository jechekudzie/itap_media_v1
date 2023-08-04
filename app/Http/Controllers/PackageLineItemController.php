<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageLineItemController extends Controller
{
    //
    public function create(Package $package)
    {
        $lineItems = LineItem::all();

        return view('package-line-items.create', compact('package', 'lineItems'));
    }

    public function store(Request $request, Package $package)
    {
        $validatedData = $request->validate([
            'line_items' => 'required|array',
            'line_items.*.line_item_id' => 'required|exists:line_items,id',
            'line_items.*.quantity' => 'required|numeric|min:1',
        ]);

        $lineItemIds = array_column($validatedData['line_items'], 'line_item_id');
        $quantities = array_column($validatedData['line_items'], 'quantity');

        $package->lineItems()->syncWithoutDetaching(array_combine($lineItemIds, $quantities));

        return redirect()->route('packages.show', $package)
            ->with('success', 'Line items added to package successfully.');
    }

    public function edit(Package $package, LineItem $lineItem)
    {
        $quantity = $package->lineItems()->findOrFail($lineItem->id)->pivot->quantity;

        return view('package-line-items.edit', compact('package', 'lineItem', 'quantity'));
    }

    public function update(Request $request, Package $package, LineItem $lineItem)
    {
        $validatedData = $request->validate([
            'quantity' => 'required|numeric|min:1',
        ]);

        $package->lineItems()->updateExistingPivot($lineItem->id, ['quantity' => $validatedData['quantity']]);

        return redirect()->route('packages.show', $package)
            ->with('success', 'Line item updated successfully.');
    }

    public function destroy(Package $package, LineItem $lineItem)
    {
        $package->lineItems()->detach($lineItem->id);

        return redirect()->route('packages.show', $package)
            ->with('success', 'Line item removed from package successfully.');
    }
}
