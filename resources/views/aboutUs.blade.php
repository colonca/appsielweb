@extends('layouts.app')

@section('title')
    Quiénes Somos - Appsiel
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')

    @include('layouts.campaing')

    <section class="our__team">
        <div class="wraper">
            <div class="our__team__content">
                <h2 class="our__team__title">Nuestro Equipo</h2>
                <blockquote class="person">
                    <img class="person__img" src="./images/jonny.jpg" alt="Camilo Andres Colon Cañizares">
                    <div class="person__descripcion">
                        <h3 class="person__nombre">Camilo Andres Colon Cañizares</h3>
                        <p class="person__profesion">fullstack</p>
                        <cite>“vive aprendiendo la vida nunca para de enseñar ”</cite>
                    </div>
                </blockquote>
                <div class="peoples">
                    <div class="worker">
                        <img class="worker__img" src="./images/Selmary.jpg" alt="Selmary Medina Pérez">
                        <div class="worker__descripcion">
                            <h3 class="worker__nombre">Selmary Medina Pérez</h3>
                            <p class="worker__profesion">Community Manager</p>
                        </div>
                    </div>
                    <div class="worker">
                        <img class="worker__img" src="./images/jonny.jpg" alt="Camilo Andres Colon Cañizares">
                        <div class="worker__descripcion">
                            <h3 class="worker__nombre">Camilo Andres Colon Cañizares</h3>
                            <p class="worker__profesion">fullstack</p>
                        </div>
                    </div>
                    <div class="worker">
                        <img class="worker__img" src="./images/jordan.jpg" alt="Jordan Jhonsson Cuadro Negrete">
                        <div class="worker__descripcion">
                            <h3 class="worker__nombre">Jordan Jhonsson Cuadro Negrete</h3>
                            <p class="worker__profesion">Backend</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


