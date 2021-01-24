<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSI - FITRI LESTARI </title>

    <link rel="stylesheet" type="text/css" href="style.css">

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
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <div class="content">
                        <p>CAESAR CHIPER</p>
						<p>
                            Caesar Chiper merupakan salah satu jenis cipher substitusi yang membentuk cipher dengan cara melakukan penukaran karakter pada plainteks menjadi tepat satu karakter pada chiperteks. Teknik seperti ini disebut juga sebagai chiper abjad tunggal. Algoritma kriptografi Caesar Cipher sangat mudah  untuk digunakan. Inti dari algoritma kriptografi ini adalah  melakukan pergeseran terhadap semua karakter pada  plainteks dengan nilai pergeseran yang sama.
                        </p>
						<hr>
						<p><b>
                            Adapun langkah-langkah yang dilakukan untuk membentuk chiperteks dengan Caesar Cipher adalah:
                        </b><br>
                            1. Menentukan besarnya pergeseran karakter yang  digunakan dalam   membentuk  cipherteks ke plainteks.<br>
                            2. Menukarkan karakter pada plainteks menjadi cipherteks dengan berdasarkan pada pergeseran yang telah ditentukan sebelumnya.
						</p>
						<hr>
						<p><b>
                            Dilihat dari keterangan diatas, maka:
                        </b></p>
                        <p>
                            Berikut adalah contoh penggunaan Caesar Cipher dengan besar pergeseran sebesar 3 karakter. Dengan nilai pergeseran tersebut, didapat tabel pergeseran nilai Caesar Cipher sebagai berikut:
                        </p>
						<p>
                            A  B  C  D  E  F  G  H  I  J    K  L  M  N  O  P  Q  R  S   T   U  V  W  X  Y  Z (PlainText)<br>
                            D  E  F  G  H  I   J   K  L M  N  O  P   Q  R  S  T   U  V  W  X  Y   Z   A  B  C (CipherText)
                        </p>
                    </div>
                </dav>
            </dav>
        </div>    
    </section>
    
</body>
</html>