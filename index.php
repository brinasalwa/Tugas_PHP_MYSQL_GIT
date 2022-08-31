<?php
    require_once 'koneksi.php';
?>

<html lang="en">
<head>
    <title>Latihan Barang</title>
</head>
<style>
    .center {
    margin: auto;
    width: 60%;
    border: 3px solid #3396FF;
    padding: 10px;
    }
    td {
        margin:auto;
        width: 5%;
    }
    .btn_style{
        border: 1px solid #cecece;
        border-radius: 3px;
        padding: 3px 10px;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
        color: white;
        background-color: red;
        }
        .btn_style:hover{
        border: 1px solid #b1b1b1;
        box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    }
</style>

<body>
    <div class="center">
        <h1>Latihan Tabel Barang : Baiq Nisrina Salwa</h1>
        
        <form method="post" action="add.php">
            <input type="text" name="nama_brg" placeholder="Nama Barang">
            <input type="number" name="stock" placeholder="Stock">
            <input type="number" name="harga" placeholder="Harga">
            <input type="text" name="kategori" placeholder="Kategori">
            <br><br>
            <button class="btn_style" type="submit" name="submit">Tambah Barang</button>
        </form><br/>

        <table border="1">
            <tr>
                <th>No</th> 
                <th>Nama Barang</th>
                <th>Stock</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th colspan="2">Aksi</th>
            </tr>

        <?php
            $q = $conn->query("SELECT * FROM tbl_brg ORDER BY id_brg DESC");
            $no = 1; 
            while ($dt = $q->fetch_assoc()) :
        ?>
        <tr>  
            <td><?= $no++ ?></td>
            <td><?= $dt['nama_brg'] ?></td>
            <td><?= $dt['stock'] ?></td>
            <td><?= $dt['harga'] ?></td>
            <td><?= $dt['kategori'] ?></td>
            <td><a href="update.php?id=<?= $dt['id_brg'] ?>">Ubah</a></td>
            <td><a href="delete.php?id=<?= $dt['id_brg'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
        </tr>
    
        <?php
            endwhile;
        ?>

    </div>

</body>
</html>


