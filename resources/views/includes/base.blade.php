<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <h1 style="color: rgb(214, 61, 219)">Site pikudo</h1>
    <div>
        @if (Auth::user())
            Eai bbzinho(a) {{ Auth::user()->name }}
            <br>
            <a href="{{ route('logout') }}">Vaza</a>
            @else
            <a href="{{ route('login') }}">Faz login no site cabaço</a>
        @endif
    </div>
    <!--Menu-->
    <div>
        <ul>
            <li><a href="{{ route('home')}} ">Home</a></li>
            <li><a href="{{ route('produtos')}} ">Produtos</a></li>
            <li><a href="{{ route('usuarios')}}">Usuários</a></li>
        </ul>
    </div>

    <hr style="color: rgb(214, 61, 219)">
    {{-- Conteúdo --}}
    @yield('content')

</body>
</html>
