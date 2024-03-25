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
    <header class="navbar sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand p-2" href="#">
            <img src="./images/LNUTaclobanLogo.png" alt="Logo" width="45" height="45" class="d-inline-block align-text-top">
        </a>

        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars fa-2xl d-inline-block align-text-center" style="color: #d6a73d;"></i>
                </button>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <img src="./images/LNUTaclobanLogo.png" alt="Logo" width="45" height="45" class="d-inline-block align-text-top">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-3 overflow-y-auto">
                        <a href="" class="d-flex align-items-center ms-2 mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                            <span class="fs-4">ADMIN</span>
                        </a>
                        <hr>
                        <ul class="nav flex-column">
                            <li>
                                <a href="dashboard.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-table-columns pe-none me-2"></i>
                                    DASHBOARD
                                </a>
                            </li>
                            <li>
                                <a href="papers.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-book-open pe-none me-2"></i>
                                    PAPERS
                                </a>
                            </li>
                            <li>
                                <a href="students.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-users pe-none me-2"></i>
                                    STUDENTS
                                </a>
                            </li>
                            <li>
                                <a href="admins.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-users-gear pe-none me-2"></i>
                                    ADMINS
                                </a>
                            </li>
                            <li>
                                <a href="colleges.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-school pe-none me-2"></i>
                                    COLLEGES
                                </a>
                            </li>
                            <li>
                                <a href="programs.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-graduation-cap pe-none me-2"></i>
                                    PROGRAMS
                                </a>
                            </li>
                            <li>
                                <a href="reports.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-newspaper pe-none me-2"></i>
                                    REPORTS
                                </a>
                            </li>
                            <li>
                                <a href="logs.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-clipboard-list pe-none me-2"></i>
                                    LOGS
                                </a>
                            </li>
                            <li>
                                <a href="backups.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-database pe-none me-2"></i>
                                    BACKUPS
                                </a>
                            </li>
                        </ul>

                        <hr>

                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./images/man.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>admin01</strong>
                            </a>
                            <ul class="dropdown-menu text-small shadow">
                                <li><a class="dropdown-item" aria-current="page" href="profile.php">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <main class="d-flex flex-column col-md-9 ms-sm-auto col-lg-10 px-md-4 section-100">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-1 mb-3 border-bottom">
                    <h1 class="fw-bold sub-title">Hi Vincent Felix!</h1>
                </div>

                <div class="card custcard border-light text-center" style="width: 100%;">
                    <div class="card-header">
                        <h4 class="fw-bold card-text-header">Admin Details</h4>
                    </div>
                    <div class="card-body">
                        <form class="row needs-validation" action="" method="" novalidate>

                            <input type="hidden" name="" id="" value="">

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="" oninput="validateUsername(this)" required>
                                    <label for="username">USERNAME</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" oninput="validateText(this)" required>
                                    <label for="firstName">FIRST NAME</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="middleName" name="middleName" placeholder="" oninput="validateText(this)">
                                    <label for="middleName">MIDDLE NAME</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" oninput="validateText(this)" required>
                                    <label for="lastName">LAST NAME</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="suffix" name="suffix" placeholder="" oninput="validateText(this)">
                                    <label for="suffix">SUFFIX</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="role" name="role" value="" required>
                                        <option value="" selected disabled>Select a role...</option>
                                        <option value="">ADMIN</option>
                                        <option value="">SECRETARY</option>
                                    </select>
                                    <label for="role">ROLE</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="college" name="college" value="" required>
                                        <option value="" selected disabled>Select a college...</option>
                                        <option value="">ALL</option>
                                        <option value="">COE</option>
                                        <option value="">CAS</option>
                                        <option value="">CME</option>
                                    </select>
                                    <label for="college">COLLEGE</label>
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

                            <div class="d-grid gap-2 d-md-flex justify-content-end">
                                <button type="submit" name="updateBtn" class="btn btn-update form-button-text"><span class="fw-bold">UPDATE</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!--Bootstrap JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script> -->
    <script src="./assets/bootstrap/js/bootstrap.bundle.js"></script>

    <!--JQuery-->
    <script type="text/javascript" src="./assets/jquery/jquery-3.7.1.min.js"></script>

    <!--Password Strength Meter-->
    <script type="text/javascript" src="./assets/passstrength/password-score.js"></script>
    <script type="text/javascript" src="./assets/passstrength/password-score-options.js"></script>
    <script type="text/javascript" src="./assets/passstrength/bootstrap-strength-meter.js"></script>

    <!--Custom JS-->
    <script type="text/javascript">
        // Bootstrap Form Validation----------------------------
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
        // ------------------------------------------------------

        // Password Stregth Meter--------------------------------
        $(document).ready(function() {
            $('#password').strengthMeter('text', {
                container: $('#passstrength'),
                hierarchy: {
                    '0': ['text-danger', ' '],
                    '1': ['text-danger', 'Very Weak'],
                    '25': ['text-danger', 'Weak'],
                    '50': ['text-warning', 'Moderate'],
                    '75': ['text-warning', 'Good'],
                    '100': ['text-success', 'Strong'],
                    '125': ['text-success', 'Very Strong']
                }
            });
        });
        // ------------------------------------------------------

        // Username Filter---------------------------------------
        function validateUsername(input) {
            var regex = /^[a-zA-Z0-9\sñÑ-]*$/; // Regular expression to allow only alphanumeric characters and spaces

            if (!regex.test(input.value)) {
                input.value = input.value.replace(/[^a-zA-Z0-9\sñÑ-]/g, ''); // Remove any special characters
            }
        }
        // ------------------------------------------------------

        // Text Filter-------------------------------------------
        function validateText(input) {
            var regex = /^[a-zA-Z\sñÑ-]*$/; // Regular expression to allow only alphanumeric characters and spaces

            if (!regex.test(input.value)) {
                input.value = input.value.replace(/[^a-zA-Z\sñÑ-]/g, ''); // Remove any special characters
            }
        }
        // ------------------------------------------------------

        // Password Show Functionality---------------------------
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye1");
            var hide_eye = document.getElementById("hide_eye1");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
        // ------------------------------------------------------

        // Confirm Password Show Functionality-------------------
        function cpassword_show_hide() {
            var x = document.getElementById("cpassword");
            var show_eye = document.getElementById("show_eye2");
            var hide_eye = document.getElementById("hide_eye2");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
        // ------------------------------------------------------

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
</body>

</html>