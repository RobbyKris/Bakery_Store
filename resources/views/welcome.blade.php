<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
            max-height: 100%;
            width: 100%;
            object-fit: cover;
            filter: brightness(0.4);
        }

        .logo {
            height: 1.2500em;
            width: auto;
        }

        .nav-link {
            font-weight: bold;
            color: #F1DAAE;
        }

        .nav-link:hover {
            font-weight: bold;
            color: white;
        }

        legend {
            font-weight: bold;
            font-size: 437.5%;
            color: #F1DAAE;
        }

        h1 {
            font-weight: bold;
            font-size: 2.25em;
            color: #F1DAAE;
        }

        h3.deskripsi {
            color: #F1DAAE;
        }

        h3.namaMakanan {
            color: #3B1F09;
        }

        h3.namaService {
            color: #F1DAAE;
            font-size: 35px;
            font-weight: bold;
        }

        li {
            background-color: #9D4B22;
            border-radius: 2em;
            width: 5.5em;
            text-align: center;
        }

        .cardMenu {
            background-color: #F1DAAE;
        }

        .cardService {
            border: none;
        }

        .imgMenu {
            width: 77%;
            height: 70%;
        }

        .imgService {
            width: 6.25em;
            height: 6.25em;
        }

        .scrollmenu {
            margin-top: 57.5em;
            white-space: nowrap;
            overflow-x: hidden;
        }

        .scrollmenu::-webkit-scrollbar {
            width: 0.3125em;
            background-color: #9D4B22;
            border-radius: 0.6250em;
        }

        small {
            color: #F1DAAE;
            font-size: 0.6875em;
            font-weight: lighter;
        }

        .fixNavbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .content {
            margin-bottom: 200px;
        }
    </style>
</head>

<body>
    <img class="bg-img img-fluid position-absolute top-0 start-0" src="{{ asset('images/navbar_welcome.jpg') }}" alt="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-2">
                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('register') }}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="position-absolute top-50 start-50 translate-middle text-center fw-bold" style="width: 60%;">
        <legend>Welcome to Atma Kitchen!</legend>
        <h3 class="deskripsi">Let's embark on a journey through the realm of flavors in our kitchen. Enjoy every bite and sip of the delicacies we serve with love and dedication.</h3>
    </div>
    <div class="position-absolute top-100 start-50 translate-middle text-center fw-bold" style="width: 60%; margin-top: 78px">
        <legend>Our Menu's</legend>
        <h3 class="deskripsi">Discover a variety of amazing flavors</h3>
    </div>
    <div class="scrollmenu container overflow-auto">
        <div class="row flex-nowrap justify-content-center">
            <div class="col-lg-3" style="margin-left: 645px;">
                <div class="cardMenu card d-flex justify-content-center align-items-center pt-5 pb-4">
                    <img class="imgMenu card-img-top" src="{{ asset('images/brownies.JPG') }}" alt="Brownies">
                    <div class="text-start mt-2" style="width: 77%;">
                        <h3 class="namaMakanan">Brownies</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cardMenu card d-flex justify-content-center align-items-center pt-5 pb-4">
                    <img class="imgMenu card-img-top" src="{{ asset('images/lapis_legit.jpg') }}" alt="Lapis Legit">
                    <div class="text-start mt-2" style="width: 77%;">
                        <h3 class="namaMakanan">Lapis Legit</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cardMenu card d-flex justify-content-center align-items-center pt-5 pb-4">
                    <img class="imgMenu card-img-top" src="{{ asset('images/roti_sosis.JPG') }}" alt="Roti Sosis">
                    <div class="text-start mt-2" style="width: 77%;">
                        <h3 class="namaMakanan">Roti Sosis</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cardMenu card d-flex justify-content-center align-items-center pt-5 pb-4">
                    <img class="imgMenu card-img-top" src="{{ asset('images/choco_creamy_latte.JPG') }}" alt="Choco Creamy Latte">
                    <div class="text-start mt-2" style="width: 77%;">
                        <h3 class="namaMakanan">Choco Creamy Latte</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cardMenu card d-flex justify-content-center align-items-center pt-5 pb-4">
                    <img class="imgMenu card-img-top" src="{{ asset('images/lapis_surabaya.jpg') }}" alt="Lapis Surabaya">
                    <div class="text-start mt-2" style="width: 77%;">
                        <h3 class="namaMakanan">Lapis Surabaya</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cardMenu card d-flex justify-content-center align-items-center pt-5 pb-4">
                    <img class="imgMenu card-img-top" src="{{ asset('images/milk_bun.JPG') }}" alt="Milk Bun">
                    <div class="text-start mt-2" style="width: 77%;">
                        <h3 class="namaMakanan">Milk Bun</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content position-relative text-center fw-bold" style="width: 100%; margin-top: 100px;">
        <h1 style="font-size: 45px; margin-bottom:3%">Main services we provide</h1>
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-sm-4">
                    <div class="cardService card d-flex justify-content-center align-items-center bg-transparent">
                        <img class="imgService card-img-top img-fluid rounded-circle mb-2" src="{{ asset('images/service1.jpeg') }}" alt="Easy Ordering">
                        <h3 class="namaService">Easy Ordering</h3>
                        <div class="text-center" style="line-height: 0.9; width: 180px; font-size:23px;">
                            <small>Experience seamless and hassle-free online ordering for your utmost convenience</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="cardService card d-flex justify-content-center align-items-center bg-transparent">
                        <img class="imgService card-img-top img-fluid rounded-circle mb-2" src="{{ asset('images/service2.jpg') }}" alt="Top Ingredients">
                        <h3 class="namaService">Top Ingredients</h3>
                        <div class="text-center" style="line-height: 0.9; width: 180px; font-size:23px;">
                            <small>Crafting excellence with top-notch ingredients, our trained experts deliver unmatched delight</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="cardService card d-flex justify-content-center align-items-center bg-transparent">
                        <img class="imgService card-img-top img-fluid rounded-circle mb-2" src="{{ asset('images/service3.jpeg') }}" alt="Training Baker">
                        <h3 class="namaService">Training Baker</h3>
                        <div class="text-center" style="line-height: 0.9; width: 180px; font-size:23px;">
                            <small>Our trained experts craft every delicious bread with perfection, ready to serve unparalleled delight.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer style="background-color: #deded5; padding: 20px 0; text-align: center; width: 100%;">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 mb-4 d-flex flex-column justify-content-start">
                    <h5 class="mb-3 text-start" style="letter-spacing: 2px; color: #9B3C28;">Atma Kitchen</h5>
                    <p class="text-start">
                        Welcome to Atma Kitchen, where passion meets perfection in baking. We take pride in crafting
                        delicious and high-quality baked goods using the finest ingredients. From our oven to your
                        table, we deliver warmth and love in every bite. Join us in our journey of taste and
                        tradition.
                    </p>
                </div>
                <div class="col-lg-6 mb-4 d-flex flex-column justify-content-start">
                    <h5 class="mb-3 text-start" style="letter-spacing: 2px; color: #9B3C28;">Kontak</h5>
                    <p class="text-start">
                        WhatsApp <a href="https://wa.me/yourphonenumber">+6285835354717</a><br>
                        Email <a href="mailto:@atmakitchen.com">@atmakitchen.com</a> untuk informasi lebih lanjut.
                    </p>
                </div>                
            </div>
        </div>
    </footer>
</body>

</html>