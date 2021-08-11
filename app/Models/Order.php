<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function lineitems()
    {
        return $this->hasMany(Lineitem::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'ine_items');
    }
}
