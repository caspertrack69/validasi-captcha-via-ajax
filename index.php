<?php
// Begin the session
session_start();
// Create a random string
$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));
$str = rand(1, 7) . rand(1, 7) . $char;

// Set the session contents
$_SESSION['captcha_id'] = $str;

?>
<!doctype html>
<html>
	<title>Captcha With Ajax</title>
	<script src="../jquery-2.0.2.min.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>
<h1>Captcha With Ajax</h1>
<form id="captcha_form" action="">
	<fieldset>
		<div id="captcha_image"><img src="images/image.php" width="132" height="46" alt="Captcha image"></div>
		<label for="captcha">Masukkan huruf / character seperti yang terlihat pada gambar di atas (case insensitive):</label>
		<input type="text" maxlength="6" name="captcha" id="captcha">
		<p>
		<img src="" id="img_result"><span id="result"></span>
		</p>
		<p><input type="button" id="btn_check" value="Check"><input type="button" id="btn_ulangi" value="coba lainnya" ></p>
		<label for="nama">Nama :</label>
		<input type="text" name="nama" id="nama">
		<label for="gender">Jenis Kelamin :</label>
		<input type="text" name="gender" id="gender">
		<p><input type="submit" id="btn_kirim" value="Kirim" disabled="disabled"></p>
	</fieldset>
</form>
<script src="captcha.js"></script>
</body>
</html>