<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        return view('frontend.blog.blog');
    }

    public function createBlog(){
        return view('frontend.blog.create');
    }

    public function storeBlog(BlogRequest $request){
        Auth::user()->blogs()->create($request->validated());
        return redirect()->route('blog');
    }
}
