<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view("show-data")->with('blogs', $blogs);
    }

    public function store(StoreBlogRequest $request)
    {
        $insertData=$request->validated();
        $insertData['slug']=Str::slug($request->title, '-');

        Blog::create($insertData);
        return redirect()->route('alert');
    }

    public function edit($id)
    {
        $blogs = Blog::FindOrFail($id);
        return view('edit',['blogs'=>$blogs]);
    }

    public function update(Request $request,$id)
    {
        // $request->validate([
        //     'title' => 'required|unique:blogs',
        // ]);

        $blogs = Blog::FindOrFail($id);
        $blogs->title = $request->title;
        $blogs->slug = Str::slug($request->title, '-');
        $blogs->description = $request->description;
        $blogs->save();


        // Blog::updateOrCreate([
        //     'title' => $request->title,
        //     'slug'    => Str::slug($request->title, '-'),
        //     'description'   => $request->description,
        // ]);
        return redirect()->route('index');
    }


        // return redirect()->route('users.index')
        //                 ->with('success','User updated successfully');

    public function delete($id)
    {
        Blog::FindOrFail($id)->delete($id);

        return response('Post deleted successfully.', 200);

    }

}
