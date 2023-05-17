<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->slug = Str::slug($request->title, '-');
        $blog->save();

        return back();

    }
}
