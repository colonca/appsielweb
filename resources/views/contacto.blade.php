@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/contacto.css')}}" rel="stylesheet"></head>
@endsection

@section('title')
    <title>Contacto | APPSIEL</title>
@endsection

@section('content')
    <div class="contacto-hero">
        <div class="wraper">
            <div class="contacto-hero__descripcion">
                <h1>CONTACTO</h1>
                <p>Solicita información para desarrollar tu proyecto.<br>
                    Presupuesto diseño web, tiendas online, apps y desarrollo web.</p>
            </div>
        </div>
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-0.84,86.34 C78.72,197.86 576.46,-20.22 231.09,152.45 L564.61,83.38 L-7.62,146.53 Z" style="stroke: none; fill: #6E2AB6;"></path></svg></div>
    </div>

    <main class="contacto">
        <div class="wraper">
            <div class="contacto__content">
                <div class="contacto__form">
                    <h3>Solicita Información</h3>
                    <p>¿Qué necesitas? - Especifique todos los detalles posibles para realizar un estudio de viabilidad del proyecto.</p>
                    <form action="">
                        <div class="form-group">
                            <label for="">Nombre <span>*</span></label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email <span>*</span></label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Telefono <span>*</span></label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Presupuesto disponible</label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Consulta <span>*</span></label>
                            <textarea name="" id="" cols="30" rows="10" placeholder="¿En qué podemos ayudarte?"></textarea>
                        </div>

                        <button type="submit" class="activo">Enviar</button>
                    </form>
                </div>
                <div class="contacto__logo">
                    <img src="{{asset('images/abstract-communication.png')}}" width="250px" height="250px" alt="ilustracion">
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="{{asset('js/contacto.bundle.js')}}"></script>
@endsection

