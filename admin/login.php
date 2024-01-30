<?php include '../config/db.php'?>
<?php 
    session_start();
    $sql = 'SELECT * FROM settings WHERE id = 1';
    $result = mysqli_query($conn, $sql);
    $settings = mysqli_fetch_assoc($result);

    if(isset($_SESSION['email'])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

		<title>Login</title>
		
		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

		<link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
		
		<!-- Ekka CSS -->
		<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />
		
		<!-- FAVICON -->
		<link href="../assets/uploads/<?php echo $settings['logo'] ?>" rel="shortcut icon" />
	</head>
	
	<body class="sign-inup" id="body">
		<div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="card">
						<div class="card-header bg-light">
							<div class="ec-brand">
								<a href="index.html" title="Ekka">
									<img class="ec-brand-icon" src="../assets/uploads/<?php echo $settings['logo'] ?>" alt="" />
								</a>
							</div>
						</div>
						<div class="card-body p-5">
							<h4 class="text-dark mb-5">Sign In</h4>
							
							<form action="php/login.php" method="POST">
								<div class="row">
									<div class="form-group col-md-12 mb-4">
										<input type="email" class="form-control" id="email" name="email" placeholder="Username">
									</div>
									
									<div class="form-group col-md-12 ">
										<input type="password" class="form-control" id="password" name="password" placeholder="Password">
									</div>
									
									<div class="col-md-12">
										
										<button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sign In</button>
										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Javascript -->
		<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
		<script src="assets/plugins/slick/slick.min.js"></script>
	
		<!-- Ekka Custom -->	
		<script src="assets/js/ekka.js"></script>
	</body>
</html>