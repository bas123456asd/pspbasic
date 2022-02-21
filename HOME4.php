<html>
<head>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["Name"]))
	{
		$strKeyword = $_POST["Name"];
	}
  
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="5">
    <tr>
      <th>ค้นหา
      <input name="Name" type="text" id="Name"value="<?php echo $strKeyword;?>">
      <input type="submit" value="กดค้นหา"></th>
    </tr>
  </table>
</form>

<?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "test";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
   $sql = "SELECT * FROM customer WHERE Name LIKE '%".$strKeyword."%' ";
  
   $query = mysqli_query($conn,$sql);

?>
<table width="600" border="5">
  <tr>
    <th width="150"> <div align="center">รหัสลูกค้า</div></th>
    <th width="500"> <div align="center">ชื่อ-นามสกุล</div></th>
    <th width="198"> <div align="center">Email</div></th>
    <th width="500"> <div align="center">รหัสประเทศ</div></th>
    <th width="500"> <div align="center">งบประมาณทั้งหมด</div></th>
    <th width="150"> <div align="center">ใช้ไปทั้งหมด</div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["CustomerID"];?></div></td>
    <td><?php echo $result["Name"];?></td>
    <td><?php echo $result["Email"];?></td>
    <td><div align="center"><?php echo $result["CountryCode"];?></div></td>
    <td align="right"><?php echo $result["Budget"];?></td>
    <td align="right"><?php echo $result["Used"];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>