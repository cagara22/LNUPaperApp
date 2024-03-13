<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LNU Paper App</title>
	<link rel="icon" type="images/x-icon" href="" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Chakra Petch' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

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
						<h2 class="fw-bold card-text-header">ADMIN LOGIN</h2>
					</div>
					<div class="align-items-center p-3">
						<img src="./images/man.png" class="card-img-top rounded" alt="man" style="width: 50px; height: 50px;">
					</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="username" name="username" oninput="validateUsername(this)" placeholder="username01" required>
								<label for="username">USERNAME</label>
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
								<button type="submit" class="btn btn-warning cust-btn-login"><span class="fw-bold">LOGIN</span></button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function validateUsername(input) {
			var regex = /^[a-zA-Z0-9\sñÑ-]*$/; // Regular expression to allow only alphanumeric characters and spaces

			if (!regex.test(input.value)) {
				input.value = input.value.replace(/[^a-zA-Z0-9\sñÑ-]/g, ''); // Remove any special characters
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