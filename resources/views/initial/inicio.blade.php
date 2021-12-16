<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret friend do rock (and roll)</title>
    <link rel="stylesheet" href="{{asset('css/initial/inicio.css')}}" />
    <link rel="stylesheet" href="{{asset('css/initial/carousel.css')}}" />
</head>
<body>
    <header>
        <section>
            <picture>
                <img src="{{asset('img/logo/logopresentedetchola.png')}}" alt="Logo" />
            </picture>
            <h1> Amigx Secretx do rock</h1>
        </section> 
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Criar/Entrar em salas</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Cadastrar</a>
                        @endif
                    @endauth
                </div>
            @endif  
    </header>
    <main>
        <div>
            <h1> BEM VINDXS AXS AMIGXS SECRETXS</h1>
            <br></br>
            <h3> Nossos sistema funciona como um organizador de sorteios para amigo oculto. Nele, suas festas serão facilmente organizadas.</h3>
            <img src="{{asset('img/logo/presentefort.png')}}" alt="Logo" />
        </div>

    </main>    
</body>
</html>
