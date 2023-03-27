<?php
include "koneksi.php";

    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    $koneksi = new PDO('mysql:host=localhost;dbname=barang','root','');
    $query = $koneksi->query("UPDATE barangg SET nama_barang='$nama',jumlah='$jumlah',tanggal_produksi='$tanggal' WHERE id='$id'");
    $data = $query->fetch();
    
    header("location:catatan.php");


?>