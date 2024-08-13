<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Customer</title>
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
                        <a class="nav-link" href="{{ url('historyCustomer') }}">History</a>
                    </li>
                </ul>
                <span class="selected-option text-white"></span>
                <a href="{{ url('login') }}" class="btn btn-transparent" style="border: 2px solid #F1DAAE; border-radius: 50px">
                    <i class="fas fa-user-tie" style="color:#F1DAAE"></i>
                </a>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <legend>My Account</legend>
    </div>

    <div class="container mt-5 mb-5">
        <form class="form" action="{{ url('indexProfil') }}">
            @csrf            
            <div class="row">
                <div class="col-lg-3" style="background:#F7F3C0; box-shadow: 0 10px 10px 10px rgba(128, 128, 128, 0.2);">
                    <center>
                        <div class="imgBox mt-5">
                            <img class="imgProfil" src="{{ asset('images/user_profil2.jpg') }}">
                        </div>
                        <h5 style="color: #3B1F09; font-weight: bold; font-size: 20px; margin-top:15px;">Adi Suryo</h5>
                    </center>
                    <div class="button-wrapper" style="margin-top: 20%">
                        <div class="toggle-button text-dark active text-start" onclick="toggleContent('buttonA')">
                            <a class="nav-link" style="color: #3B1F09" href="#">Account</a>
                        </div>
                        <div class="toggle-button text-dark text-start" onclick="toggleContent('buttonB')">
                            <a class="nav-link" style="color: #CC9650" href="{{ url('address') }}">Address</a>
                        </div>
                        <div id="indicator"></div>
                    </div>
                </div>
                <div class="col-lg-9" style="background:#FFFCD3; box-shadow: 0 10px 10px rgba(128, 128, 128, 0.2)">

                    <div class="card-body" style="padding: 20px;">
                        <h5 style="color: #3B1F09; font-weight: bold; font-size: 18px; margin-top:5%; text-align: left;">Update Account</h5>
                        <div class="input-container mb-3 bg-transparent mt-5">
                            <label class="font-weight-bold mb-2">Photo Profil</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" style="border: 2px solid #CC9650; background: transparent;">
                        </div>
                        <div class="input-container mb-3 bg-transparent">
                            <label class="font-weight-bold mb-2">Name</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Adi Suryo" style="border: 2px solid #CC9650; background: transparent;">
                        </div>
                        <div class="input-container mb-3 bg-transparent">
                            <label class="font-weight-bold mb-2">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="adisuryo@gmail.com" style="border: 2px solid #CC9650; background: transparent;" readonly>
                        </div>
                        <div class="input-container mb-3 bg-transparent">
                            <label class="font-weight-bold mb-2">Phone Number</label>
                            <input type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" placeholder="0877123124124" style="border: 2px solid #CC9650; background: transparent;">
                        </div>
                        <div class="input-container mb-3 bg-transparent">
                            <label class="font-weight-bold mb-2">Birth Date</label>
                            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" placeholder="20-04-2003" style="border: 2px solid #CC9650; background: transparent;" required max="<?php echo date('Y-m-d'); ?>" onchange="validateDate(this)">
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-10 d-flex justify-content-end align-items-center">
                                <a href="{{ url('indexProfil') }}" class="btn" type="button" style="background: transparent; color: #9D4B22; border: 1px solid #9D4B22; width: 95px;">
                                    Back
                                </a>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center align-items-center ml-auto">
                                <button class="btn" type="submit" style="background: #9D4B22; color: #FFFCD3; width: 95px;">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

<script>
    function validateDate(input) {
        var today = new Date();
        var yyyy = today.getFullYear();
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var dd = String(today.getDate()).padStart(2, '0');
        var maxDate = yyyy + '-' + mm + '-' + dd;

        if (input.value > maxDate) {
            input.value = maxDate;
        }
    }
</script>

</html>