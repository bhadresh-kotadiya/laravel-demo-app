<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

// use Cviebrock\EloquentSluggable\Sluggable;


class Blog extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug',
        'description',
    ];

    // protected $guarded = ['title'];

}
