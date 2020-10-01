@extends('backoffice.layouts.admin')
@section('content')
    <?php
    $url = [];
    $name = Auth::user()->name;
    $description = "Hola <strong><i>" . $name . "</i></strong> Bienvenido a <strong><i>Appsiel - Sistema para el crecimiento empresarial</i></strong>, que tengas un bendecido día."
    ?>
    <livewire:backoffice.breadcrumbs title="Inicio" :urls="$url" :description="$description"/>
    <div class="row">
        @foreach($teams as $item)
            <div class="col-md-4">
                <div class="card user-card">
                    <div class="card-header">
                        <h5>EQUIPO</h5>
                    </div>
                    <div class="card-block">
                        <div class="usre-image">
                            <img src="{{asset('../storage/app/docs/team/'.$item->photo)}}" class="img-radius"
                                 alt="User-Profile-Image" width="100px">
                        </div>
                        <h6 class="f-w-600 m-t-25 m-b-10">{{$item->name}}</h6>
                        <p class="text-muted">Profession | {{$item->profession}}</p>
                        <hr>
                        <p class="text-muted m-t-15">Activity Level: 87%</p>
                        <ul class="list-unstyled activity-leval">
                            <li class="active"></li>
                            <li class="active"></li>
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <p class="m-t-15 text-muted">"{{$item->phrase}}"</p>
                        <hr>
                        <div class="row justify-content-center user-social-link">
                            <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                            <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                            <div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
