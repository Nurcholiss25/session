<?php
include "header.php";
session_start();
?>
<html>
<body>
<div class="kotak_isi"> 
<table border="1" align="center" width="50%" height="40%" >
<form action="prosesedit.php?id=<?php echo $_GET['id']?>" method="POST">
    <td>
    <table align="center">
    <tr>
        <td>Nama Barang :</td>
        <td><input type="text" name="nama" required ></td>
    </tr>
    <tr>
        <td>Jumlah Barang :</td>
        <td><input type="number" name="jumlah"></td>
    </tr>
    <tr>
        <td>Tanggal Barang: </td>
        <td><input type="date" name="tanggal"></td>
    </tr>
    <tr>
        <td></td>
        <td align="right"><input type="submit" name="simpan" value="simpan"></td>
    </tr>
    </table>
</form>
</td>
</table>
</body>
</html> 