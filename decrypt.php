<?php  
if (isset($_POST["enkripsi"])) {
	function cipher($char, $key) {
		if (ctype_alpha($char)) {
			$nilai = ord(ctype_upper($char) ? 'A' : 'a');
			$ch = ord($char);
			$mod = fmod($ch + $key - $nilai, 26);
			$hasil = chr($mod + $nilai);
			return $hasil;
		}else {
			return $char;
		}
	} 

	function enkripsi($input, $key) {
		$output = "";
		$chars = str_split($input);
		foreach($chars as $char) {
			$output .= cipher($char, $key);
		}
			return $output;
	}

}else if (isset($_POST["dekripsi"])) {
	function cipher($char, $key){
		if (ctype_alpha($char)) {
			$nilai = ord(ctype_upper($char) ? 'A' : 'a');
			$ch = ord($char);
			$mod = fmod($ch + $key - $nilai, 26);
			$hasil = chr($mod + $nilai);
			return $hasil;
		}else {
			return $char;
		}
	} 

	function enkripsi($input, $key) {
		$output = "";
		$chars = str_split($input);
		foreach($chars as $char){
			$output .= cipher($char, $key);
		}
		return $output;
	}
	
	function dekripsi($input, $key) {
		return enkripsi($input, 26 - $key);
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSI - FITRI LESTARI </title>

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
    <div class="sidebar">
        <header>Cryptography App</header>
            <ul>
                <li><a href="dashboard.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
                <li><a href="introduction.php"><i class="fas fa-link"></i>Introduction</a></li>
                <li><a href="encrypt.php"><i class="fas fa-text-height"></i>Encryption</a></li>
                <li><a href="decrypt.php"><i class="fas fa-text-width"></i>Decryption</a></li>
            </ul>
    </div>

    <section>
        <div class="row justify-content-md-center">
            <div class="col col-md-4">
                <div class="limiter">
                    <!-- <div class="container-login100">
                        <div class="wrap-login100"> -->
                            <form class="login100-form validate-form" method="post">
                            <header>CAESAR CHIPER</header>		
                                    <br>
                                    <!-- form input pesan -->
                                    <div class="label">Plain Text </div>
                                    <div class="wrap-input100">
                                        <textarea style="padding-top: 15px;" class="input100" type="text" name="plain"></textarea>
                                `   </div>

                                    <!-- form input key -->
                                    <div class="label">Key</div>
                                    <div class="wrap-input100">
                                        <input class="input100" type="number" name="key">
                                    </div>

                                    <!-- button enkripsi dan dekripsi -->
                                    <div class="login100-form-title" style="padding-bottom: 30px;">
                                        <button type="submit" name="dekripsi" class="btn btn-secondary">Decryption</button>
                                    </div>
                            </form>

                                    <div class="label">Result</div>
                                    <div style=" padding-top: 10px;" class="wrap-input100">

                                        <!-- hasil enkripsi / dekripsi -->
                                        <!-- buat kondisi output -->
                                        <textarea style="padding-top: 15px;" class="input100" type="text" name="">
                                            <?php  
                                                if (isset($_POST["dekripsi"])) { // jika tombol dekripsi yang ditekan
                                                    // tampilkan hasil dekripsi
                                                    echo dekripsi($_POST["plain"], $_POST["key"]);
                                                } // dan jika enkripsi
                                                else if (isset($_POST["enkripsi"])) {
                                                    echo enkripsi($_POST["plain"], $_POST["key"]);
                                                }
                                            ?>
                                        </textarea>
                                    </div>
                        <!-- </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->

</body>
</html>