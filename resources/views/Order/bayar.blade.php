<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My product</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

        /* .card {
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
        } */

        legend {
            color: #9D4B22;
            font-size: 64px;
            font-weight: bold;
            margin-top: 3%;
        }

        h3 {
            color: #3B1F09;
        }

        h5 {
            color: #3B1F09;
            font-size: 25px;
            font-weight: bold;
        }

        .toggle-button {
            background-color: transparent;
            border: none;
            color: #000;
            padding: 15px 20px 15px 40px;
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

        .toggle-button .circle {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border-radius: 50%;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
        }

        .toggle-button a {
            text-decoration: none;
            color: inherit;
        }

        .img-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .img-container img {
            max-height: 100px;
            max-width: 100%;
            object-fit: cover;
        }

        .box {
            padding: 0 3% 0 3%;
            border: 2px solid #CC9650;
            border-radius: 10px;
        }

        label {
            color: #9D4B22;
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

    <legend class="text-center">Pay for Your Order!!!</legend>

    <div class="container bg-transparet mt-5 mb-5">
        <form class="form" action="{{ url('nota') }}">
            @csrf
            <div class="box">
                <h5 style="color: #9D4B22; font-weight: bold; font-size: 22px; margin: 2% 0 2% 0; text-align: left;"><i class="material-icons">&#xe55e;</i> Shipping Address</h5>
                <p class="card-text text-start mb-0" style="font-size: 18px; color: #9D4B22;">Adi Suryo | 0877123124124</p>
                <p class="card-text text-start mb-0" style="font-size: 18px; color: #9D4B22;">adisuryo@gmail.com</p>
                <p class="card-text text-start mb-3" style="font-size: 18px; color: #9D4B22;">Jl. Anggrek Blok G7 No.12</p>
            </div>
            <div class="box mt-4 mb-4">
                <div class="row mb-4 mt-2" style="border: none;">
                    <div class="col-sm-2">
                        <div class="img-container">
                            <img src="{{ asset('images/resep_brownies.png') }}" class="img-fluid rounded-start mt-2">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <p class="card-text text-start mb-0 mt-2" style="font-size: 18px; font-weight: bold; color: #9D4B22;">Brownies</p>
                            <p class="card-text text-start mb-0 mt-0"><small style="color: #9D4B22;">1 Loyang</small></p>
                            <p class="card-text text-start mb-0 mt-0"><small style="color: #9D4B22;">x 5</small></p>
                            <p class="card-text text-start mb-0 mt-0"><small style="color: #9D4B22;">Delivery</small></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-body">
                            <p class="card-text text-end mb-0 mt-2"><small style="color: #9D4B22;">Poin : 15</small></p>
                            <p class="card-text text-end mb-0 mt-0"><small style="color: #9D4B22;">Ongkir : Rp 15.000,-</small></p>
                            <p class="card-text text-end mb-0 mt-0"><small style="color: #9D4B22;">Sub-Total : Rp 30.000,-</small></p>
                            <p class="card-text text-end mb-0 mt-0" style="font-size: 18px; font-weight: bold; color: #9D4B22;">Total Harga : Rp 45.000,-</p>
                        </div>
                    </div>
                </div>

                <div class="input-container mb-3 bg-transparent">
                    <label class="font-weight-bold mb-2">Virtual Number</label>
                    <input type="number" class="form-control" name="virtual_number" placeholder="39012341283812" style="border: 2px solid #CC9650; background: transparent; color: #9D4B22;" readonly>
                </div>

                <div class="input-container mb-3 bg-transparent">
                    <label class="font-weight-bold mb-2">Order for Date?</label>
                    <input type="date" class="form-control" name="date" style="border: 2px solid #CC9650; background: transparent; color: #9D4B22;">
                </div>

                <div class="input-container mb-3 bg-transparent">
                    <label class="font-weight-bold mb-2">Bukti Pembayaran</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" style="border: 2px solid #CC9650; background: transparent; color: #9D4B22;">
                </div>
            </div>
            <div class="row">
                <div class="col md-10"></div>
                <div class="col-md-1">
                    <a href="{{ url('indexOrder') }}" class="btn" type="button" style="background: transparent; color: #9D4B22; border: 1px solid #9D4B22; width: 100%;">
                        Back
                    </a>
                </div>
                <div class="col-md-1">
                    <button class="btn" type="submit" style="background: #9D4B22; color: white; border: none; width: 100%;">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dateInput = document.querySelector('input[name="date"]');

            var today = new Date();
            today.setDate(today.getDate() + 1); 
            var yyyy = today.getFullYear();
            var mm = String(today.getMonth() + 1).padStart(2, '0'); 
            var dd = String(today.getDate()).padStart(2, '0');

            var minDate = yyyy + '-' + mm + '-' + dd;
            dateInput.setAttribute('min', minDate);

            dateInput.addEventListener('change', function() {
                if (new Date(dateInput.value) < today) {
                    dateInput.value = minDate;
                }
            });
        });
    </script>


</body>

</html>