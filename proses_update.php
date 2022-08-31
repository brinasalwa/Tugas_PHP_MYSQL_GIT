<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_brg'];
  $n_brg = $_POST['nama_brg'];
  $stock = $_POST['stock'];
  $harga = $_POST['harga'];
  $kategori = $_POST['kategori'];
  
$q = $conn->query("UPDATE tbl_brg SET nama_brg = '$n_brg', stock = '$stock', harga = '$harga', kategori = '$kategori' WHERE id_brg = '$id'");
if ($q) {
    echo "<script>alert('Data barang berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    echo "<script>alert('Data barang gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  header('Location: index.php');
}


