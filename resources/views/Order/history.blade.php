<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            margin-bottom: 20px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        .card-header {
            background-color: #F7F3C0;
            border-radius: 15px 15px 0 0;
        }

        .card-img-top {
            width: 100%;
            height: 100%;
            border-radius: 15px 0 0 15px;
        }

        .card-body {
            padding: 20px;
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

        .fa-edit,
        .fa-trash-alt {
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
                        <a class="nav-link" href="{{ url('indexOrder') }}">Order</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link text-light" href="{{ url('history') }}">History</a>
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
                                <a href="{{ url('login') }}" class="btn" style="background: #9D4B22; color: #FFFCD3;">
                                    Yes, Log Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <legend>History</legend>
    </div>

    <div class="container text-center mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="color: #9D4B22;">Image</th>
                    <th scope="col" style="color: #9D4B22;">Name</th>
                    <th scope="col" style="color: #9D4B22;">Quantity</th>
                    <th scope="col" style="color: #9D4B22;">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($history as $item)
                <tr>
                    <td><img src="{{ $item['images'] }}" style="max-width: 100px; border-radius: 10px;"></td>
                    <td style="color: #9D4B22;">{{ $item['nama'] }}</td>
                    <td style="color: #9D4B22;">{{ $item['jml_barang'] }}</td>
                    <td style="color: #9D4B22;"> Rp {{ $item['harga'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>