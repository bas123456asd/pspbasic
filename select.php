<?php
$_SERVERname = 'localhost';
$username = 'root' ;
$passwor = '';
$dbname = 'dbmp';

%conn = mysqli_connect($_SERVERname,$username,$passwor,$dbname);

mysqli_set_charset($conn, "utf8");

$sql = '
    select *
    from employee;
';

$objQuery = mysqli_query($conn , $sql) or die("ErrorQuery [" . $sql .)
?>
<!DOCTYPE html>
<html lang="en">
    <header
          <l -- Required meta tags  == >
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width =device-width,initial-scale=1">
           <title></title>
    </header>
    <body>
    </body>
</html>