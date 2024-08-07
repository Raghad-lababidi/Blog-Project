<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;


class BlogController extends Controller
{

    public function index()
    {
       $blogs =  Blog::all();
        return view('blog.index', compact('blogs'));
    }


    public function create(BlogRequest $request)
    {
        $blog = Blog::create($request->validated());
        return redirect()->route('blog.index');
    }

    public function update(BlogRequest $request)
    {
        Blog::whereId($request->id)->update(
            [
                'name' => $request->name,
                'description' => $request->description
            ]
            );
        
        return redirect()->route('blog.index');
        
    }

    public function delete($id)
    {
        Blog::whereId($id)->delete();
        return redirect()->route('blog.index');
    }


    public function find($id)
    {
       $blog= Blog::find($id);
       return view('blog.show', compact('blog'));
    }
}
