<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    protected $fillable=[
        'title',
        'description',
        'navbar_image',
    ];
}
