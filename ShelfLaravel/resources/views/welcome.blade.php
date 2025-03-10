<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>

    @auth <!-- Verifica se o usuário está logado -->
    
    <section class="hero-section">
        <div class="wrapper center">
            <div class="form form--small">
                <h1 class="secondary-heading">Publicar</h1>
                <form action="/createPost" method="POST" class="form__inputs">
                    @csrf
                    <input type="text" placeholder="Título" name="title">
                    <input type="textarea" placeholder="Fala o que quer" name="descricao">
                    <button class="btn">Enviar</button>
                </form>
            </div>
        </div>
    </section>
    <form action="/logout" method="POST">
        @csrf
        <button class="btn btn--alert btn--fixed">Logout</button>
    </form>

    @else
        
    <div class="hero-section">
        <div class="wrapper">
            <div class="form">
                <h2 class="secondary-heading">Register</h2>
                <form action="/register" method="POST" class="form__inputs">
                    @csrf <!-- Laravel tem proteção contra CSRF embutida -->
                    <input type="text" placeholder="name" name="name">
                    <input type="email" placeholder="email@email.com" name="email">
                    <input type="password" placeholder="senha" name="password">
                    <button class="btn">Confirm</button>
                </form>
            </div>
            <div class="form">
                <h2 class="secondary-heading">Login</h2>
                <form action="/login" method="POST" class="form__inputs">
                    @csrf <!-- Laravel tem proteção contra CSRF embutida -->
                    <input type="text" placeholder="name" name="loginname">
                    <input type="password" placeholder="senha" name="loginpassword">
                    <button class="btn">Confirm</button>
                </form>
            </div>
        </div>
    </div>
    

    @endauth <!-- O que estiver fora do auth vai aparecer do mesmo jeito -->

    <section class="primary-section">
        <div class="post-grid">
            @foreach ($posts as $post)
                <div class="form">
                    <h1 class="secondary-heading">{{$post['title']}}</h1>
                    {{$post['descricao']}}
                </div>
            @endforeach
        </div>
    </section>

    <footer class="primary-footer">Etec Dra. Ruth Cardoso</footer>
</body>
</html>