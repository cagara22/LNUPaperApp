<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LNU Paper App</title>
    <link rel="icon" type="images/x-icon" href="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Chakra Petch' rel='stylesheet'>

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
                    <img src="./images/menus.png" alt="Logo" width="45" height="45" class="d-inline-block align-text-top">
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
                                <a href="./dashboard.php" class="nav-link active" aria-current="page">
                                    <img src="./images/dashboard.png" alt="" width="16" height="16" class="bi pe-none me-2">
                                    DASHBOARD
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link link-body-emphasis">
                                    <img src="./images/papers.png" alt="" width="16" height="16" class="bi pe-none me-2">
                                    PAPERS
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link link-body-emphasis">
                                    <img src="./images/students.png" alt="" width="16" height="16" class="bi pe-none me-2">
                                    STUDENTS
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link link-body-emphasis">
                                    <img src="./images/admins.png" alt="" width="16" height="16" class="bi pe-none me-2">
                                    ADMINS
                                </a>
                            </li>
                            <li>
                                <a href="./profiles.php" class="nav-link link-body-emphasis">
                                    <img src="./images/colleges.png" alt="" width="16" height="16" class="bi pe-none me-2">
                                    COLLEGES
                                </a>
                            </li>
                            <li>
                                <a href="./profiles.php" class="nav-link link-body-emphasis">
                                    <img src="./images/programs.png" alt="" width="16" height="16" class="bi pe-none me-2">
                                    PROGRAMS
                                </a>
                            </li>
                            <li>
                                <a href="./profiles.php" class="nav-link link-body-emphasis">
                                    <img src="./images/reports.png" alt="" width="16" height="16" class="bi pe-none me-2">
                                    REPORTS
                                </a>
                            </li>
                            <li>
                                <a href="./profiles.php" class="nav-link link-body-emphasis">
                                    <img src="./images/logs.png" alt="" width="16" height="16" class="bi pe-none me-2">
                                    LOGS
                                </a>
                            </li>
                            <li>
                                <a href="./profiles.php" class="nav-link link-body-emphasis">
                                    <img src="./images/backup.png" alt="" width="16" height="16" class="bi pe-none me-2">
                                    BACKUPS
                                </a>
                            </li>
                        </ul>

                        <hr>

                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./images/man.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>admin01</strong>
                            </a>
                            <ul class="dropdown-menu text-small shadow">
                                <li><a class="dropdown-item" href="">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>