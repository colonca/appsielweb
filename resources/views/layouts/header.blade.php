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
                    <a class="nav__link" href="">Nosotros<i class="fas fa-sort-down"></i></a>
                    <ul class="nav__submenu">
                        <li class="submenu__item"><a class="nav__link" href="{{url('quienes-somos-appsiel')}}">Quíenes somos</a></li>
                        <li class="submenu__item"><a class="nav__link" href="{{url('preguntas-frecuentes-appsiel')}}">Preguntas frecuentes</a></li>
                    </ul>
                </li>
                <li class="nav__item"><a class="nav__link" href="{{url('clientes-appsiel')}}">Clientes</a></li>
                <li class="nav__item"><a class="nav__link" href="">Precios</a></li>
                <li class="nav__item"><a class="nav__link" href="">Blog</a></li>
                <li class="nav__item"><a class="nav__link" href="">Contacto</a></li>
                <li class="nav__item"><a class="nav__link activo" href="http://demo.appsiel.com.co/login" target="_blank">DEMO</a></li>
            </ul>
        </nav>
    </div>
</header>
