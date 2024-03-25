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

    <!--SweetAlert2-->
    <script src="./assets/sweetalert2/sweetalert2.all.js"></script>

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
                            <li class="nav-item">
                                <a href="programs.php" class="nav-link active" aria-current="page">
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
                    <h1 class="fw-bold sub-title">PROGRAMS</h1>
                </div>
                <div class="row w-100">
                    <div class="col-12 col-lg-8 order-2 order-lg-1">
                        <form class="row g-3" method="GET" action="">
                            <div class="col-8 col-lg-9">
                                <input type="text" class="form-control" id="searchname" name="searchname" oninput="validateSearch(this)" placeholder="Search...">
                            </div>
                            <div class="col-4 col-lg-3">
                                <button type="submit" class="btn btn-search w-100 fw-bold" name="search">SEARCH</button>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Shorthand Name</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">College</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td class='text-center'>BSIT</td>
                                        <td class='text-center'>Bachelor of Science in Information Technology</td>
                                        <td class='text-center'>CAS</td>
                                        <td class='text-center'>
                                            <a href='#' onclick='deleteRecord(1)' class='btn btn-delete m-1' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-title='DELETE'>
                                                <i class="fa-solid fa-trash fa-lg pe-none"></i>
                                            </a>
                                            <a href='' class='btn btn-view m-1' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-title='VIEW'>
                                                <i class="fa-solid fa-eye fa-lg pe-none"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-1 order-lg-2 mb-4">
                        <div class="card custcard border-light text-center" style="width: 100%;">
                            <div class="card-header">
                                <h4 class="fw-bold card-text-header">Program Details</h4>
                            </div>
                            <div class="card-body">
                                <form class="row needs-validation" action="" method="" novalidate>

                                    <input type="hidden" name="" id="" value="">

                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="programFullName" name="programFullName" oninput="validateText(this)" placeholder="" pattern="" title="" value="" required>
                                            <label for="programFullName">Program's Full Name</label>
                                        </div>
                                    </div>

                                    <div class="col-6 col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="programShortName" name="programShortName" oninput="validateText(this)" placeholder="" pattern="" title="" value="" required>
                                            <label for="programShortName">Shorthand Name</label>
                                        </div>
                                    </div>

                                    <div class="col-6 col-lg-12 mb-1">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="programCollege" name="programCollege" value="" required>
                                                <option value="" selected disabled>Select a college...</option>
                                                <option value="">COE</option>
                                                <option value="">CAS</option>
                                                <option value="">CME</option>
                                            </select>
                                            <label for="programCollege">College</label>
                                        </div>
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-end">
                                        <button type="submit" name="updateBtn" class="btn btn-update form-button-text"><span class="fw-bold">UPDATE</span></button>
                                    </div>
                                </form>
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
        // Delete Confirmation Alert-----------------------------
        async function deleteRecord(clientNum) {
            await Swal.fire({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this record!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                .then((willDelete) => {
                    if (willDelete.isConfirmed) {
                        window.location.href = `delete.php?lrn=${clientNum}`;
                    } else {
                        Swal.fire("CANCELED", "Record not deleted!", "info");
                    }
                });
        }
        // ------------------------------------------------------

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

        // Search Filter-----------------------------------------
        function validateSearch(input) {
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

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
</body>

</html>