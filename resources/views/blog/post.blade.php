@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
@endsection

@section('content')

    @include('layouts.campaing')

    <livewire:blog.search-dropdown/>

    <div class="wraper post">
        <div class="w-full md:w-8/12 mx-auto my-16">
            <h1 class="mt-1 text-sm md:text-2xl lg:text-4xl text-left leading-tight font-semibold text-gray-400 py-2">{{$post->name}}</h1>
            <div class="tracking-wide my-4 text-sm text-gray-600 font-light flex items-center">
                <svg viewBox="0 0 20 20" fill="currentColor" class="view-grid w-6 h-6"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <p class="uppercase mr-4">{{$post->category->name}}</p>
                <p>{{date('j F, Y', strtotime($post->created_at))}}</p>
             </div>
            <img loading="lazy" class="rounded-lg md:w-2/3 mx-auto h-auto" src="{{asset($post->file)}}" alt="{{$post->name}}">
            <div class="my-1 text-sm md:text-md lg:text-lg text-gray-600 font-light">
                {!! $post->body !!}
            </div>
        </div>
    </div>

    <livewire:blog.comments :post="$post">


@endsection
