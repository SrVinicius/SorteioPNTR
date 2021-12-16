<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar sala</title>
    <link rel="stylesheet" href="{{asset('css/dash/treino.css')}}" />
</head>

<body>
    <header>
        <div>
            <h1>Amigo Secreto</h1>
            <img src="{{asset('img/logo/logopresentedetchola.png')}}" alt="Logo" />
        </div>
    </header>
    <main>
        <div>
            <picture>
                <a href="{{ url('/welcome') }}"> <img src="{{asset('img/logo/criarsalalogo.png')}}" alt="LogoCriar" /> </a>
            </picture>
            <a href="{{ url('/welcome') }}"> <h1>Criar Sala</h1> </a>
            </section>
            <section>
                <input type="text" name="nomesala">
            </section>
        </div>
    </main>
</body>

</html>