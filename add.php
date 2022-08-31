<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $n_brg = $_POST['nama_brg'];
  $stock = $_POST['stock'];
  $harga = $_POST['harga'];
  $kategori = $_POST['kategori'];
  
  $q = $conn->query("INSERT INTO tbl_brg VALUES ('', '$n_brg', '$stock', '$harga', '$kategori')");
  if ($q) {
    echo "<script>alert('Data barang berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {
    echo "<script>alert('Data barang gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  header('Location: index.php');
}