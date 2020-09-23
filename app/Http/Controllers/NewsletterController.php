<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $exist = Newsletter::where('email',$request->email)->first();
        if(!$exist){
            $newsletter = new Newsletter($request->all());
            $result = $newsletter->save();
            if ($result) {
                return response()->json([
                    'response' => "Has sido suscrito de manera exitosa",
                    'status' => 'ok'
                ]);
            } else {
                return response()->json([
                    'status' => 'error'
                ]);
            }
        }else {
            return response()->json([
                'response' => "Te encuentras suscrito a nuestro newsletter, Gracias por intentarlo nuevamente",
                'status' => 'ok'
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Newsletter $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Newsletter $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Newsletter $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Newsletter $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
