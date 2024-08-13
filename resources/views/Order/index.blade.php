<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Outfit';
        }

        body {
            background-color: #FFFCD3;
        }

        nav {
            background-color: #3B1F09;
        }

        .logo {
            height: 20px;
            width: auto;
        }

        .nav-link {
            color: #F1DAAE;
            font-weight: bold;
        }

        .nav-link:hover {
            font-weight: bold;
            color: white;
        }

        legend {
            color: #9B3C28;
            font-size: 70px;
            font-weight: bold;
            margin-top: 0;
        }

        h5 {
            color: #F1DAAE;
            font-size: 30px;
            margin-bottom: 0;
        }

        .bg-img {
            max-height: 60%;
            width: 100%;
            object-fit: cover;
            filter: brightness(0.5);
            z-index: -1;
        }

        @media (max-width: 576px) {
            .search-container .row {
                justify-content: center;
                align-items: center;
            }
        }

        .search-container {
            position: absolute;
            top: 50%;
            margin-top: 7%;
        }

        .search {
            padding: 5px;
            display: flex;
            width: 55%;
            align-items: center;
            border-radius: 10px;
            background: #F7F3C0;
            transition: box-shadow 0.25s;
            height: 100%;
        }

        .search:focus-within {
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.75);
        }

        .search-input {
            margin-left: 10px;
            font-size: 16px;
            font-family: 'Lexend', sans-serif;
            outline: none;
            border: none;
            background: transparent;
            width: 400px;
        }

        .search-input::placeholder,
        .search-icon {
            color: #CC9650;
        }

        .search-icon {
            margin-left: 2%;
        }

        .fa-plus {
            color: #FFFCD3;
        }

        button:hover {
            background-color: #CC9650 !important;
            color: white !important;
        }

        p {
            color: #9D4B22;
            font-weight: lighter;
        }

        .fa-edit,
        .fa-trash-alt {
            color: #9D4B22;
        }

        .content-container {
            background-color: #3B1F09;
            padding: 20px;
        }

        .delicious-text {
            font-size: 85px;
            font-weight: bold;
            color: #D6B16B;
            text-align: left;
            margin-top: 20px;
            margin-bottom: 0;
        }

        .bakery-container {
            display: flex;
            align-items: center;
        }

        .bakery-container img {
            width: 130px;
            /* Atur lebar gambar sesuai kebutuhan */
            height: auto;
            margin-right: 10px;
            /* Jarak antara gambar dan teks */
        }

        .bakery-text,
        .shop-text {
            font-size: 85px;
            font-weight: bold;
            color: #D6B16B;
            text-align: left;
            margin-top: 0;
            margin-bottom: 0;
        }

        .card img {
            border-radius: 10px;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-2">
                        <a class="nav-link text-light" href="{{ url('indexOrder') }}">Order</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="{{ url('history') }}">History</a>
                    </li>
                </ul>
                <span class="selected-option text-white"></span>

                <button type="button" class="btn btn-transparent" style="border: 2px solid #F1DAAE; border-radius: 50px" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fas fa-user-tie" style="color:#F1DAAE"></i>
                </button>

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background-color: #FFFCD3">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel" style="font-weight:bold">Logout
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Go to Profil or Logout ?
                            </div>
                            <div class="modal-footer">
                                <a href="{{ url('indexProfil') }}" class="btn" style="background: transparent; color: #9D4B22; border: 1px solid #9D4B22;">
                                    <i></i>Go to Profile
                                </a>
                                <a href="{{ url('login') }}" class="btn" style="background: #9D4B22; color: #FFFCD3;">
                                    <i></i>Yes, Log Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="content-container pb-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6 order-md-last pb-0" style="padding-top: 5%;">
                    <p class="delicious-text" style="margin: 0; line-height: 1;">DELICIOUS</p>
                    <div class="bakery-container" style="margin: 5px 0;">
                        <img src="{{ asset('images/gambar2_navbar.PNG') }}" alt="Gambar Bakery">
                        <p class="bakery-text" style="margin: 0; line-height: 1;">BAKERY</p>
                    </div>
                    <p class="shop-text" style="margin: 5px 0; line-height: 1;">SHOP!</p>
                    <p style="font-size: 20px; font-weight: bold; color: #D6B16B; margin-top: 25px ; line-height: 1.2;">
                        Experience the Magic of Freshly Baked Goodness,<br>Straight from our Ovens to Your Taste Buds.
                    </p>
                </div>
                <div class="col-md-6 order-md-last">
                    <img src="{{ asset('images/gambar_navbar.PNG') }}">
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center position-relative" style="margin-top: 5%; margin-bottom: 2%;">
        <legend>Category Product</legend>
        <div class="row mt-5" style="font-size:45px; color: #9B3C28; font-weight:bold;">
            <div class="col-md-4">
                <a href="{{ url('preorder') }}">
                    <img src="{{ asset('images/pre_order.JPG') }}" class="card-img-top" alt="Pre Order">
                </a>
                Pre-Order
            </div>
            <div class="col-md-4">
                <a href="{{ url('ready') }}">
                    <img src="{{ asset('images/ready.JPG') }}" class="card-img-top" alt="Ready">
                </a>
                Ready
            </div>
            <div class="col-md-4">
                <a href="{{ url('hampers') }}">
                    <img src="{{ asset('images/hampers.JPG') }}" class="card-img-top" alt="Hampers">
                </a>
                Hampers
            </div>
        </div>
    </div>

</body>

</html>