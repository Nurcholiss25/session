<?php
session_start();
if(isset($_SESSION['id'])){
    echo "<h1> ini Halaman website, </user>";
    echo $_SESSION["id"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Rumah Sakit</title>
</head>
<body>
<?php

$db = new PDO("mysql:host=localhost;dbname=rumkit", 'root', '');
$query = $db->query("SELECT * FROM tbuser");
?>
<div class="container-sm">
<a href="tambah.php">Tambah Akun</a>
<table border="1" cellpadding="10" cellspacing="0" class="table-primary table-striped">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
    </tr>

<?php while($data = $query->fetch( )) :?>
   <tr>
    <td><?= $data['id']?></td>
    <td><?= $data['username']?></td>
    <td><?= $data['password']?></td>
    <td><?= $data['role']?></td>
    <td>
        <a href="edit.php?id=<?=$data['id']; ?>" class="btn btn-outline-primary">Update</a>

        <a href="proses_hapus.php?id=<?=$data['id']; ?>" class="btn btn-outline-danger">Hapus</a>

    </td>
   </tr>
    <?php endwhile ?>
    <br>
<form action="hapus_session.php">
        <button onclick="alert('Anda Telah Logout')"class="btn btn-outline-primary">Logout</button>
    </form>
    <br>
</body>
</html>