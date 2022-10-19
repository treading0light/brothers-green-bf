<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Blog;

class BlogController extends Controller
{
    public function create (Request $request) {
        try {
            $attributes = $request->validate([

                'title' => ['required', 'max:25', 'unique:blog'],
                'description' => ['max:155', 'required'],
                'body' => ['required'],
            ]);
        } catch (exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }

        $attributes['user_id'] = Auth::user()->id;

        $newBlog = Blog::create($attributes);

        if ($request->file('image')) {
            $this->blogImage($request, $newBlog);
        };

        return response()->json([
            'message' => 'success'
        ]);
    }

    public function blogImage (Request $request, $blog) {
        $imageName = time().'.'.$request->file('image')->getClientOriginalName();

        $path = 'images/';

        $image = $request->file('image')->move($path, $imageName);

        $blog->image = $image;

        $blog->save();
    }
}
