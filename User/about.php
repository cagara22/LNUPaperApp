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
                        <li class="nav-item px-3">
                            <a class="nav-link" href="papers.php">PAPERS</a>
                        </li>
                        <li class="nav-item px-5 fw-bold">
                            <a class="nav-link active" aria-current="page" href="about.php">ABOUT</a>
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
        <section class="d-flex flex-column justify-content-center align-items-center" id="aboutHeader" style="padding-top: 4.8rem;">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <img src="images/LNUTaclobanLogo.png" class="img-fluid" style="width: 35%; height:auto;" alt="Image">
                    <h1 class="card-title fw-bold" style="color: #071160; letter-spacing: 4px; margin-top: 1rem;">ABOUT</h5>
                        <p class="text" style="margin-top: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at sapien vel nunc vestibulum accumsan. Vivamus gravida, elit id tincidunt ultricies, odio odio sodales urna, eu congue elit tortor vel libero. Curabitur sit amet enim quam. Praesent ut vehicula arcu. Fusce venenatis felis at nunc commodo, eget tincidunt nulla aliquam. Integer vitae ante ut orci eleifend venenatis. Suspendisse potenti.</p>
                </div>
            </div>
        </section>
    </main>

    <!--Bootstrap JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script> -->
    <script src="./assets/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
</body>

</html>