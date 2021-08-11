<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siblist extends Model
{
    use HasFactory, SoftDeletes;

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }
}
