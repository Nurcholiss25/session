<?php
include "header.php";
session_start();
?>

<html>
    <body>
        <table border="1" height="40%" width="50%" align="center">
           <td> Selamat Datang <?php echo $_SESSION['username']; ?> Di Aplikasi PEDULI DIRI</td>
        </table>
    </body>
</html>