<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		main{
			padding: 250px;
		}
        hr{
            /* color: #fff; */
            border: 1px solid white;
            width: 300px;
            
        }
	</style>
</head>
<body class="bg-dark">
<main class="container">
    <h1 class="text-center text-light">Keterampilan</h1>
    <hr class="mx-auto">
    <div id="keterampilan" class="row mt-4 text-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $keterampilan1 ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $keterampilan2 ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $keterampilan3 ?>
                </div>
            </div>
        </div>
    </div>
    <div id="keterampilan" class="row mt-3 text-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $keterampilan4 ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $keterampilan5 ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $keterampilan6 ?>
                </div>
            </div>
        </div>
    </div>
    <a href="http://localhost/frameci3/index.php" class="btn bg-light text-dark mt-3 float-end btn-outline-light">Home</a>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>