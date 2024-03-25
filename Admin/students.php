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
                            <li class="nav-item">
                                <a href="students.php" class="nav-link active" aria-current="page">
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
                    <h1 class="fw-bold sub-title">STUDENTS</h1>
                </div>
                <form class="row g-3" method="GET" action="">
                    <div class="col-8 col-lg-10">
                        <input type="text" class="form-control" id="searchname" name="searchname" oninput="validateSearch(this)" placeholder="Search...">
                    </div>
                    <div class="col-4 col-lg-2">
                        <button type="submit" class="btn btn-search w-100 fw-bold" name="search">SEARCH</button>
                    </div>
                </form>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2">
                    <a class="btn btn-add fw-bold w-100" href="" role="button" data-bs-toggle="modal" data-bs-target="#addNewStudentModal">ADD NEW STUDENTS</a>
                </div>

                <div class="modal fade" id="addNewStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addNewStudentModal" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <form class="modal-content needs-validation" action="" method="" novalidate>
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">ADD NEW STUDENT</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <input type="hidden" name="" id="" value="">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="studentID" name="studentID" placeholder="" oninput="validateID(this)" required>
                                            <label for="studentID">STUDENT ID</label>
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
                                            <select class="form-select" id="college" name="college" value="" onchange="updateProgramOptions()" required>
                                                <option value="" selected disabled>Select a college...</option>
                                                <option value="COE">COE</option>
                                                <option value="CAS">CAS</option>
                                                <option value="CME">CME</option>
                                            </select>
                                            <label for="college">COLLEGE</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="program" name="program" value="" required disabled>
                                                <option value="" selected disabled>Select a Program...</option>
                                                
                                            </select>
                                            <label for="program">PROGRAM</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-delete fw-bold" data-bs-dismiss="modal">CANCEL</button>
                                <button type="submit" class="btn btn-add fw-bold">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Middle Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Suffix</th>
                                <th scope="col">Sex</th>
                                <th scope="col">Program</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td class='text-center'>1</td>
                                <td class='text-center'>Vincent Felix</td>
                                <td class='text-center'>Sabalza</td>
                                <td class='text-center'>Cagara</td>
                                <td class='text-center'>JR</td>
                                <td class='text-center'>Male</td>
                                <td class='text-center'>BSIT</td>
                                <td class='text-center'>
                                    <a href='#' onclick='deleteRecord(1)' class='btn btn-delete m-1' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-title='DELETE'>
                                        <i class="fa-solid fa-trash fa-lg pe-none"></i>
                                    </a>
                                    <a href='' class='btn btn-view m-1' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-title='VIEW'>
                                        <i class="fa-solid fa-eye fa-lg pe-none"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>1</td>
                                <td class='text-center'>Vincent Felix</td>
                                <td class='text-center'>Sabalza</td>
                                <td class='text-center'>Cagara</td>
                                <td class='text-center'>JR</td>
                                <td class='text-center'>Male</td>
                                <td class='text-center'>BSIT</td>
                                <td class='text-center'>
                                    <a href='#' onclick='deleteRecord(1)' class='btn btn-delete m-1' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-title='DELETE'>
                                        <i class="fa-solid fa-trash fa-lg pe-none"></i>
                                    </a>
                                    <a href='' class='btn btn-view m-1' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-title='VIEW'>
                                        <i class="fa-solid fa-eye fa-lg pe-none"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>1</td>
                                <td class='text-center'>Vincent Felix</td>
                                <td class='text-center'>Sabalza</td>
                                <td class='text-center'>Cagara</td>
                                <td class='text-center'>JR</td>
                                <td class='text-center'>Male</td>
                                <td class='text-center'>BSIT</td>
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
            </main>
        </div>
    </div>

    <!--Bootstrap JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script> -->
    <script src="./assets/bootstrap/js/bootstrap.bundle.js"></script>

    <!--Custom JS-->
    <script type="text/javascript">
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

        function validateSearch(input) {
            var regex = /^[a-zA-Z0-9\sñÑ-]*$/; // Regular expression to allow only alphanumeric characters and spaces

            if (!regex.test(input.value)) {
                input.value = input.value.replace(/[^a-zA-Z0-9\sñÑ-]/g, ''); // Remove any special characters
            }
        }

        function validateID(input) {
            var regex = /^[0-9]*$/; // Regular expression to allow only numbers

            if (!regex.test(input.value)) {
                input.value = input.value.replace(/[^0-9]/g, ''); // Remove any characters that are not numeric
            }

            if (input.value.length > 7) {
                input.value = input.value.slice(0, 7); // Truncate the input value to 7 characters if it exceeds the limit
            }
        }

        function validateText(input) {
            var regex = /^[a-zA-Z\sñÑ-]*$/; // Regular expression to allow only alphanumeric characters and spaces

            if (!regex.test(input.value)) {
                input.value = input.value.replace(/[^a-zA-Z\sñÑ-]/g, ''); // Remove any special characters
            }
        }

        function updateProgramOptions() {
            var collegeSelect = document.getElementById("college");
            var programSelect = document.getElementById("program");
            var selectedCollege = collegeSelect.value;

            // Clear existing options
            programSelect.innerHTML = '';

            // Add default option
            var defaultOption = document.createElement("option");
            defaultOption.value = "";
            defaultOption.text = "Select a Program...";
            defaultOption.disabled = true;
            defaultOption.selected = true;
            programSelect.appendChild(defaultOption);

            // Add options based on the selected college
            if (selectedCollege === "COE") {
                addOption(programSelect, "BSIT");
                addOption(programSelect, "BEED");
                // Add more options for COE as needed
            } else if (selectedCollege === "CAS") {
                addOption(programSelect, "BSBIO");
                addOption(programSelect, "BLIS");
                // Add more options for CAS as needed
            } else if (selectedCollege === "CME") {
                addOption(programSelect, "BSHM");
                addOption(programSelect, "BSSS");
                // Add more options for CME as needed
            }

            // Enable the program select element
            programSelect.disabled = false;
        }

        function addOption(selectElement, value) {
            var option = document.createElement("option");
            option.value = value;
            option.text = value;
            selectElement.appendChild(option);
        }

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
</body>

</html>