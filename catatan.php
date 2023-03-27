<?php
include "header.php";
$db  = new PDO("mysql:host=localhost;dbname=barang",'root','');
$query = $db->query("SELECT * FROM barangg");
session_start();
?>
<html>
    <body>
<title>Catatan Barang</title>
<table border="1" align="center" width="50%">
</table>
 <table border="1" align="center" width="50%" height="40%">
            <td>
                <table align="center" border="1" width="80%" height="20%" id="myTable">
                    <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Tanggal Barang</th>
                    <th cosplan="2">Aksi</th>
                    </tr>
                    <?php while($data = $query->fetch()) : ?>
                    <tr>
                        <td><?= $data['id']?></td>
                        <td><?= $data['nama_barang']?></td>
                        <td><?= $data['jumlah']?></td>
                        <td><?= $data['tanggal_produksi']?></td>
                       <td><a href="prosesdelete.php?id=<?= $data['id'] ?>" class="btn btn-info mb-3">Delete</a> |
                       <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-info mb-3">Edit</td>
                    </tr>
                    <?php endwhile; ?>
                    <script src="main.js"></script>
                    </html>
                    </body>
