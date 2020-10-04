<!DOCTYPE html>
<head>
	<title>Halaman Login</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Membuat halaman login sederhana</h1>

	<div class="kotak">
		<h3>Silahkan login</h3>

		<form action="login.php" method="post">
			<label for="username">Username</label>
			<input class="inputan" type="text" name="username" id="username" placeholder="Masukkan username">

			<label for="password">Password</label></td>
			<input class="inputan" type="password" name="password" id="password" placeholder="Masukkan password">

			<button type="submit">Masuk</button>
		</form>

		<center>
			<a href="#">Kembali</a>
		</center>
	</div>
</body>
</html>