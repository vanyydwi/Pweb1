$(document).ready(function () {
    // 1. Tambahkan efek fade-in pada gambar saat halaman dimuat
    $(".gallery img").hide().fadeIn(1000);

     // 2. Selektor Filter
     $("li:even").css("color", "blue"); // Mengubah warna teks pada elemen <li> genap
     $(".featured").addClass("highlight"); // Menambahkan class highlight pada elemen dengan class featured

    // 3. Klik gambar untuk menampilkan modal
    $(".gallery img").on("click", function () {
      var src = $(this).attr("src");
      $("#modalImage").attr("src", src);
      $("#myModal").fadeIn();
    });

    // 4. Tutup modal dengan klik tombol close
    $(".close").on("click", function () {
      $("#myModal").fadeOut();
    });

    // 5. Tutup modal dengan klik di luar gambar
    $(window).on("click", function (event) {
      if ($(event.target).is("#myModal")) {
        $("#myModal").fadeOut();
      }
    });
  });
