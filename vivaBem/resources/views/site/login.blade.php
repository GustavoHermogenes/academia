<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Academia VivaBem</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logoVivaBem.svg') }}">

    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>

<body class="bodyLogin">

    <form action="{{ route('login') }}" method="POST" class="login">
        @csrf

        <div class="caixaLogin">

            <div class="logo">

                <img src="{{ asset('img/logoVivaBem.svg') }}" alt="">

            </div>

            <div class="input">

                <div>

                    <div>
                        <input type="text" placeholder="Digite seu email" name="email" id="email"
                            value="{{ old('email') }}"><i class="fa-regular fa-envelope" style="color: #ffffff;"></i>
                    </div>
                    <span class="error">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>

                    <div>
                        <input type="password" placeholder="Digite sua senha" name="password" id="password"
                            value="{{ old('password') }}"><i class="fa-regular fa-lock" style="color: #ffffff;"></i>
                    </div>
                   <span class="error">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>

                </div>

                <input type="submit" value="Login">

            </div>

        </div>

    </form>

</body>

</html>
