<?php
//contoh aray data alumni
$alumni=[
    [
        "nama"=>"Budi Santos",
        "tahunKelulusan"=>2018,
        "statusAktif"=>true,
        "kategoriPekerjaan"=>"Teknologi"
    ],
    [
        "nama"=>"Siti Aisyah",
        "tahunKelulusan"=>2015,
        "statusAktif"=>false,
        "kategoriPekerjaan"=>"Kesehatan"
    ],
    [
        "nama"=>"Ahmad Fauzi",
        "tahunKelulusan"=>2020,
        "statusAktif"=>true,
        "kategoriPekerjaan"=>"Bisnis"
    ]
];

//Tahun saat ini
$tahunSekarang=2024;

//menggunakan perulangan foreach untuk menampilkan informasi setiap alumni
foreach($alumni as $data){
    $namaAlumni=$data['nama'];
    $tahunKelulusan=$data['tahunKelulusan'];
    $statusAktif=$data['statusAktif'];
    $kategoriPekerjaan=$data['kategoriPekerjaan'];

    //menghitung selisih tahun kelulusan
    $lamaKelulusan=$tahunSekarang-$tahunKelulusan;

    //menampilkan nama alumni
    echo"<h3>Nama: $namaAlumni</h3>";
    echo"Tahun Kelulusan: $tahunKelulusan<br>";

    //percabangan if-else untuk menentukan status alumni
    if($statusAktif && $lamaKelulusan <= 5){
        echo"$namaAlumni adalah alumni aktif yang lulus dalam 5 tahun terakhir.<br>";
    } elseif($statusAktif && $lamaKelulusan > 5){
        echo"$namaAlumni adalah alumni aktif yang lulus lebih dari 5 tahun yang lalu.<br>";
    } elseif(!$statusAktif && $lamaKelulusan <= 5){ // Perbaikan di sini
        echo"$namaAlumni adalah alumni tidak aktif yang lulus dalam 5 tahun terakhir.<br>";
    } else {
        echo"$namaAlumni adalah alumni tidak aktif yang lulus lebih dari 5 tahun yang lalu.<br>";
    }

    //percabangan switch untuk menentukan pesan berdasarkan kategori pekerjaan
    switch($kategoriPekerjaan){
        case "Teknologi":
            echo"Kategori Pekerjaan: Teknologi. Tersedia forum diskusi teknologi untuk alumni.<br>";
            break;
        case "Kesehatan":
            echo"Kategori Pekerjaan: Kesehatan. Tersedia program kesehatan untuk alumni.<br>";
            break;
        case "Pendidikan":
            echo"Kategori Pekerjaan: Pendidikan. Tersedia program pengembangan karir untuk pendidik.<br>";
            break;
        case "Bisnis":
            echo"Kategori Pekerjaan: Bisnis. Tersedia jaringan bisnis alumni.<br>";
            break;
        default:
            echo"Kategori pekerjaan alumni belum terdaftar. Silakan perbarui profil anda.<br>";
            break;
    }
    echo"<br>";
}

//menggunakan perulangan for untuk menampilkan tahun kelulusan semua alumni 
echo"<h4>Tahun Kelulusan Alumni:</h4>";
for($i=0; $i<count($alumni); $i++){
    echo"Alumni: ".$alumni[$i]['nama']." - Tahun Kelulusan: ".$alumni[$i]['tahunKelulusan']."<br>";
}

//menggunakan perulangan while untuk menghitung jumlah alumni aktif 
echo"<h4>Jumlah Alumni Aktif:</h4>";
$jumlahAktif=0;
$index=0;
while($index<count($alumni)){
    if($alumni[$index]['statusAktif']){
        $jumlahAktif++;
    }
    $index++;
}
echo"Total alumni aktif: $jumlahAktif";
?>