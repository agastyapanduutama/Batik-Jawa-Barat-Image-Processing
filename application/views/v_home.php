<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIT UNISA Bandung</title>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/app.css">
</head>

<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header">
				<h4 class="card-title">Deteksi Batik Jawa Barat</h4>

				<div class="card-body">
					<form action="simpan" method="POST" enctype="multipart/form-data">
						<center>
							<div class="form-group">
								<img width="200" id="blah" src="#" alt="your image" />
								<br>
								<label class="label-control" for="">Gambar</label>
								<input required name="gambar" accept="image/*" type='file' id="imgInp" />
							</div>
							<button type="submit" class="btn btn-primary">Deteksi</button>
						</center>
					</form>
				</div>
			</div>

		</div>
		<div id="app">
			<footer>
				<div class="footer container-fluid clearfix mb-0 me-2 ml-2 text-muted">
					<div class="float-start">
						<p><?= date('Y') ?> &copy; UNISA Bandung</p>
					</div>

				</div>
			</footer>
		</div>
	</div>

	<script>
		imgInp.onchange = evt => {
			const [file] = imgInp.files
			if (file) {
				blah.src = URL.createObjectURL(file)
			}
		}
	</script>

</body>

</html>