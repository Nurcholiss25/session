<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    $koneksi = new PDO('mysql:host=localhost;dbname=barang','root','');
    $query = $koneksi->query("INSERT INTO barangg VALUES ('$id','$nama','$jumlah','$tanggal')");
    $data = $query->fetch();
    
    header("location:catatan.php");

    }
?>