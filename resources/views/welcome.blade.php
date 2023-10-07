<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1148b72e65.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/todos_productos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/1148b72e65.js" crossorigin="anonymous"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>StoreApp</title>
</head>
<body>
    <header class="header container">
        <div class="header__menu">
            <h1>StoreApp</h1>
        </div>
        <ul class="navbar-nav ms-auto">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a id="btn-login" href="{{route('login')}}" class="btn__border__blue login__btn">Login</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('admin.home')}}">Dashboard</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </header>

    <section class="productos container">
        <div class="productos_cabecera">
            <h2 class="productos__titulo">Star Wars</h2>
            <a href="#">Ver todos</a>
        </div>
        <div class="producto__general">
            <div class="producto">
                <img src="{{asset('img/productos/Skill1.png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
            <div class="producto">
                <img src="{{asset('img/productos/Skill (2).png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
            <div class="producto">
                <img src="{{asset('img/productos/Skill (3).png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
            <div class="producto">
                <img src="{{asset('img/productos/Skill (4).png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
            <div class="producto">
                <img src="{{asset('img/productos/Skill (5).png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
            <div class="producto">
                <img src="{{asset('img/productos/Skill (2).png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
        </div>
    </section>

    <section class="productos container">
        <div class="productos_cabecera">
            <h2 class="productos__titulo">Star Wars</h2>
            <a href="#">Ver todos</a>
        </div>
        <div class="producto__general">
            <div class="producto">
                <img src="{{asset('img/productos/Skill1.png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
            <div class="producto">
                <img src="{{asset('img/productos/Skill (2).png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
            <div class="producto">
                <img src="{{asset('img/productos/Skill (3).png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
            <div class="producto">
                <img src="{{asset('img/productos/Skill (4).png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
            <div class="producto">
                <img src="{{asset('img/productos/Skill (5).png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
            <div class="producto">
                <img src="{{asset('img/productos/Skill (2).png')}}" alt="" class="img__producto">
                <div class="producto__contenido">
                    <p class="producto__nombre">Producto xyz</p>
                    <p class="producto__precio">$ 60.0</p>
                    <a href="" class="producto__link">Ver producto</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contacto container">
        <div class="contacto__div">
            <div class="contacto__div__datos">
                <img class="contacto__img" src="assets/img/Logo.svg" alt="">
                <ul class="contacto__datos">
                    <li class="contacto__datos__item">Quienes somos</li>
                    <li class="contacto__datos__item">Politicas de privacidad</li>
                    <li class="contacto__datos__item">Programa de fidelidad</li>
                    <li class="contacto__datos__item">Nuestras tiendas</li>
                    <li class="contacto__datos__item">Quiero ser franquiciado</li>
                    <li class="contacto__datos__item">Anunciate aquí</li>  
                </ul>
            </div> 
            <form  class="contacto__form" action="post">
                <legend>Hable con nosotros</legend>
                <input class="contacto__input__nombre w3-input" type="text" name="nombre" id="nombre" placeholder="fulanito">
                <textarea class="contacto__input__mensaje w3-input" name="contacto__mensaje" id="" cols="30" rows="10"></textarea>  
                <button class="btn__blue w3-input">enviar mensaje</button>          
            </form>
        </div>
       
    </section>

    <footer class="footer">
        <h4 class="footer__autor">Desarrollado por Luis Gerardo Porcayo</h4>
        <h4 class="footer__year">2023</h4>

    </footer>
    
</body>
</html>
