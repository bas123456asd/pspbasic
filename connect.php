<?php
$_SERVERname = 'localhost';
$username = 'root' ;
$passwor = '';
$dbname = 'dbmp';

$conn = mysqli_connect($_SERVERname,$username,$passwor,$dbname);

mysqli_set_charset($conn, "utf8");
/*
if(!$conn){
    die("Connection : failed(เชื่อมต่อฐานข้อมูล ไม่ สำเร็จ)") . mysqli_connect_error());
} else{
    echo "Connection : OK (เชื่อมต่อฐานข่้อมูลสำเร็จ)";
}

mysqli_connect($conn); // ปิดฐานข่้อมูล
*/
?>