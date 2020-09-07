@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
@endsection

@section('title')
    ..:: APPSIEL - Sistemas para el crecimiento empresarial ::..
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

    <livewire:posts/>

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

@section('scripts')

@endsection

