<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="https:://fonts.googleapis.com/css?family=Fredooka+One">
    <title>Login Investindo</title>
</head>
<body>
    <div class="background"></div>
    <section id="conteudo-view" class="login">

        <h1>Investindo</h1>
        <h3>O nosso gerenciador de Investimento</h3>

        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}

        <p>Acesse o sistema</p>

        <label for="">
            {!! Form::text('username', null, ['class' => 'input', 'placeholder' => "Usuário"]) !!} 
        </label>

        <label for="">
            {!! Form::password('password', ['placeholder' => "Senha"]) !!}
        </label>

        <label for="">
            {!! Form::submit('Entrar') !!}
        </label>


        {{!! Form::close() !!}}

        

    </section>
</body>
</html>