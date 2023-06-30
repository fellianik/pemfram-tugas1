<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Biodata</title>

	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			color: #fff;
		}
		.container{
			min-height: 500px;
		}
		header{
			padding: 325px;
			text-align: center;
		}
		footer{
			padding: 20px;
			text-align: center;
			border-top: 1px solid #fff;
		}
		#link{
			color: white;
			text-decoration: none;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	

</head>
<body>

<div id="container" class="bg-dark">
	
	<header class="container">
		<h1 id="title">Perkenalkan saya <?php echo $nama?></h1>
		<h5 id="sub-title" class="mt-3"><?php echo $sub_title?></h5>
		<a href="http://localhost/frameci3/index.php/riwayat" class="btn bg-light text-dark mt-3">Tentang Saya</a>
	</header>

	<footer>
		<h6>Dibuat oleh Felliani Kurniawati / 20081010085</h6>
		<h6>LinkedIn : <a href="https://www.linkedin.com/in/felliani-kurniawati/" id="link">Felliani Kurniawati</a></h6>
	</footer>
	
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
