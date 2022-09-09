<?php
session_start();
echo "<h1>selamat datang,</ h1>";echo $_SESSION["username"];
if(!isset($_SESSION["username"])){
    header("Location:form.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Rumah Sakit</title>
</head>
<body>
    <h1></h1>
    <form action="admin.php">
        <button class="btn btn-outline-primary">Cek Data Pengguna</button>
    </form>
</body>
</html>