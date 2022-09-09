<?php

session_start();

session_destroy();
echo "Anda Telah logout";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Rumah Sakit</title>
</head>
<body>
    <form action="form.php">
    <button >Halaman Login</button>
    </form>
</body>
</html>