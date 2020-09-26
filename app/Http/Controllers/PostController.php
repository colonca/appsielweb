<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Post::all();
        return view('backoffice.post.list')
            ->with('location', 'post')
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::all()->pluck('name', 'id');
        return view('backoffice.post.create')
            ->with('location', 'post')
            ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $post = new Post($request->all());
        foreach ($post->attributesToArray() as $key => $value) {
            if ($key != 'body') $post->$key = strtoupper($value);
            //$post->$key = $value;
        }
        $post->slug = Str::slug($post->name, '-');
        $hoy = getdate();
        $file = $request->file("file");
        $name = "Post_" . $hoy["year"] . $hoy["mon"] . $hoy["mday"] . $hoy["hours"] . $hoy["minutes"] . $hoy["seconds"] . "_" . $file->GetClientOriginalName();
        $path = public_path() . "/docs/post/";
        $file->move($path, $name);
        $post->file = $name;
        $result = $post->save();
        if ($result) {
            flash("El post <strong>" . $post->name . "</strong> fue almacenado de forma exitosa!")->success();
            return redirect()->route('post.index');
        } else {
            flash("El post <strong>" . $post->name . "</strong> no pudo ser almacenado. Error: " . $result)->error();
            return redirect()->route('post.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $post = Post::find($id);
        $categories = Category::all()->pluck('name', 'id');
        return view('backoffice.post.edit')
            ->with('location', 'post')
            ->with('categories', $categories)
            ->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $post = Post::find($id);
        $m = new Post($post->attributesToArray());
        foreach ($post->attributesToArray() as $key => $value) {
            if (isset($request->$key)) {
                if ($key != 'body') {
                    $post->$key = strtoupper($request->$key);
                } else {
                    $post->$key = $request->$key;
                }
            }
        }
        $hoy = getdate();
        if (isset($request->file)) {
            if (unlink(public_path() . "/docs/post/" . $m->file)) {
                $file = $request->file("file");
                $name = "Post_" . $hoy["year"] . $hoy["mon"] . $hoy["mday"] . $hoy["hours"] . $hoy["minutes"] . $hoy["seconds"] . "_" . $file->GetClientOriginalName();
                $path = public_path() . "/docs/post/";
                $file->move($path, $name);
                $post->file = $name;
            }
        }
        $result = $post->save();
        if ($result) {
            flash("El post <strong>" . $post->name . "</strong> fue modificado de forma exitosa!.")->success();
            return redirect()->route('post.index');
        } else {
            flash("El post <strong>" . $post->name . "</strong> no pudo ser modificado. Error: " . $result)->error();
            return redirect()->route('post.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $post = Post::find($id);
        if (count($post->comments) > 0){
            flash('El post no se puede eliminar porque tiene comentarios asociados')->warning();
            return redirect()->route('post.index');
        }
        $result = $post->delete();
        if ($result) {
            return response()->json([
                'status' => 'ok',
                'message' => "El post fue elimidao de forma exitosa!"
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => "El post no pudo ser eliminado. Error: " . $result
            ]);
        }
    }
}
