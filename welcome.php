<?php
  /*
    session_start();

    if(!isset($_SESSION['udanarejestracja'])){
    header('Location: index.php');
    exit();
    }
    else {
    unset($_SESSION['udanarejestracja']);
    }
    */
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewreport" content="width=device-width, initial-scale=1.0">
	<title>
		WITAMY W UNIX
	</title>
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
	<link rel="stylesheet"  href="assets/styles/style.css" />
</head>
<body>
	<div class="container-fluid banner">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-md">
					<div class="navbar-brand">UNIX</div>
				</nav>
			</div>
			<div class="col-md-8 offset-md-2 info">
				<h1 class="text-center">UNIX</h1>
				<p class="text-center">
        Dziękujemy za rejestrację
				</p>
				<a href="login.php" class="btn btn-md text-center">Zaloguj się na swoje konto!</a>
			</div>
		</div>
	</div>
</body>
</html>