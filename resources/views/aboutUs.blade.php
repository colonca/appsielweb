@extends('layouts.app')

@section('title')
    Quiénes Somos - Appsiel
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')

    @include('layouts.campaing')

    <div class="wraper">
        <h1 class="text-gray-400 md:text-2xl lg:text-4xl text-center font-bold mt-8">Quienes Somos</h1>
        <p class="text-justify md:text-center md:text-xl my-4">Somos una empresa Vallenata dedicada al desarrollo de sistemas de información para empresas y negocios de distintos sectores. En APPSIEL S.A.S. desarrollamos y comercializamos aplicaciones web como servicio de software en la nube. Nos enfocamos en el crecimiento empresarial de nuestros clientes, a través del desarrollo de sistemas de información.</p>
    </div>

    <div class="wraper">
        <div class="md:flex justify-center items-center my-4">
            <div class="flex flex-col items-center md:w-1/2 mr-4">
                <img src="{{asset('svg/objetivo.svg')}}" class="w-32 h-32 md:w-56 md:h-56" alt="">
                <div class="text-gray-400 md:text-2xl lg:text-4xl text-center font-bold">Mision</div>
                <div class="md:text-2xl text-center">Facilitar la vida y el crecimiento empresarial a través de sistemas de información que aseguren la sostenibilidad de las organizaciones.</div class="md:text-lg">
            </div>
            <div class="flex flex-col items-center md:w-1/2">
                <img src="{{asset('svg/vision.svg')}}" class="w-32 h-32 md:w-56 md:h-56" alt="">
                <div class="text-gray-400 md:text-2xl lg:text-4xl text-center font-bold">Vision</div>
                <div class="md:text-2xl text-center">Ser líderes tecnológicos a nivel mundial en el desarrollo de sistemas de información para empresas y emprendedores.</div>
            </div>
        </div>
    </div>

    <livewire:about.team/>

    <div class="wraper">
        <div class="text-gray-400 md:text-2xl lg:text-4xl text-center font-bold  my-8">Opiniones de nuestros Clientes</div>
        <div class="p-6 md:w-10/12 mx-auto md:flex sm:justify-center items-center rounded-lg bg-gray-900 mt-4">
            <img class="object-cover rounded-full w-25 h-25 md:w-32 md:h-32 md:mr-8" src="./images/jonny.jpg" alt="Woman paying for a purchase">
            <div class="flex flex-col justify-between">
                <cite class="text-sm md:text-2xl mt-2">"Muy buen trabajo, equipo muy profesional y totalmente recomendable"</cite>
                <div class="text-indigo-700">Fran</div>
                <div class="text-indigo-400">CEO Marketplace Appsiel.com.co</div>
            </div>
        </div>
        <div class="p-6 md:w-10/12 mx-auto md:flex sm:justify-center items-center rounded-lg bg-gray-900 mt-4">
            <img class="object-cover rounded-full w-25 h-25 md:w-32 md:h-32 md:mr-8" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" alt="Woman paying for a purchase">
            <div class="flex flex-col justify-between">
                <cite class="text-sm md:text-2xl mt-2">"Desarrollaron la página web de nuestra empresa y estamos muy contentos con el trabajo realizado. Siempre atentos y contestando muy rápido. Oliver es muy resolutivo ante cualquier incidencia o duda q se pueda producir. Recomendables!!"</cite>
                <div class="text-indigo-700">Marta</div>
                <div class="text-indigo-400">Web de Reservas online HappyTrail.com</div>
            </div>
        </div>
        <div class="p-6 md:w-10/12 mx-auto md:flex sm:justify-center items-center rounded-lg bg-gray-900 mt-4">
            <img class="object-cover rounded-full w-25 h-25 md:w-32 md:h-32 md:mr-8" src="./images/jordan.jpg" alt="Woman paying for a purchase">
            <div class="flex flex-col justify-between">
                <cite class="text-sm md:text-2xl mt-2">"Me gustaría expresar mi gratitud a estos chicos por mi nueva página web de viajes y mi aplicación para los tours. Aprecio toda su ayuda y consejos, ¡les deseo todo lo mejor!"</cite>
                <div class="text-indigo-700">Jordan</div>
                <div class="text-indigo-400">CEO Agencia de Viajes Trivago</div>
            </div>
        </div>
    </div>

@endsection


