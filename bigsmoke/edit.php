<?php
$id = $_GET['id'];
$db = new PDO("mysql:host=localhost;dbname=rumkit", 'root', '');
$query = $db->query("SELECT* FROM tbuser WHERE id=$id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Update</title>
</head>
<body>
    <div class="container-sm">
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id']?>">
        <div>
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" value="<?= $data['username']?>">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" value="<?= $data['password']?>">
        </div>
        <label for="">Role</label>
        <div class="form-floating" >
            <select name="role" id="" class="form-select">
                <option value="admin"<?= $data['role'] == '1' ? 'selected' : '' ?>>Admin</option>
                <option value="user"<?= $data['role'] == '2' ? 'selected' : '' ?>>User</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
    </form>
    </div>
</body>
</html>