<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Agen</title>
    <base href="<?php echo base_url('assets/login') ?>/">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
	<link rel="icon" type="image/png" href="images/lg.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form action="" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Login Agen
					</span>
                    <?php if (session()->getFlashdata('error')) { ?>
                <div class="alert alert-danger" align="center">
                    <?php echo session()->getFlashdata('error')?></div>
                    <?php } ?>
					<div class="wrap-input100 validate-input" data-validate = "Masukkan Username!">
						<input type="text" name="member_email" value="<?php echo session()->getFlashdata('member_email') ?>" class="input100" id="inputUsername" placeholder="Masukkan Username....">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-hashtag" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Masukkan Password!">
						<input type="password" name="member_password" class="input100" id="inputPassword" placeholder="Masukkan Password....">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
                    <div class="mb-3">
                </div>
						<button type="submit" name="login" class="login100-form-btn" value="LOGIN">
							Login&nbsp; <font size="+2"><i class="fa fa-sign-in"></i></font>
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							&copy; 2022
						</span>
						<a class="txt2" href="<?php echo base_url('login') ?>">
							<br><b>JalumasBanyumas API</b></a>
                            <span class="txt2"><br>SisTer ~ Universitas Amikom Purwokerto</span>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>
</html>