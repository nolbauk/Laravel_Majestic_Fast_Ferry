<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <h1>LOGIN</h1>
                <hr>
                <p>Please log in to continue</p>
                <label for="username">Username</label>
                <input class="input" type="text" name="username" placeholder="Username" required>
                <label for="password">Password</label>
                <input class="input" type="password" name="password" placeholder="Password" required>
                <button type="submit" style="color: #ffa12c" class="btn_login">LOGIN</button>
                <p><a href="{{ route('register') }}">REGISTER</a></p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
        <div class="right">
            <img src="{{ asset('assets/majestic.png') }}" alt="Logo" class="logo" width="100%">
        </div>
    </div>
</body>
</html>
