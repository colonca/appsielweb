<header class="header" id="header">
    <div class="wraper">
        <a href="{{url('/')}}"> <img class="header__logo" src="{{asset('images/Lg_ 1.png')}}" alt="appsiel"> </a>
        <label class="menu-open" for="open">
            <div class="menu__barra"></div>
            <div class="menu__barra"></div>
            <div class="menu__barra"></div>
        </label>
        <input id="open" type="checkbox">
        <nav class="menu">
            <ul class="nav">
                <li class="nav__item">
                    <a class="nav__link" href="{{url('/aboutUs')}}">Quiénes Somos</a>
                </li>
                <li class="nav__item"><a class="nav__link" href="">Precios</a></li>
                <li class="nav__item"><a class="nav__link" href="{{url('/blog')}}">Blog</a></li>
                <li class="nav__item"><a class="nav__link" href="{{url('contactUs')}}">Contacto</a></li>
                <li class="nav__item"><a class="nav__link -my-1 py-1 px-2 bg-blue-900 rounded-full" href="http://demo.appsiel.com.co/login" target="_blank">DEMO</a></li>
                <li class="nav__item"><a class="nav__link -my-1 py-1 px-2 bg-blue-900 rounded-full" href="{{route('login')}}" target="_blank">SIGN IN</a></li>
            </ul>
        </nav>
    </div>
</header>
