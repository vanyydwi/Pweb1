<!-- <?php
$nama="Vany";
$umur=19;

echo"Nama : ".$nama."<br>";
echo"Umur : ".$umur." tahun<br>";
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh $_POST</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama">
        <br>
        <label for="email">Email : </label>
        <input type="email" id="email" name="email">
        <br>
        <button type="sumbit">Kirim</button>
</form>
</body>
</html>