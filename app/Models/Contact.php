<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    public function industries()
    {
        return $this->belongsToMany(Industry::class);
    }

    public function businesstypes()
    {
        return $this->belongsToMany(BusinessType::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function segments()
    {
        return $this->belongsToMany(Segment::class);
    }

    public function siblists()
    {
        return $this->belongsToMany(Siblist::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
