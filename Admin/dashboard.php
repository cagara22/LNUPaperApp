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

    <!--Chart JS-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="./assets/chartjs/dist/chart.umd.js"></script>

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
                            <li class="nav-item">
                                <a href="dashboard.php" class="nav-link active" aria-current="page">
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
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
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
                    <h1 class="fw-bold sub-title">DASHBOARD</h1>
                </div>
                <div class="row"  style="height: 100%;">
                    <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center align-items-center p-1">
                        <div class="card w-100 text-bg-yellow">
                            <div class="card-body">
                                <h5 class="card-title">No. of Students:</h5>
                                <div class="text-center">
                                    <p class='card-text fs-1 fw-bold'>100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center align-items-center p-1">
                        <div class="card w-100 text-bg-navyblue">
                            <div class="card-body">
                                <h5 class="card-title">No. of Programs:</h5>
                                <div class="text-center">
                                    <p class='card-text fs-1 fw-bold'>100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center p-1">
                        <div class="card w-100 text-bg-black">
                            <div class="card-body">
                                <h5 class="card-title">No. of Papers:</h5>
                                <div class="text-center">
                                    <p class='card-text fs-1 fw-bold'>100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                        <canvas id="graph1"></canvas>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                        <canvas id="graph2"></canvas>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!--Bootstrap JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script> -->
    <script src="./assets/bootstrap/js/bootstrap.bundle.js"></script>

    <!--Custom JS-->
	<script type="text/javascript">
        var years = ['0', '2022', '2023', '2024', '2025', '2026'];
        var coe = [0, 100, 200, 300, 200, 300];
        var cas = [0, 90, 100, 150, 250, 200];
        var cme = [0, 80, 120, 175, 300, 100];

        new Chart("graph1", {
            type: "line",
            data: {
                labels: years,
                datasets: [{
                    label: "COE",
                    data: coe,
                    borderColor: "rgba(214,167,61,1.0)",
                    fill: false
                }, {
                    label: "CAS",
                    data: cas,
                    borderColor: "rgba(7,17,96,1.0)",
                    fill: false
                }, {
                    label: "CME",
                    data: cme,
                    borderColor: "rgba(41,41,41,1.0)",
                    fill: false
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: "Number of Papers Created per Year"
                    }
                }
            }
        });

        var labels = ["COE", "CAS", "CME"];
        var values = [1000, 2000, 1500];
        var barColors = [
            "rgba(214,167,61,1.0)",
            "rgba(7,17,96,1.0)",
            "rgba(41,41,41,1.0)"
        ];

        new Chart("graph2", {
            type: "bar",
            data: {
                labels: labels,
                datasets: [{
                    backgroundColor: barColors,
                    data: values
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: "Total Number of Papers per Colleges"
                    }
                }
            }
        });
    </script>
</body>

</html>
</body>

</html>