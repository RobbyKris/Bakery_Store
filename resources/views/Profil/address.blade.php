<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alamat Customer</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

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

        .card {
            border: none;
        }

        .cardHeader {
            height: 387px;
            border-radius: 15px;
        }

        .card-img-top {
            width: 100%;
            height: 100%;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
        }

        legend {
            color: #9D4B22;
            font-size: 64px;
            font-weight: bold;
            margin-top: 3%;
        }

        h3 {
            color: #3B1F09;
        }

        .toggle-button {
            background-color: transparent;
            border: none;
            color: #000;
            padding: 15px 25px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            position: relative;
        }

        .toggle-button::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background-color: #3B1F09;
            transition: width 0.3s, left 0.3s;
        }

        .navbar-toggler-icon {
            background-color: #F1DAAE;
        }

        .toggle-button.active::after {
            width: 100%;
            left: 0;
        }

        #indicator {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            background-color: #3B1F09;
            width: 100%;
            transition: width 0.3s, left 0.3s;
            display: none;
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
            width: max-content;
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

        .imgBox {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
        }

        .imgProfil {
            width: 100%;
            height: 100%;
        }

        .custom-btn:hover {
            background-color: whitesmoke;
            border-color: #CC9650;
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
                        <a class="nav-link" href="{{ url('indexOrder') }}">Order</a>
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
                                <h1 class="modal-title fs-5" id="staticBackdropLabel" style="font-weight:bold">Logout</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Do you really want to log out?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal" style="background: transparent; color: #9D4B22; border: 1px solid #9D4B22;">No, Close</button>
                                <a href="{{ url('login')}}" class="btn" style="background: #9D4B22; color: #FFFCD3;">
                                    <i></i>Yes, Log Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <legend>My Address</legend>
    </div>

    <div class="container text-center mt-5">
        <div class="container d-flex justify-content-center align-items-center">
            <form class="search mt-2" method="GET" action="#">
                <i class="fas fa-search search-icon"></i>
                <input class="search-input" type="search" name="nama" placeholder="Search">
            </form>
        </div>
    </div>

    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-lg-3" style="background:#F7F3C0; box-shadow: 0 10px 10px 10px rgba(128, 128, 128, 0.2);">
                <center>
                    <div class="imgBox mt-5">
                        <img class="imgProfil" src="{{ asset('images/user_profil2.jpg') }}">
                    </div>
                    <h5 style="color: #3B1F09; font-weight: bold; font-size: 20px; margin-top:15px;">Adi Suryo</h5>
                </center>
                <div class="button-wrapper" style="margin-top: 20%">
                    <div class="toggle-button text-dark text-start" onclick="toggleContent('buttonA')">
                        <a class="nav-link" style="color: #CC9650" href="{{ url('indexProfil') }}">Account</a>
                    </div>
                    <div class="toggle-button text-dark active text-start" onclick="toggleContent('buttonB')">
                        <a class="nav-link" style="color: #3B1F09" href="{{ url('address') }}">Address</a>
                    </div>
                    <div id="indicator"></div>
                </div>
            </div>
            <div class="col-lg-9" style="background:#FFFCD3; box-shadow: 0 10px 10px rgba(128, 128, 128, 0.2)">
                <h5 style="color: #3B1F09; font-weight: bold; font-size: 18px; margin-top:5%; text-align: left;">Address</h5>
                <div class="row">
                    @foreach ($alamat as $item)
                    <div class="col-md-4 mb-3">
                        <div class="card bg-transparent" style="width: 18rem; border: 2px solid #CC9650;">
                            <div class="card-body">
                                <p class="card-text text-start mb-1">{{ $item['nama'] }}</p>
                                <div class="position-absolute top-0 end-0">
                                    <a href="{{ url('editAddress') }}" class="btn btn-sm btn-outline-transparent me-2 custom-btn" style="color: #CC9650;">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-sm btn-outline-transparent me-2 custom-btn" style="color: #CC9650;">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ url('createAddress') }}" class="btn me-2" style="color:#3B1F09">
                        <i class="fas fa-plus-circle me-1"></i> Tambah Alamat Baru
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>