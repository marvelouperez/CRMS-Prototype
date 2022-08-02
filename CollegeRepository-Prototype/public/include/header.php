<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRMS</title>
    <link rel="icon" href="/public/assets/img/pup_logo_1.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="/public/assets/css/header.css" rel="stylesheet" />
    <script defer src="/public/assets/js/header.js"></script>
    <!--Bootstrap-->
    <!-- Bootstrap 5.1 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/public/assets/img/pup_logo_1.png" alt="" width="30"
                    height="30">CRMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active nav-link-ltr" aria-current="page" href="/repository/mainRepository">Library</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="#">News</a>
                    </li>

                    <li class="d-flex nav-item dropdown">
                        <?php if (!empty($_SESSION['account'])) : ?>
                        <a class="dropdown-toggle btn btn-outline-dark" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['account']->user_uuid?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <li><a class="dropdown-item" href="/auth/dashboard">Dashboard</a>
                            <a class="dropdown-item" href="/auth/logout">Logout</a>
                            </li>
                        </ul>
                        <?php else : ?>
                        <a class="btn btn-outline-dark" href="/auth/login" style="margin-left: 5px">Login</a>
                        <a class="btn btn-outline-dark" href="/auth/registerv2" style="margin-left: 5px">Register</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>