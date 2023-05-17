<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'blog_title'
    //         ]
    //     ];
    // }
}