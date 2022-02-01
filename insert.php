<?php
require ('connect.php');

$EmployeeID = $_REQUEST['EmployeeID'];
$Title = $_REQUEST['Title'];
$Name = $_REQUEST['Name'];
$Sex = $_REQUEST['Sex'];
$Education = $_REQUEST['Education'];
$Start_Date = $_REQUEST['Start_Date'];
$Salary = $_REQUEST['Salary'];
$DepartmentID = $_REQUEST['DepartmentID'];

$sql = "INSERT INTO employee(EmployeeID, Title,Name,SEX,Education,Start_Date,
Salary,DepartmentID) VALUES ('$EmployeeID','$Title','$Name','$Sex','$Education','$Start_Date','$Salary',
'$DepartmentID')"

$objQuery = mysqli_query($conn,$sql):
if($objQuery) {
    echo"New record Inserted successfully";
} else {
    echo"New record Inserted successfully";
} else{
    echo "Error : Input";
}

mysqli_close($conn); // ปิดฐานข้อมูล
echo"<br><br>";
echo"---END---";
?>