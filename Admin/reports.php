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
                            <li class="nav-item">
                                <a href="reports.php" class="nav-link active" aria-current="page">
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
                    <h1 class="fw-bold sub-title">REPORTS</h1>
                </div>
                <div class="row w-100 h-100">

                    <div class="col-12 col-lg-9 d-flex justify-content-center align-items-start" id="cust-height">
                        <div class="row w-100 h-100">
                            <div class="col-12">
                                <div class="row d-flex justify-content-end">
                                    <div class="col-6 col-lg-3">
                                        <div class="form-floating">
                                            <select class="form-select form-select-sm" id="programCollege" name="programCollege" value="" onchange="updateChart()">
                                                <option value="coe" selected>COE</option>
                                                <option value="cas">CAS</option>
                                                <option value="cme">CME</option>
                                            </select>
                                            <label for="programCollege">College</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-start w-100">
                                <canvas id="graph1"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <div class="row h-100">

                            <div class="col-12 col-sm-6 col-lg-12 d-flex justify-content-center align-items-center">
                                <canvas id="graph2"></canvas>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-12 d-flex justify-content-center align-items-center">
                                <canvas id="graph3"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <form action="" class="row">

                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="college" name="college" value="" onchange="updateProgramOptions()" required>
                                                <option value="ALL" selected>ALL</option>
                                                <option value="COE">COE</option>
                                                <option value="CAS">CAS</option>
                                                <option value="CME">CME</option>
                                            </select>
                                            <label for="college">COLLEGE</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="program" name="program" value="" required disabled>
                                                <option value="ALL" selected>ALL</option>

                                            </select>
                                            <label for="program">PROGRAM</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="yearCreated" name="yearCreated" value="">
                                                <option value="" selected>2021</option>
                                                <option value="">2022</option>
                                                <option value="">2023</option>
                                            </select>
                                            <label for="yearCreated">YEAR</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2">
                                    <a class="btn btn-add fw-bold w-100" href="" role="button">GENERATE REPORT</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">College</th>
                                                <th scope="col">Program</th>
                                                <th scope="col">Year Created</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <td class='text-center'>1</td>
                                                <td class='text-center'>The Quick Brown Fox Jumps Over The Lazy Dog</td>
                                                <td class='text-center'>CAS</td>
                                                <td class='text-center'>BSIT</td>
                                                <td class='text-center'>2024</td>
                                            </tr>
                                            <tr>
                                                <td class='text-center'>1</td>
                                                <td class='text-center'>The Quick Brown Fox Jumps Over The Lazy Dog</td>
                                                <td class='text-center'>CAS</td>
                                                <td class='text-center'>BSIT</td>
                                                <td class='text-center'>2024</td>
                                            </tr>
                                            <tr>
                                                <td class='text-center'>1</td>
                                                <td class='text-center'>The Quick Brown Fox Jumps Over The Lazy Dog</td>
                                                <td class='text-center'>CAS</td>
                                                <td class='text-center'>BSIT</td>
                                                <td class='text-center'>2024</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
        // Program Select Functionality--------------------------
        function updateProgramOptions() {
            var collegeSelect = document.getElementById("college");
            var programSelect = document.getElementById("program");
            var selectedCollege = collegeSelect.value;

            // Clear existing options
            programSelect.innerHTML = '';

            // Add default option
            var defaultOption = document.createElement("option");
            defaultOption.value = "ALL";
            defaultOption.text = "ALL";
            defaultOption.disabled = false;
            defaultOption.selected = true;
            programSelect.appendChild(defaultOption);

            // Add options based on the selected college
            if (selectedCollege === "COE") {
                addOption(programSelect, "BSIT");
                addOption(programSelect, "BEED");
                // Add more options for COE as needed
                programSelect.disabled = false;
            } else if (selectedCollege === "CAS") {
                addOption(programSelect, "BSBIO");
                addOption(programSelect, "BLIS");
                // Add more options for CAS as needed
                programSelect.disabled = false;
            } else if (selectedCollege === "CME") {
                addOption(programSelect, "BSHM");
                addOption(programSelect, "BSSS");
                // Add more options for CME as needed
                programSelect.disabled = false;
            } else if (selectedCollege === "ALL") {
                programSelect.innerHTML = '';
                var defaultOption = document.createElement("option");
                defaultOption.value = "ALL";
                defaultOption.text = "ALL";
                defaultOption.disabled = false;
                defaultOption.selected = true;
                programSelect.appendChild(defaultOption);

                programSelect.disabled = true;
            }
        }

        function addOption(selectElement, value) {
            var option = document.createElement("option");
            option.value = value;
            option.text = value;
            selectElement.appendChild(option);
        }
        // ------------------------------------------------------

        // Chart Filter Functionality----------------------------
        var casLabels = ["BSIT", "BSBIO", "BLIS"];
        var coeLabels = ["BSED SCI", "BEED"];
        var cmeLabels = ["BSHM", "BSSS", "BSDS", "GSIS"]
        var casValues = [1000, 2000, 1500];
        var coeValues = [500, 600];
        var cmeValues = [300, 600, 500, 800];

        function updateChart() {
            var selectElement = document.getElementById("programCollege");
            var selectedCollege = selectElement.value;

            var labels, values;

            if (selectedCollege === "cas") {
                labels = casLabels;
                values = casValues;
            } else if (selectedCollege === "coe") {
                labels = coeLabels;
                values = coeValues;
            } else if (selectedCollege === "cme") {
                labels = cmeLabels;
                values = cmeValues;
            }

            // Get the chart instance
            var chartInstance = Chart.getChart("graph1");

            // Update chart data
            chartInstance.data.labels = labels;
            chartInstance.data.datasets[0].data = values;
            chartInstance.update();
        }
        // ------------------------------------------------------

        // Bar Graph---------------------------------------------
        var barColors = [
            "rgba(214,167,61,1.0)",
            "rgba(7,17,96,1.0)",
            "rgba(41,41,41,1.0)"
        ];

        new Chart("graph1", {
            type: "bar",
            data: {
                labels: coeLabels,
                datasets: [{
                    backgroundColor: barColors,
                    data: coeValues
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        font: {
                            size: 15,
                            weight: "bolder"
                        },
                        text: "Total Number of Papers per Programs"
                    }
                }
            }
        });
        // ------------------------------------------------------

        //Pie Chart----------------------------------------------
        var labels = ["COE", "CAS", "CME"]

        var studentValues = [100, 200, 300];
        var papaersValues = [500, 1200, 1500];

        new Chart("graph2", {
            type: "pie",
            data: {
                labels: labels,
                datasets: [{
                    backgroundColor: barColors,
                    data: studentValues
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        padding: 5,
                        text: "Total number of Student users per College"
                    },
                    legend: {
                        display: true,
                        position: "right"
                    }
                }
            }
        });
        // ------------------------------------------------------

        // Doughnut Chart----------------------------------------
        new Chart("graph3", {
            type: "doughnut",
            data: {
                labels: labels,
                datasets: [{
                    backgroundColor: barColors,
                    data: papaersValues
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        padding: 5,
                        text: "Total number of Papers per College"
                    },
                    legend: {
                        display: true,
                        position: "right"
                    }
                }
            }
        });
        // ------------------------------------------------------
    </script>
</body>

</html>
</body>

</html>