@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/index.css')}}" rel="stylesheet"></head>
@endsection

@section('title')
    ..:: APPSIEL - Quíenes Somos ::..
@endsection

@section('content')
    <section class="hero">
        <div class="wraper">
            <img class="hero__background" src="./svg/background.svg" alt="">
            <div class="hero__content">
                <div class="hero__description">
                    <h1 class="hero__title">Sistemas para el crecimiento empresarial</h1>
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
                    <img class="logo" src="{{asset('images/pixeltrue-plan-1 1.png')}}" alt="Diseño web">
                    <h3 class="title">Software ERP</h3>
                    <p class="descricion">Administración en tiempo real del flujo financiero de su negocio. Controle eficazmente todos las operaciones y transacciones de su empresa.</p>
                </div>
                <div class="servicios__item">
                    <img class="logo" src="{{asset('images/school-teacher.png')}}" alt="Diseño web">
                    <h3 class="title">Plataforma de Gestión Educativa</h3>
                    <p class="descricion">Todas las herramientas en un solo lugar para la gestión académica, disciplinaria y administrativa de su institución. También para empresas: creación y gestión de su propia  universidad corporativa.</p>
                </div>
                <div class="servicios__item">
                    <img class="logo" src="{{asset('images/marginalia-679 1.png')}}" alt="Diseño web">
                    <h3 class="title">Gestión de consultorios médicos</h3>
                    <p class="descricion">Control de consultorios, profesionales de la salud, historias clínicas, anamnesis, citas médicas, exámenes, tratamientos y muchos más. Facturación, control de ingresos y gastos. Gestión administrativa total.</p>
                </div>
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
            </div>
        </div>
    </main>
    <section class="productos">
        <div class="wraper">
            <h2>Nuestros productos</h2>
            <nav class="productos__menuwraper">
                <ul class="productos__menu">
                    <li class="menu__item activo" data-id="gestion-empresarial">Gestión Empresarial</li>
                    <li class="menu__item" data-id="gestion-educativa">Gestion Educativa</li>
                    <li class="menu__item" data-id="gestion-salud">Gestion Salud</li>
                    <li class="menu__item" data-id="desarrollo-web">Desarrollo web</li>
                    <li class="menu__item" data-id="consultoria-empresarial">Consultoría en gestión empresarial</li>
                </ul>
            </nav>
            <div class="productos__grid activo-servicio" id="gestion-empresarial">
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/compras.png" alt="Compras">
                    <h3 class="title">Compras</h3>
                    <p class="descricion">Conozca sus costos y proyecte su margen de utilidad.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/inventarios.png" alt="Inventarios">
                    <h3 class="title">Inventarios</h3>
                    <p class="descricion">Controle la trazabilidad de sus productos de principio a fin.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/ventas.png" alt="Ventas">
                    <h3 class="title">Ventas</h3>
                    <p class="descricion">Administre su fuerza de ventas con eficacia.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/tesoreria.png" alt="Tesorería">
                    <h3 class="title">Tesorería</h3>
                    <p class="descricion">Control en tiempo real del flujo de efectivo.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/contabilidad.png" alt="Contabilidad">
                    <h3 class="title">Contabilidad</h3>
                    <p class="descricion">Conozca su situación financiera en todo momento.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/nomina.png" alt="Nómina">
                    <h3 class="title">Nómina</h3>
                    <p class="descricion">Liquide al instante los pagos de su talento humano.</p>
                </div>
            </div>
            
            <div class="productos__grid" id="gestion-educativa">
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/matriculas.png" alt="Matrículas">
                    <h3 class="title">Matrículas</h3>
                    <p class="descricion">Registro y control académico y disciplinario</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/calificaciones.png" alt="Calificaciones">
                    <h3 class="title">Calificaciones</h3>
                    <p class="descricion">Gestión de notas, logros, escalas de valoración, rendimiento académico, asistencia a clases y mucho más.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/academico_docente.png" alt="Académico Docente">
                    <h3 class="title">Académico Docente</h3>
                    <p class="descricion">Gestionar de planta docente, carga académica y actividades escolares virtuales.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/academico_estudiante.png" alt="Académico Estudiante">
                    <h3 class="title">Académico Estudiante</h3>
                    <p class="descricion">Consulta de registros diciplinarios, calificaciones, estados de cuentas, actividades escolares virtuales y mucho más.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/tesoreria.png" alt="Tesorería">
                    <h3 class="title">Tesorería</h3>
                    <p class="descricion">Generación de libretas de pagos, control de cartera de estudiantes, control de ingresos y gastos de la institución educativa.</p>
                </div>
            </div>
            
            <div class="productos__grid" id="gestion-salud">
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/historias_clinicas.png" alt="Consultorio médico">
                    <h3 class="title">Consultorio médico</h3>
                    <p class="descricion">Gestión historias clínicas de pacientes, control de citas médicas, exámenes, tratamientos y muchos más.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/ventas.png" alt="Ventas">
                    <h3 class="title">Ventas</h3>
                    <p class="descricion">Facturación de fórmulas médicas, tratamientos, servicios e insumos.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/tesoreria.png" alt="Tesorería">
                    <h3 class="title">Tesorería</h3>
                    <p class="descricion">Control de ingresos y gastos de los consultorio.</p>
                </div>
            </div>
            
            <div class="productos__grid" id="desarrollo-web">
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/gestion_documental.png" alt="Gestor de contenidos">
                    <h3 class="title">Gestor de contenidos</h3>
                    <p class="descricion">Creación y gestión de blog, noticias, galerías y todo el contenido necesario para mantener su sitio web actualizado.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/pagina_web.png" alt="Diseño web">
                    <h3 class="title">Diseño web</h3>
                    <p class="descricion">Creación de sitios web personalizados y dinámicos.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/compras.png" alt="Tienda Online">
                    <h3 class="title">Tienda Online</h3>
                    <p class="descricion">Creación de carritos de compras y pasarelas de pagos con actualización del inventario en tiempo real.</p>
                </div>
            </div>

            <div class="productos__grid" id="consultoria-empresarial">
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/contabilidad.png" alt="Branding y diseño de estrategia corporativa">
                    <h3 class="title">Branding y diseño de estrategia corporativa</h3>
                    <p class="descricion">Contruya su marca con una misión y visión a largo plazo.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/tesoreria.png" alt="Análisis financiero">
                    <h3 class="title">Análisis financiero</h3>
                    <p class="descricion">Determine su situación actual e implemente estrategias para un crecimiento sostenido.</p>
                </div>
                <div class="productos__item">
                    <img class="logo" src="https://appsiel.com.co/el_software/assets/img/ventas_pos.png" alt="Análisis comercial">
                    <h3 class="title">Análisis comercial</h3>
                    <p class="descricion">Determine sus costos, márgenes y trace un presupuesto para ventas incrementales.</p>
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
                    <video src="{{asset('videos/video_presentacion_appsiel_voz_selmary.mp4')}}" preload="none" playsinline controls muted loop poster="./images/appsiel-poster.jpg" autoplay></video>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <div class="wraper">
            <div class="newsletter__content">
                <h2 class="newsletter__title">Boletín semanal</h2>
                <p class="newsletter__descripcion">Suscribete a nuestro newsletter semanal y te haremos llegar la mejor información para impulsar el crecimiento de tu negocio. Además de promociones, descuentos, productos y todo el contenido de tecnología que nuestro maravilloso equipo prepara cada semana.</p>
                <form id="formulario" method="post" action="{{route('newsletter.store')}}">
                    @csrf
                    <div class="newsletter__suscribete"><input name="email" type="email" placeholder="user@example.com" required>
                        <button type="button" onclick="guardar()">SUSCRÍBETE</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
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

