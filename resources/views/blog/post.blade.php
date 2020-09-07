@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
@endsection

@section('content')

    <div class="wraper lg:flex justify-around py-6 border-b border-gray-400">
        <div>
            <h1 class="text-md md:text-4xl font-semibold text-gray-400">El Blog de Appsiel</h1>
            <p class="text-center text-sm-center md:text-xl">Descarga nuestro libro Cinco estrategias para el crecimiento empresarial</p>
            <div class="flex justify-center">
                <a href="{{url('/landingpage')}}" target="_blank" class="inline-block my-4 bg-blue-900 py-2 px-4 rounded-full font-semibold">Si Lo Quiero</a>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <img loading="lazy" class="h-40" src="{{asset('svg/blog.svg')}}" alt="blog de appsiel">
        </div>
    </div>

    <livewire:search-dropdown/>

    <div class="wraper">
        <div class="w-full md:w-8/12 mx-auto my-16">
            <h1 class="mt-1 text-sm md:text-2xl lg:text-4xl text-left leading-tight font-semibold text-gray-400 pb-2">{{$post->name}}</h1>
            <div class="tracking-wide mt-1 text-sm text-gray-600 font-light flex items-center">
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

    <!-- @ include('dream_team') -->
    <section class="presupuesto">
        <div class="wraper">
            <div class="presupuesto_content">
                <div class="presupuesto_descripcion">
                    <h2>¿Te gustaría aumentar la productividad en tu negocio?</h2>
                    <p>Contactanos y te daremos asesoría personalizada. Escogiendo las mejores herramientas según tu necesidad.</p>
                </div>
                <a class="btn" href="{{route('menu.contactanos')}}">¡Si me gustaría!</a>
            </div>
        </div>
    </section>

@endsection
