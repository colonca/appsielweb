@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/index.css')}}" rel="stylesheet"></head>
@endsection

@section('title')
    ..:: APPSIEL - Preguntas frecuentes ::..
@endsection

@section('content')
    <div id="preguntas-frecuentes">

        <style>
        #faq-area {
            margin: 118px 0 100px;
            background-repeat: no-repeat;
            background-position: left;
            background-size: 25% 95%;
        }

        #faq-area.bg-1 {
            background-image: url('images/1583859741codelco.png')
        }

        #faq-area.bg-2 {
            background-image: url(../images/faq-bg-2.png)
        }

        #faq-area .section-heading p {
            padding: 0 20px;
        }

        .card {
            margin-bottom: 20px;
            border-radius: 10px;
            border: 0
        }

        .card .card-header {
            background-color: #fff;
            -webkit-box-shadow: 0px 0px 15px 0px rgba(52, 69, 199, 0.4);
            box-shadow: 0px 0px 15px 0px rgba(52, 69, 199, 0.4);
            border: 0;
            border-radius: 10px;
            padding: 0
        }

        .card.v-dark .card-header {
            background-color: #0084ff;
        }

        .card .card-header.active {
            border-radius: 10px 10px 0 0
        }

        .card .card-header.active,
        .card .card-header:hover {
            background-image: -webkit-gradient(linear, left top, right top, from(rgb(32, 0, 126)), to(rgb(230, 30, 182)));
            background-image: linear-gradient(90deg, rgb(32, 0, 126) 0%, rgb(230, 30, 182) 100%);
        }

        .card.two .card-header.active,
        .card.two .card-header:hover {
            background-image: linear-gradient(45deg, rgb(157, 91, 254) 0%, rgb(56, 144, 254) 100%);
        }

        ::after, ::before {
            box-sizing: border-box;
        }

        .card .card-header.active a,
        .card .card-header:hover a,
        .card-body p,
        .card.v-dark .card-header a {
            color: #fff !important;
        }

        .card .card-header a {
            font-size: 18px;
            line-height: 28px;
            font-weight: 600;
            color: #000;
            display: block;
            padding: 20px 30px;
            position: relative
        }

        .card .card-header a:after {
            content: '\f078';
            font-family: 'FontAwesome';
            position: absolute;
            right: 30px
        }

        .card .card-header.active a:after {
            content: '\f077';
            font-family: 'FontAwesome'
        }

        .card-body {
            background-image: -webkit-gradient(linear, left top, right top, from(rgb(32, 0, 126)), to(rgb(230, 30, 182)));
            background-image: linear-gradient(90deg, rgb(32, 0, 126) 0%, rgb(230, 30, 182) 100%);
            border-radius: 0 0 10px 10px;
            padding: 0 30px 10px 30px
        }

        .card.two .card-body {
            background-image: linear-gradient(45deg, rgb(157, 91, 254) 0%, rgb(56, 144, 254) 100%);

        }

        .faq-img img {
            max-width: 350px;
            margin-left: 130px;
        }
    </style>

    <section id="faq-area" class="bg-1">
        <div class="container">
            <div class="row" style="justify-content: center; margin-bottom: 50px;">
                <div class="col-md-8 offset-md-2">
                    <div class="section-heading text-center">
                        <h2>¿Qué es APPSIEL?</h2>
                        <p>Es software en la nube que se vende como un servicio mensual o anual.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-7">
                    <div id="accordion" role="tablist">
                        <!--start faq single-->
                                                                            <div class="card">
                                    <div class="card-header" role="tab" id="faq1" onclick="agregar(event)" onfocusout="agregar(event)">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">¿Cuanto cuesta?</a>
                                        </h5>
                                    </div>
                                    <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="faq1" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <p>APPSIEL tiene aplicaciones para empresas de distintos sectores; por tanto el costo puede variar ampliamente de un negocio a otro.
    Un pequeño negocio de comercio puede pagar al rededor de $48.000 mensuales. Negocios o empresas más grandes pagarán de acuer</p>
                                        </div>
                                    </div>
                                </div>
                                                                </div>
                </div>
                <div class="col-md-5">
                    <div class="faq-img">
                        <img src="images/faq-img-1.png" class="img-fluid" style="margin-top: -50px; margin-left: 55px;" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

@endsection

@section('scripts')

    <script type="text/javascript">
        function agregar(event) {
            event.target.parentElement.parentElement.classList.toggle('active');
        }
    </script>
@endsection

