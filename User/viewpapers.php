<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LNU Paper App</title>

    <!--Header Icon-->
    <link rel="icon" type="images/x-icon" href="" />

    <!--Bootstrap CSS-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">

    <!--Google Fonts API-->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> -->

    <!--FontAwesome Icons-->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" /> -->
    <link href="./assets/fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="./assets/fontawesome/css/brands.css" rel="stylesheet" />
    <link href="./assets/fontawesome/css/solid.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="customcss.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./images/LNUTaclobanLogo.png" alt="Logo" width="45" height="45" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
                    <i class="fa-solid fa-bars fa-lg d-inline-block align-text-center" style="color: #d6a73d;"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item px-3">
                            <a class="nav-link" href="home.php">HOME</a>
                        </li>
                        <li class="nav-item px-5 fw-bold">
                            <a class="nav-link active" aria-current="page" href="papers.php">PAPERS</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                2001988
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">PROFILE</a></li>
                                <li><a class="dropdown-item" href="">LOGOUT</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="d-flex flex-column" id="papersTwoHeader" style="padding-top: 4.8rem;">
            <div class="d-flex justify-content-center align-items-center">
                <h1 class="text-center mt-3 fw-bold" style="color: #071160;;">Name of Thesis Paper</h1>
            </div>
            <div class="col-12">
                <img src="images/paperlist-line.png" style="width: 100%;" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <h4 class="fw-bold" style="color: #d6a73d;">2020 - BSIT</h4>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12 col-md-7 col-lg-9 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fs-5 fw-bold" style="color: #071160;">ABSTRACT:</h5>
                                <p class="card-text ms-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis arcu nec nulla vestibulum tristique vel nec turpis. Nullam efficitur magna non est finibus, ac auctor nisi laoreet. Fusce auctor, ante eu sollicitudin auctor, orci nisi pellentesque sapien, ac euismod elit nunc in tortor. Nullam quis justo ut elit tristique tempus. Vivamus id enim et urna vestibulum fringilla eget sit amet orci. Suspendisse potenti. Phasellus et purus vel dolor ultricies fermentum in nec ligula. Proin et justo ut lectus ultrices elementum in a erat. Maecenas id semper justo. Integer sagittis, velit at aliquet bibendum, elit turpis posuere elit, non luctus urna orci vel nulla. Sed ut arcu ac nunc pharetra feugiat. Vestibulum ullamcorper auctor arcu, at volutpat libero luctus vel. Curabitur nec felis id mauris imperdiet commodo eget eu orci. Sed ac quam sed nisl auctor facilisis in sit amet sapien. Fusce suscipit, lectus a euismod ultricies, justo elit fermentum risus, at vulputate lectus libero quis orci. Vivamus vel tortor a leo consectetur facilisis vel at augue. Phasellus hendrerit scelerisque metus eu fringilla. Pellentesque interdum eleifend ex, eget semper eros hendrerit id. Donec consectetur hendrerit tellus ac facilisis. Nullam nec ante at nisl iaculis rhoncus. Aenean facilisis ante nec ligula vestibulum, nec congue purus varius. Ut vitae congue quam, vel tempus arcu. Curabitur venenatis, risus non condimentum hendrerit, justo lacus blandit urna, in gravida arcu elit ut est.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fs-5 fw-bold" style="color: #071160;">AUTHORS:</h5>
                                <p class="card-text ms-2">Vincent Felix S. Cagara <br>
                                    Jovonovich J. Jardani <br>
                                    Debbie Nic A. Ibaniez <br>
                                    Ellon Musk B. Masumbing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="d-flex flex-column flex-md-row text-center justify-content-center py-4 px-4 px-xl-5">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            Copyright © 2023. All rights reserved.
        </div>
        <!-- Copyright -->
    </footer>

    <!--Bootstrap JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script> -->
    <script src="./assets/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
</body>

</html>