<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Alamat</title>
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

        legend {
            color: #9D4B22;
            font-size: 64px;
            font-weight: bold;
            margin-top: 3%;
        }

        label {
            color: #CC9650;
        }

        h3 {
            color: #3B1F09;
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

    <legend class="text-center">Update Address</legend>

    <div class="container p-5" style="background: #FFFCD3; box-shadow: 0 10px 10px 10px rgba(128, 128, 128, 0.2); margin-top: 12%">
        <form class="form" action="{{ url('address') }}">
            @csrf
            <div class="input-container mb-3 bg-transparent">
                <label class="font-weight-bold mb-2">Address</label>
                <textarea type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Jl. Janti Blok H No. 17" style="border: 2px solid #CC9650; background: transparent; height: 200px;"></textarea>
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="container-fluid search-container" style="margin-top: 10%;">
                <div class="row">
                    <div class="col-md-11 d-flex justify-content-end align-items-end">
                        <a href="{{ url('address') }}" class="btn" type="button" style="background: transparent; color: #9D4B22; border: 1px solid #9D4B22; width: 95px;">
                            Back
                        </a>
                    </div>
                    <div class="col-md-1 d-flex justify-content-end align-items-end">
                        <button class="btn" type="submit" style="background: #9D4B22; color: #FFFCD3; width: 95px;">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>