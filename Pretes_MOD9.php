<?php
$connection = mysqli_connect("localhost","username","password","database");

// Memeriksa koneksi
if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query SQL UPDATE
$sql = "UPDATE table_name SET column1 = 'value1', column2 = 'value2' WHERE condition";

// Menjalankan query
if (mysqli_query($connection, $sql)) {
    echo "Data berhasil diperbarui.";
} else {
    echo "Error: " . mysqli_error($connection);
}

// Menutup koneksi
mysqli_close($connection);
?>
2. Menggunakan MySQLi (Object-Oriented):
php
Copy code
<?php
// Membuka koneksi ke database
$connection = new mysqli("localhost", "username", "password", "database");

// Memeriksa koneksi
if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}

// Query SQL UPDATE
$sql = "UPDATE table_name SET column1 = 'value1', column2 = 'value2' WHERE condition";

// Menjalankan query
if ($connection->query($sql) === TRUE) {
    echo "Data berhasil diperbarui.";
} else {
    echo "Error: " . $connection->error;
}

// Menutup koneksi
$connection->close();
?>