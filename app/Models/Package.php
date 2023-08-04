<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)
            ->withPivot('id')
            ->withTimestamps();
    }

    public function lineItems()
    {
        return $this->belongsToMany(LineItem::class)
            ->withPivot('quantity')
            ->withTimestamps();
    }

    public function getTotalLineItemsCost()
    {
        $total = 0;

        foreach ($this->lineItems as $lineItem) {
            $total += $lineItem->pivot->quantity * $lineItem->price;
        }

        return $total;
    }
}

