<?php
$username = $_GET['username'];
$password = $_GET['password'];

?>

<!DOCTYPE html>
<html lang="en">
    <header
          <l -- Required meta tags  == >
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width =device-width,initial-scale=1">
    initiak-scale=1">       
    <title>ส่งข้อมูล get</title>

    </header>
    <body>
        <h1>ส่งข้อมูลผ่าน Form(get) </h1>
        <Form action="getform.php" method="GET">
            Username : <input type="texy"
            name="username"><br>
            password : <input type="password"
            name="password"><br>
            <input type="submit" value="login"><br>"  
        </Form>
    </body>
</html>
<?php
if(isset($username)){
    echo"$username<br>";
    echo"$password<br>";
} else{
    echo"ไม่มีข้อมูล;
}
?>