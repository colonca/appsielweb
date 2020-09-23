@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/splide.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/preguntas.css')}}">
@endsection

@section('title')
    ..:: APPSIEL - Sistemas para el crecimiento empresarial ::..
@endsection

@section('content')
    <section class="hero">
            <div class="wraper mx-auto flex justify-between items-center py-6">
                 <div class="text-2xl md:text-4xl w-3/5 ">
                     <div class="text-gray-400 font-bold text-left">Sistemas para el crecimiento empresarial</div>
                     <div class="text-sm md:text-2xl text-left text-gray-400">Somos una empresa dedicada al desarrollo de sistemas de información que aumenten la productividad de nuestros clientes.</div>
                     <div class="text-left pt-4 pb-2">
                         <a href="{{url('/contactUs')}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Solicita información aquí</a>
                     </div>
                 </div>
                 <div class="w-2/5 flex-1">
                     <img src="{{asset('images/imagen-2.png')}}" alt="ilustración">
                 </div>
        </div>
    </section>

    <main  class="servicios mb-12">
        <div class="wraper">
            <h2 class="text-gray-400 py-6">Servicios de software en la nube</h2>
        </div>
        <div class="background__grid">
            <div class="servicios__grid">
                <div class="servicios__item">
                    <img loading="lazy" class="mx-auto md:w-2/4 h-3/12" src="{{asset('images/pixeltrue-plan-1 1.png')}}" alt="Diseño web">
                    <h3 class="title">Software ERP</h3>
                    <p class="descricion">Administración en tiempo real del flujo financiero de su negocio. Controle eficazmente todos las operaciones y transacciones de su empresa.</p>
                </div>
                <div class="servicios__item">
                    <img loading="lazy" class="mx-auto md:w-2/4 h-3/12" src="{{asset('images/school-teacher.png')}}" alt="Diseño web">
                    <h3 class="title">Plataforma de Gestión Educativa</h3>
                    <p class="descricion">Todas las herramientas en un solo lugar para la gestión académica, disciplinaria y administrativa de su institución. También para empresas: creación y gestión de su propia  universidad corporativa.</p>
                </div>
                <div class="servicios__item">
                    <img loading="lazy" class="mx-auto md:w-2/4 h-3/12" src="{{asset('images/marginalia-679 1.png')}}" alt="Diseño web">
                    <h3 class="title">Gestión de consultorios médicos</h3>
                    <p class="descricion">Control de consultorios, profesionales de la salud, historias clínicas, anamnesis, citas médicas, exámenes, tratamientos y muchos más. Facturación, control de ingresos y gastos. Gestión administrativa total.</p>
                </div>
                <div class="servicios__item">
                    <img loading="lazy" class="mx-auto md:w-2/4 h-3/12" src="{{asset('images/clip-online-education-4.png')}}" alt="Diseño web">
                    <h3 class="title">Diseño web</h3>
                    <p class="descricion">Empresa especializada en diseño de páginas web profesionales. Agencia de diseño y desarrollo de sitios web</p>
                </div>
                <div class="servicios__item">
                    <img loading="lazy" class="mx-auto md:w-2/4 h-3/12" src="{{asset('images/pale-computer-technology 1.png')}}" alt="Diseño web">
                    <h3 class="title">Desarrollo Web</h3>
                    <p class="descricion">Presencia online impactante para su negocio. Construya la columna vertebral de su estrategia de marketing digital.Haga su negocio visible a todo el mundo</p>
                </div>
                <div class="servicios__item">
                    <img loading="lazy" class="mx-auto md:w-2/4 h-3/12" src="{{asset('images/pale-computer-technology 1.png')}}" alt="Diseño web">
                    <h3 class="title">Consultoría en gestión empresarial</h3>
                    <p class="descricion">Todos los conocimientos, habilidades y experiencia de un equipo de profesionales al servicio de su negocio. Análisis financiero y diseño de plan estratégico.</p>
                </div>
            </div>
        </div>
    </main>

    <livewire:productos />

    <section class="why my-16">
        <div class="wraper">
            <div class="why__content">
                <h2 class="why__title text-gray-400">¿Por Qué Elegirnos?</h2>
                <ul class="why__caracteristicas">
                    <li class="text-gray-400"><i class="fas fa-code"></i>Software en la nube. No requiere licencias.</li>
                    <li class="text-gray-400"><i class="fas fa-code"></i>Software e infraestructura como servicio. No debe comprar equipos especializados.</li>
                    <li class="text-gray-400"><i class="fas fa-code"></i>Módulos totalmente parametrizables y ajustables a las necesidades de cada negocio. Usted elige lo que realmente necesite.</li>
                    <li class="text-gray-400"><i class="fas fa-code"></i>No manejamos paquetes, solo aplicaciones individuales.</li>
                    <li class="text-gray-400"><i class="fas fa-code"></i>Su negocio tendrá <strong> +Conocimientos</strong>, <strong>+Experiencia</strong>, <strong>+Habilidades</strong> y el respaldo de un equipo de profesionales a su servicio.</li>
                    <li class="text-gray-400"><i class="fas fa-code"></i>Precios increíbles.</li>
                </ul>
                <div class="why__video">
                    <video loading="lazy" src="{{asset('videos/video_presentacion_appsiel_voz_selmary.mp4')}}" preload="none" playsinline controls muted loop poster="./images/appsiel-poster.jpg" autoplay></video>
                </div>
            </div>
        </div>
    </section>

    <div id="preguntas-frecuentes">
        <section id="faq-area" class="bg-1">
            <div class="wraper">
                <h2 class="text-gray-400">¿Qué es APPSIEL?</h2>
                <p class="text-center pb-8 md:text-lg text-gray-400">Es un conjunto de herramientas de software en la nube,  que se venden como un <strong>servicio</strong> mensual o anual.</p>
                <div class="flex flex-wrap md:flex-no-wrap justify-center items-center">
                    <div class="w-2/4 md:mr-6 ">
                        <div class="faq-img">
                            <img src="{{asset('images/question.svg')}}"  class="w-full">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <a class="collapsed">¿Cuanto cuesta?</a>
                            </h5>
                        </div>
                        <div id="collapse1" class="collapse">
                            <div class="card-body bg-gray-800 rounded-lg rounded-t-none">
                                <p class="text-sm md:text-md text-gray-400 font-semibold">APPSIEL tiene aplicaciones para empresas de distintos sectores; por tanto el costo puede variar ampliamente de un negocio a otro.
                                    Un pequeño negocio de comercio puede pagar al rededor de $48.000 mensuales. Negocios o empresas más grandes pagarán de acuerdo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end pt-6">
                    <a href="" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Preguntas más frecuentes</a>
                </div>
            </div>
        </section>
    </div>

    <livewire:blog.noticias/>

    <livewire:customer/>

   <livewire:newsletters />

@endsection

@section('scripts')
    <script src="{{asset('js/index.bundle.js')}}"></script>
    <script src="{{asset('main.bundle.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>



        window.livewire.on('subcripcionToNewsletter',resp => {
            if(resp.status == 'ok'){
                Swal.fire({
                    position: 'top-end',
                    text: resp.message
                });
            }else{
                Swal.fire({
                    position: 'top-end',
                    title: 'Ha surgido un problema',
                    text: resp.message
                });
            }
        });
    </script>
@endsection

