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
        <section class="d-flex flex-column justify-content-center align-items-center" id="papersHeader"  style="padding-top: 4.8rem;">
            <h1 class="display-1 fw-bold" style="color: #071160;">COLLEGES</h1>
            <div class="row" style="width:100%">
                <div class="col-12 col-lg-4 my-1">
                    <div class="card text-center align-items-center mx-auto p-3 text-bg-yellow">
                        <a href="#" class="stretched-link">
                            <img src="./images/coelogo.png" class="cust-img-75" alt="COE logo">
                        </a>
                        <div class="card-body">
                            <h1 class="card-title fw-bold">COE</h5>
                            <p class="card-text lh-1">To produce  world class educators and education leaders imbued with ideals,  aspirations, values and traditions of Philippine life that can adapt to  the challenges of the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 my-1">
                    <div class="card text-center align-items-center mx-auto p-3 text-bg-navyblue">
                        <a href="#" class="stretched-link">
                            <img src="./images/caslogo.png" class="cust-img-75" alt="CAS logo">
                        </a>
                        <div class="card-body">
                            <h1 class="card-title fw-bold">CAS</h1>
                            <p class="card-text lh-1">To provide world class professionals in the arts and sciences, and develop and maintain curricular programs that are relevant and responsive to regional and national development goals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 my-1">
                    <div class="card text-center align-items-center mx-auto p-3 text-bg-black">
                        <a href="#" class="stretched-link">
                            <img src="./images/cmelogo.png" class="cust-img-75" alt="CME logo">
                        </a>
                        <div class="card-body">
                            <h1 class="card-title fw-bold">CME</h1>
                            <p class="card-text lh-1">To provide  an academic perspective for the students to acquire the necessary tools  for development within the managerial context.</p>
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