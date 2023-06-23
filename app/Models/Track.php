<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = [
        'id',
        'name',
        'user',
        'pass',
        'userip',
        'location',
        'created_at',
        'updated_at',
        'deleted_at',
        'deleted',
        'view'
    ];
}
