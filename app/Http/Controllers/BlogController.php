<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use SEO;

class BlogController extends Controller
{

    public function show(string $slug)
    {
       $post = Post::where('slug',$slug)->first();
        SEO::setTitle($post->name);
        SEO::setDescription($post->except);
        SEO::opengraph()->setUrl(route('blog.post',$post->slug));
        SEO::setCanonical(route('blog.post',$post->slug));
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@appsiel_');
       return view('blog.post',compact('post'));
    }

}
