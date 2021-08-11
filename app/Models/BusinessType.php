<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Contact;

class Businesstype extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }
}
