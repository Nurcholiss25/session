<?php
session_start();
if(isset($_SESSION['username'])){
    echo "<h1> ini Halaman User </user>";
    echo $_SESSION["username"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Website Rumah Sakit </title>
</head>
<body>
<form action="hapus_session.php">
        <button onclick="alert('Anda Telah Logout')">Logout</button>
    </form>
</body>
</html>