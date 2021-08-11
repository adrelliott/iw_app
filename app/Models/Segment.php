<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Segment extends Model
{
    use HasFactory, SoftDeletes;

    public function criteria()
    {
        return $this->hasMany(Critereon::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }
}
