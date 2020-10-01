<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="icon" type="image/png" href="{{asset('images/favicon.ico')}}" />
    <title>Login - Appsiel</title>
</head>
<body>
    <div class="w-screen h-screen bg-gray-900 flex justify-center items-center">
        <div class="w-11/12 mx-auto rounded-lg flex" style="height: 80%;">
            <div class="w-8/12 px-24 py-8 rounded-lg relative" style="background: url('{{asset('images/background_newsletter.jpg')}}') no-repeat;background-size: cover; ">
                <div class="text-white text-lg absolute top-0 left-0 pl-8 pt-6">
                    <img src="{{asset('images/Lg_ 1.png')}}" alt="Appsiel" class="h-16 md:h-24">
                </div>
                <div class="w-3/5 absolute pl-8 pt-6" style="top:50%; left: 0; transform: translateY(-50%)">
                    <div class="text-gray-400  md:text-lg lg:text-2xl font-bold text-left">Sistemas para el crecimiento empresarial</div>
                    <div class="text-sm md:text-lg lg:text-xl text-left text-gray-400">Somos una empresa dedicada al desarrollo de sistemas de información que aumenten la productividad de nuestros clientes.</div>
                    <div class="text-left pt-4 pb-2">
                        <a href="{{url('/contactUs')}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Solicita información aquí</a>
                    </div>
                </div>
                <nav class="absolute bottom-0 left-0 w-full d block">
                    <ul class="flex items-center justify-between w-10/12 ml-8 mb-8 text-white">
                        <li class="">
                            <a class="hover:text-indigo-600" href="{{url('/aboutUs')}}">Quiénes Somos</a>
                        </li>
                        <li><a class="hover:text-indigo-600" href="">Precios</a></li>
                        <li><a class="hover:text-indigo-600" href="{{url('/blog')}}">Blog</a></li>
                        <li><a class="hover:text-indigo-600" href="{{url('contactUs')}}">Contacto</a></li>
                        <li><a class="-my-1 py-1 px-2 bg-blue-900 rounded-full" href="http://demo.appsiel.com.co/login" target="_blank">DEMO</a></li>
                    </ul>
                </nav>
            </div>
            <div class="w-4/12 bg-gray-800 rounded -mx-4 flex flex-col items-center justify-center">

                <div class="text-white w-8/12 font-bold">Join over 25 million learners from around the globe</div>

                <div class="text-white text-sm w-8/12 my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum laudantium nam, nesciunt officia recusandae rem.</div>

                <form method="POST" class="w-8/12" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="relative mt-1 md:mt-0">
                            <input type="email" name="email" class="w-full text-white bg-gray-900 text-sm rounded w-64 px-4 pl-8 py-2 focus:outline-none" placeholder="Email *" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="absolute top-0">
                                <svg class="mt-2 ml-1 w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <div class="form-group row">
                            <div class="relative mt-1 md:mt-0">
                                <input type="password" name="password" class="w-full text-white bg-gray-900 text-sm rounded w-64 px-4 pl-8 py-2 focus:outline-none" placeholder="Password *"  name="password" required autocomplete="current-password">
                                <div class="absolute top-0">
                                    <svg class="mt-2 ml-1 w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6.625 2.655A9 9 0 0119 11a1 1 0 11-2 0 7 7 0 00-9.625-6.492 1 1 0 11-.75-1.853zM4.662 4.959A1 1 0 014.75 6.37 6.97 6.97 0 003 11a1 1 0 11-2 0 8.97 8.97 0 012.25-5.953 1 1 0 011.412-.088z" clip-rule="evenodd" />
                                        <path fill-rule="evenodd" d="M5 11a5 5 0 1110 0 1 1 0 11-2 0 3 3 0 10-6 0c0 1.677-.345 3.276-.968 4.729a1 1 0 11-1.838-.789A9.964 9.964 0 005 11zm8.921 2.012a1 1 0 01.831 1.145 19.86 19.86 0 01-.545 2.436 1 1 0 11-1.92-.558c.207-.713.371-1.445.49-2.192a1 1 0 011.144-.83z" clip-rule="evenodd" />
                                        <path fill-rule="evenodd" d="M10 10a1 1 0 011 1c0 2.236-.46 4.368-1.29 6.304a1 1 0 01-1.838-.789A13.952 13.952 0 009 11a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <button type="submit" class="w-full  p-2 mt-4 bg-indigo-500  text-white text-sm rounded font-weight-light">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
