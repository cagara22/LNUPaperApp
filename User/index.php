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
	<main class="container-fluid" id="mainbg">
		<div class="row" style="height: 100vh;">
			<div class="col-12 d-flex justify-content-center align-items-end">
				<div class="row">
					<div class="col-12 d-flex justify-content-center pb-4">
						<img src="./images/LNUTaclobanLogo.png" style="width: 120px; height: 120px;" alt="LNU Logo">
					</div>
				</div>
			</div>
			<div class="col-12 d-flex justify-content-center align-items-start">
				<div class="card border-light text-center" id="loginForm">
					<div class="card-header" style="padding-bottom: 0px;">
						<h2 class="fw-bold card-text-header">WELCOME!</h2>
					</div>
					<div class="align-items-center p-3">
						<img src="./images/man.png" class="card-img-top rounded" alt="man" style="width: 50px; height: 50px;">
					</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="stuID" name="stuID" oninput="validateID(this)" placeholder="2001988" required>
								<label for="stuID">STUDENT ID</label>
							</div>
							<div class="input-group mb-3">
								<div class="form-floating">
									<input type="password" class="form-control" id="password" name="password" placeholder="password" required>
									<label for="password">PASSWORD</label>
								</div>
								<div class="input-group-append">
									<span class="input-group-text" style="height: 58px;" onclick="password_show_hide();">
										<i class="fas fa-eye" id="show_eye"></i>
										<i class="fas fa-eye-slash d-none" id="hide_eye"></i>
									</span>
								</div>
							</div>

							<div class="d-grid gap-2 my-2">
								<button type="submit" class="btn btn-warning cust-btn-yellow"><span class="fw-bold">LOGIN</span></button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!--Bootsrap JS-->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script> -->
	<script src="./assets/bootstrap/js/bootstrap.bundle.js"></script>

	<!--Custom JS-->
	<script type="text/javascript">
		function validateID(input) {
			var regex = /^[0-9]*$/; // Regular expression to allow only numbers

			if (!regex.test(input.value)) {
				input.value = input.value.replace(/[^0-9]/g, ''); // Remove any characters that are not numeric
			}

			if (input.value.length > 7) {
				input.value = input.value.slice(0, 7); // Truncate the input value to 7 characters if it exceeds the limit
			}
		}

		function password_show_hide() {
			var x = document.getElementById("password");
			var show_eye = document.getElementById("show_eye");
			var hide_eye = document.getElementById("hide_eye");
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
	</script>
</body>

</html>
</body>

</html>