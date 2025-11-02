<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Entrar</title>
</head>
<body>
    <div class="container">
        <section id="content">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h1>Entrar</h1>
                <div>
                    <input type="email" placeholder="Email" id="email" name="email" value="{{ old('email') }}"/>

                    @error('email')
                        <div class="text-danger mb-1">{{ $message }}</div>
                    @enderror

                </div>
                <div>
                    <input type="password" placeholder="Senha" id="password" name="password"/>

                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div>
                    <input type="submit" value="Log in" />
                    <a href="#">Esqueceu sua senha?</a>
                </div>
            </form><!-- form -->

        </section><!-- content -->

    </div><!-- container -->
</body>
</html>
