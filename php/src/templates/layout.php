<html>

<head>
    <title><?=$this->e($title)?></title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .center {
        margin-left: 38.5%;
        position: absolute;
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand center" href="<?php echo APP_URI; ?>">Mine-Practice.eu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo APP_URI; ?>">Home</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://tadam.space">TSpace</a></li>
                            <li><a class="dropdown-item" href="#">TEdu</a></li>
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li> _->
                            <li><a class="dropdown-item" href="#">TTracker</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php #echo APP_URI; ?>/docs.php">Docs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php #echo APP_URI; ?>/api.php">API</a>
                    </li> -->
                </ul>
                <a class="nav-link text-white" aria-current="page" href="<?php echo APP_URI; ?>"><button
                        type="button" class="btn btn-outline-light">Join now!</button></a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <?=$this->section('content')?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>