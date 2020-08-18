@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/index.css')}}" rel="stylesheet"></head>
@endsection

@section('title')
    <title>Sistemas inventario contable facturación| APPSIEL</title>
@endsection

@section('content')
    <section class="hero">
        <div class="wraper">
            <img class="hero__background" src="./svg/background.svg" alt="">
            <div class="hero__content">
                <div class="hero__description">
                    <h1 class="hero__title">sistemas para el crecimiento empresarial</h1>
                    <p class="hero__text">Somos una empresa dedicada al desarrollo de sistemas de información que aumenten la productividad de nuestros clientes.</p>
                </div>
                <img class="hero__ilustracion" src="{{asset('svg/ilustracion.svg')}}" alt="">
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
                    <img class="logo" src="{{asset('images/clip-online-education-4.png')}}" alt="Diseño web">
                    <h3 class="title">Diseño web</h3>
                    <p class="descricion">Empresa especializada en diseño de páginas web profesionales. Agencia de diseño y desarrollo de sitios web</p>
                </div>
                <div class="servicios__item">
                    <img class="logo" src="{{asset('images/pale-computer-technology 1.png')}}" alt="Diseño web">
                    <h3 class="title">Desarrollo Web</h3>
                    <p class="descricion">Presencia online impactante para su negocio. Construya la columna vertebral de su estrategia de marketing digital.Haga su negocio visible a todo el mundo</p>
                </div>
                <div class="servicios__item">
                    <img class="logo" src="{{asset('images/clip-online-education-4 1.png')}}" alt="Diseño web">
                    <h3 class="title">Consultoría en gestión empresarial</h3>
                    <p class="descricion">Todos los conocimientos, habilidades y experiencia de un equipo de profesionales al servicio de su negocio. Análisis financiero y diseño de plan estratégico.</p>
                </div>
                <div class="servicios__item">
                    <img class="logo" src="{{asset('images/school-teacher.png')}}" alt="Diseño web">
                    <h3 class="title">Plataforma de Gestión Educativa</h3>
                    <p class="descricion">Todas las herramientas en un solo lugar para la gestión académica, disciplinaria y administrativa de su institución. También para empresas: creación y gestión de su propia  universidad corporativa.</p>
                </div>
                <div class="servicios__item">
                    <img class="logo" src="{{asset('images/pixeltrue-plan-1 1.png')}}" alt="Diseño web">
                    <h3 class="title">Software ERP</h3>
                    <p class="descricion">Administración en tiempo real del flujo financiero de su negocio. Controle eficazmente todos las operaciones y transacciones de su empresa.</p>
                </div>
                <div class="servicios__item">
                    <img class="logo" src="{{asset('images/marginalia-679 1.png')}}" alt="Diseño web">
                    <h3 class="title">Gestión de consultorios médicos</h3>
                    <p class="descricion">Control de consultorios, profesionales de la salud, historias clínicas, anamnesis, citas médicas, exámenes, tratamientos y muchos más. Facturación, control de ingresos y gastos. Gestión administrativa total.</p>
                </div>
            </div>
        </div>
    </main>
    <section class="productos">
        <div class="wraper">
            <h2>Nuestros productos</h2>
            <nav class="productos__menuwraper">
                <ul class="productos__menu">
                    <li class="menu__item activo" data-id="diseño-web">Diseño Web</li>
                    <li class="menu__item" data-id="desarrollo-de-apps">Desarrollo de Apps</li>
                    <li class="menu__item" data-id="desarrollo-web">Desarrollo Web</li>
                    <li class="menu__item" data-id="gestion-educativa">Gestion Educativa</li>
                    <li class="menu__item" data-id="gestion-empresarial">Gestion Empresarial</li>
                    <li class="menu__item" data-id="gestion-salud">Gestion Salud</li>
                </ul>
            </nav>
            <div class="productos__grid activo-servicio" id="diseño-web">
                <div class="productos__item">
                    <img class="logo" src="{{asset('images/personal_train.png')}}" alt="Diseño web">
                    <h3 class="title">web entrenamiento personal</h3>
                    <p class="descricion">Rutinas de street workout</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="{{asset('images/personal_train.png')}}" alt="Diseño web">
                    <h3 class="title">web studio de sonido</h3>
                    <p class="descricion">Diseño minimalista</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="{{asset('images/personal_train.png')}}" alt="Diseño web">
                    <h3 class="title">web  cinema</h3>
                    <p class="descricion">App para amigos</p>
                </div>
            </div>
            <div class="productos__grid" id="desarrollo-de-apps">
                <div class="productos__item">
                    <img class="logo" src="{{asset('images/personal_train.png')}}" alt="Diseño web">
                    <h3 class="title">web Appsiel</h3>
                    <p class="descricion">Software ERP</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="{{asset('images/personal_train.png')}}" alt="Diseño web">
                    <h3 class="title">web studio de sonido</h3>
                    <p class="descricion">Diseño minimalista</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="{{asset('images/personal_train.png')}}" alt="Diseño web">
                    <h3 class="title">web  cinema</h3>
                    <p class="descricion">App para amigos</p>
                </div>
            </div>
        </div>
    </section>
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
                    <video src="{{asset('videos/appsiel.mp4')}}" preload="none" playsinline controls muted loop poster="./images/appsiel-poster.jpg" autoplay></video>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <div class="wraper">
            <div class="newsletter__content">
                <h2 class="newsletter__title">NEWSLETTER</h2>
                <p class="newsletter__descripcion">Suscribete a nuestro newsletter y te haremos llegar nuestras promociones, descuentos, productos y todo el contenido de tecnología que nuestro maravilloso equipo prepara cada semana.</p>
                <form id="formulario" method="post" action="{{route('newsletter.store')}}">
                    @csrf
                    <div class="newsletter__suscribete"><input name="email" type="email" placeholder="user@example.com" required>
                        <button type="button" onclick="guardar()">SUSCRÍBETE</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
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
    <section class="presupuesto">
        <div class="wraper">
            <div class="presupuesto_content">
                <div class="presupuesto_descripcion">
                    <h2>¿Te gustaría crear un proyecto con nosotros?</h2>
                    <p>Solicita presupuesto para tu web, app o desarrollo a medida. Te guiaremos para desarrollar tu idea con el sistema más eficiente según el código de programación que necesites.</p>
                </div>
                <a class="btn" href="{{route('menu.contactanos')}}">SOLICITAR PRESUPUESTO</a>
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
        function guardar(){
            var $request = $("#formulario").serialize();
            $.post(
                '{{url('newsletter/suscripcion/guardar/')}}', $request
            ).done(function (msg){
                if (msg.status == 'ok'){
                    Swal.fire({
                        position: 'bottom-end',
                        text:msg.response
                    });
                }else{
                    Swal.fire({
                        position: 'top-end',
                        title: 'Ha surgido un problema',
                        text: 'Error interno. inténtelo otra vez más tarde.'
                    });
                }
            })
        }
    </script>
@endsection

