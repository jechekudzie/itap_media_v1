<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function index()
    {
        $packages = Package::all();

        return view('packages.index', compact('packages'));
    }

    public function create()
    {
        $services = Service::all();
        $categories = Category::all();

        return view('packages.create', compact('services', 'categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'standard_price' => 'required|numeric',
            'service_id' => 'required|exists:services,id',
        ]);

        $package = Package::create($validatedData);

        $package->categories()->sync($request->input('categories'));

        return redirect()->route('packages.index')
            ->with('success', 'Package created successfully.');
    }

    public function show(Package $package)
    {
        return view('packages.show', compact('package'));
    }

    public function edit(Package $package)
    {
        $services = Service::all();
        $categories = Category::all();
        $selectedCategoryIds = $package->categories()->pluck('category_id')->toArray();

        return view('packages.edit', compact('package', 'services', 'categories', 'selectedCategoryIds'));
    }

    public function update(Request $request, Package $package)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'standard_price' => 'required|numeric',
            'service_id' => 'required|exists:services,id',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
        ]);

        $package->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'standard_price' => $validatedData['standard_price'],
            'service_id' => $validatedData['service_id'],
        ]);

        if ($validatedData['categories']) {
            $package->categories()->sync($validatedData['categories'], true);
        } else {
            $package->categories()->detach();
        }

        return redirect()->route('packages.show', $package)
            ->with('success', 'Package updated successfully.');
    }

    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->route('packages.index')
            ->with('success', 'Package deleted successfully.');
    }
}
