<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
$q = $conn->query("SELECT * FROM tbl_brg WHERE id_brg = '$id'");
foreach ($q as $dt) :
  ?>
<h1>Latihan Tabel Barang : Baiq Nisrina Salwa</h1>
  <h2>Halaman Ubah Data</h2>
 <form action="proses_update.php" method="post">
    <input type="hidden" name="id_produk" value="<?= $dt['id_brg'] ?>">
    <input type="text" name="nama_brg" value="<?= $dt['nama_brg'] ?>">
    <input type="number" name="stock" value="<?= $dt['stock'] ?>">
    <input type="number" name="harga" value="<?= $dt['harga'] ?>">
    <input type="text" name="kategori" value="<?= $dt['kategori'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
<?php
  endforeach;
}  
