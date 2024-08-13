<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Outfit';
        }

        body {
            background-color: #9D4B22;
        }

        .bg-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            filter: brightness(0.5);
            position: absolute;
        }

        .logo {
            height: 20px;
            width: auto;
        }

        .signup {
            font-weight: bold;
            color: #F1DAAE;
        }

        .login {
            font-weight: bold;
            color: #9D4B22;
        }

        .nav-link:hover {
            font-weight: bold;
            color: white;
        }

        li {
            background-color: #9D4B22;
            border-radius: 32px;
            width: 88px;
            text-align: center;
        }

        .active {
            background-color: #F1DAAE;
            border-radius: 32px;
            width: 88px;
            text-align: center;
        }

        .btn {
            background-color: #D9D9D9;
            width: 100%;
            height: 45px;
            margin-top: 65px;
            font-size: 20px;
        }

        .btn::after {
            content: 'Login';
            transform: translate(-50%, -50%);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            pointer-events: none;
        }

        .btn:hover {
            color: white;
            background-color: grey;
        }

        legend {
            font-size: 50px;
            color: #fff;
            font-weight: bold;
            margin-bottom: 30px;
        }

        legend::after {
            content: 'LOGIN';
            transform: translate(-50%, -50%);
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            pointer-events: none;
        }

        .input-container .form-control {
            width: 100%;
            height: auto;

        }

        .loginbox {
            width: 445px;
            height: auto;
            background-color: rgba(255, 255, 255, .1);
            box-shadow: 0 25px 45px rgba(0, 0, 0, .2);
            border-radius: 50px;
            border: 2px solid rgba(255, 255, 255, .2);
            /* border-right: 2px solid rgba(255, 255, 255, .2);
            border-bottom: 2px solid rgba(255, 255, 255, .2); */
            backdrop-filter: blur(10px);
        }

        .question:hover {
            text-decoration: underline !important;
        }
    </style>
</head>

<body>
    <img class="bg-img img-fluid" src="{{ asset('images/logreg.jpg') }}" alt="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-2  @if(request()->is('login')) active @endif">
                        <a class="login nav-link" href="{{ url('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="signup nav-link" href="{{ url('register') }}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="loginbox container position-absolute top-50 start-50 translate-middle text-center fw-bold pt-3 pb-3 ps-5 pe-5">
        <legend></legend>
        <form class="form" action="{{ url('indexOrder') }}">
            @csrf
            <div class="input-container form-floating mb-3">
                <input type="text" class="form-control rounded-pill" id="floatingName" placeholder="Name" name="nama" required />
                <label for="floatingName">Name</label>
            </div>
            <div class="input-container form-floating">
                <input type="password" class="form-control rounded-pill" id="floatingPassword" placeholder="Password" name="password" required />
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit" class="btn rounded-pill">

            </button>
        </form>
        <p class="text-white mt-3" style="font-weight: lighter;">Don't have an account? <a class="question text-white fw-bold" style="text-decoration: none;" href="{{ url('register') }}">Sign Up</a></p>
    </div>
</body>

</html>