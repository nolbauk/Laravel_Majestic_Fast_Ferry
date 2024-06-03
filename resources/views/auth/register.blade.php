<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <h1>SIGN UP</h1>
                <hr>
                <p>
                    <label for="username">Username</label>
                    <input class="input" type="text" name="username" placeholder="Username" required>
                    <label for="email">Email</label>
                    <input class="input" type="email" name="email" placeholder="Email" required>
                    <label for="password">Password</label>
                    <input class="input" type="password" name="password" placeholder="Password" required>
                    <label for="password_confirmation">Confirm Password</label>
                    <input class="input" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                    <button style="color: #ffa12c" type="submit" class="btn-register">FINISH</button>
                </p>
            </form>
            <p><a href="{{ url('/') }}">Go back home</a></p>
        </div>
        <div class="right">
            <img src="{{ asset('assets/majestic.png') }}" class="logo">
        </div>
    </div>
</body>
</html>
