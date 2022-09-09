<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Tambah Data Pasien</title>
</head>
<body>
    <div class="container-sm">
    <form action="proses_tambah.php" method="post">
        <div>
            <label for="">Username</label>
            <input type="text" name="username" id="" class="form-control">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control">
        </div>
        <label for="">Role</label>
        <div class="form-floating" >
            <select name="role" id=""class="form-select">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
    </form>
    </div>
</body>
</html> 