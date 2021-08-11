<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Contact;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
