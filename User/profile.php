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
        <section class="d-flex flex-column justify-content-start align-items-start" id="papersTwoHeader" style="padding-top: 4.8rem;">
            <div class="d-flex justify-content-start align-items-center">
                <h1 class="fw-bold">Hi,</h1>
                <h1 class="fw-bold">Vincent Felix!</h1>
            </div>
            <img src="images/paperlist-line.png" style="width: 100%" alt="">

            <div class="container mt-3">
                <div class="card pb-1" style="background-color: #F0F0F0; border-radius: 10px 10px 0 0">
                    <div class="card-body text-center container-fluid py-2" style="background-color: #d6a73d; border-radius: 10px 10px 0 0">
                        <h4 class="card-title fw-bold" style="color: #ffffff;">STUDENT PROFILE</h4>
                    </div>
                    <div class="card-body">
                        <form class="row needs-validation" action="" method="" novalidate>

                            <input type="hidden" name="" id="" value="">

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="studentID" name="studentID" placeholder="" oninput="validateStudentID(this)" required>
                                    <label for="studentID">Student ID</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" oninput="validateText(this)" required>
                                    <label for="firstName">FIRST NAME</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="middleName" name="middleName" placeholder="" oninput="validateText(this)">
                                    <label for="middleName">MIDDLE NAME</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" oninput="validateText(this)" required>
                                    <label for="lastName">LAST NAME</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="suffix" name="suffix" placeholder="" oninput="validateText(this)">
                                    <label for="suffix">SUFFIX</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="college" name="college" value="" required>
                                        <option value="" selected disabled>Select a college...</option>
                                        <option value="">COE</option>
                                        <option value="">CAS</option>
                                        <option value="">CME</option>
                                    </select>
                                    <label for="college">COLLEGE</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="program" name="program" value="" required>
                                        <option value="" selected disabled>Select a program...</option>
                                        <option value="">BSIT</option>
                                        <option value="">BLIS</option>
                                        <option value="">Deez Nutz</option>
                                    </select>
                                    <label for="program">Program</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 mb-1">
                                <div class="input-group mb-1">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        <label for="password">PASSWORD</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="height: 58px;" onclick="password_show_hide();">
                                            <i class="fas fa-eye" id="show_eye1"></i>
                                            <i class="fas fa-eye-slash d-none" id="hide_eye1"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6" id="passstrength" style="font-weight:bold;padding:6px 12px;">

                                </div>
                            </div>

                            <div class="col-12 col-md-6 mb-1">
                                <div class="input-group mb-1">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
                                        <label for="cpassword">CONFIRM PASSWORD</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="height: 58px;" onclick="cpassword_show_hide();">
                                            <i class="fas fa-eye" id="show_eye2"></i>
                                            <i class="fas fa-eye-slash d-none" id="hide_eye2"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container mt-2 my-1">
                <form class="d-flex justify-content-end">
                    <button class="btn btn-sm fs-5 fw-bold px-3" style="border-radius: 10px; background-color: #6171FF; color: #ffffff;" type="submit">UPDATE</button>
                </form>
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