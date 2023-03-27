<?php
include "koneksi.php";

$id = $_GET['id'];

$koneksi = new PDO("mysql:host=localhost;dbname=barang", 'root','');
$query = $koneksi->query("DELETE FROM barangg WHERE id='$id'");

if($query){
    header("location:catatan.php");
}
?>