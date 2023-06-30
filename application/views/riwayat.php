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
			color: #fff;
		}
		main{
			padding: 250px;
		}
	</style>
</head>
<body class="bg-dark">
<main class="container">
	<div id="riwayat1">
		<h1>Riwayat Pendidikan</h1>
		<table class="table">
			<tbody>
				<tr>
					<td><?php echo $kuliah ?></td>
					<td><?php echo $tahun_kuliah?></td>
				</tr>
				<tr>
					<td><?php echo $sma ?></td>
					<td><?php echo $tahun_sma?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<br>
	<div id="riwayat2">
		<h1>Riwayat Organisasi</h1>
		<table class="table">
			<tbody>
				<tr>
					<td><?php echo $organisasi3 ?></td>
					<td><?php echo $thn_organisasi3 ?></td>
				</tr>
				<tr>
					<td><?php echo $organisasi2 ?></td>
					<td><?php echo $thn_organisasi2 ?></td>
				</tr>
				<tr>
					<td><?php echo $organisasi1 ?></td>
					<td><?php echo $thn_organisasi1 ?></td>
				</tr>
			</tbody>
		</table>
	</div>
		
		<a href="http://localhost/frameci3/index.php/keterampilan" class="btn bg-light text-dark mt-3 float-end">Keterampilan Saya</a>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>