@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/index.css')}}" rel="stylesheet"></head>
@endsection

@section('content')
    <section class="hero">
        <div class="wraper">
            <img loading="lazy" class="hero__background" src="./svg/background.svg" alt="">
            <div class="hero__content">
                <div class="hero__description">
                    <h1 class="hero__title">Sistemas para el crecimiento empresarial</h1>
                    <p class="hero__text">Somos una empresa dedicada al desarrollo de sistemas de información que aumenten la productividad de nuestros clientes.</p>
                </div>
                <img loading="lazy" class="hero__ilustracion" src="{{asset('svg/ilustracion.svg')}}" alt="">
            </div>
        </div>
    </section>
    <main  class="servicios">
        <div class="wraper">
            <h2>Servicios de software en la nube</h2>
        </div>
        <div class="background__grid">
            <div class="servicios__grid">
                <div class="servicios__item">
                    <img loading="lazy" class="logo" src="{{asset('images/pixeltrue-plan-1 1.png')}}" alt="Diseño web">
                    <h3 class="title">Software ERP</h3>
                    <p class="descricion">Administración en tiempo real del flujo financiero de su negocio. Controle eficazmente todos las operaciones y transacciones de su empresa.</p>
                </div>
                <div class="servicios__item">
                    <img loading="lazy" class="logo" src="{{asset('images/school-teacher.png')}}" alt="Diseño web">
                    <h3 class="title">Plataforma de Gestión Educativa</h3>
                    <p class="descricion">Todas las herramientas en un solo lugar para la gestión académica, disciplinaria y administrativa de su institución. También para empresas: creación y gestión de su propia  universidad corporativa.</p>
                </div>
                <div class="servicios__item">
                    <img loading="lazy" class="logo" src="{{asset('images/marginalia-679 1.png')}}" alt="Diseño web">
                    <h3 class="title">Gestión de consultorios médicos</h3>
                    <p class="descricion">Control de consultorios, profesionales de la salud, historias clínicas, anamnesis, citas médicas, exámenes, tratamientos y muchos más. Facturación, control de ingresos y gastos. Gestión administrativa total.</p>
                </div>
                <div class="servicios__item">
                    <img loading="lazy" class="logo" src="{{asset('images/clip-online-education-4.png')}}" alt="Diseño web">
                    <h3 class="title">Diseño web</h3>
                    <p class="descricion">Empresa especializada en diseño de páginas web profesionales. Agencia de diseño y desarrollo de sitios web</p>
                </div>
                <div class="servicios__item">
                    <img loading="lazy" class="logo" src="{{asset('images/pale-computer-technology 1.png')}}" alt="Diseño web">
                    <h3 class="title">Desarrollo Web</h3>
                    <p class="descricion">Presencia online impactante para su negocio. Construya la columna vertebral de su estrategia de marketing digital.Haga su negocio visible a todo el mundo</p>
                </div>
                <div class="servicios__item">
                    <img loading="lazy" class="logo" src="{{asset('images/clip-online-education-4 1.png')}}" alt="Diseño web">
                    <h3 class="title">Consultoría en gestión empresarial</h3>
                    <p class="descricion">Todos los conocimientos, habilidades y experiencia de un equipo de profesionales al servicio de su negocio. Análisis financiero y diseño de plan estratégico.</p>
                </div>
            </div>
        </div>
    </main>
    <livewire:productos />
    <section class="why">
        <div class="wraper">
            <div class="why__content">
                <h2 class="why__title">¿Por Qué Elegirnos?</h2>
                <ul class="why__caracteristicas">
                    <li><i class="fas fa-code"></i>Software en la nube. No requiere licencias.</li>
                    <li><i class="fas fa-code"></i>Software e infraestructura como servicio. No debe comprar equipos especializados.</li>
                    <li><i class="fas fa-code"></i>Módulos totalmente parametrizables y ajustables a las necesidades de cada negocio. Usted elige lo que realmente necesite.</li>
                    <li><i class="fas fa-code"></i>No manejamos paquetes, solo aplicaciones individuales.</li>
                    <li><i class="fas fa-code"></i>Su negocio tendrá <strong> +Conocimientos</strong>, <strong>+Experiencia</strong>, <strong>+Habilidades</strong> y el respaldo de un equipo de profesionales a su servicio.</li>
                    <li><i class="fas fa-code"></i>Precios increíbles.</li>
                </ul>
                <div class="why__video">
                    <video loading="lazy" src="{{asset('videos/video_presentacion_appsiel_voz_selmary.mp4')}}" preload="none" playsinline controls muted loop poster="./images/appsiel-poster.jpg" autoplay></video>
                </div>
            </div>
        </div>
    </section>
   <livewire:newsletters />
    <!-- @ include('dream_team') -->
    <section class="presupuesto">
        <div class="wraper">
            <div class="presupuesto_content">
                <div class="presupuesto_descripcion">
                    <h2>¿Te gustaría aumentar la productividad en tu negocio?</h2>
                    <p>Contactanos y te daremos asesoría personalizada. Escogiendo las mejores herramientas según tu necesidad.</p>
                </div>
                <a class="btn" href="{{route('menu.contactanos')}}">¡Si quiero!</a>
            </div>
        </div>
    </section>
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

