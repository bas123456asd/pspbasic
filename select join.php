<?php
require ('connect.php');

$sql = '
    select employee . EmployeeID, employee . Title, employee .Name, employee . Sex, employee . Education, 
    employee . Start_Date, employee . Salary, department.DepartmentName
    from employee, department
    where employee.DepartmentID = department.DepartmentID ;

';

$objQuery = mysqli_query($conn , $sql) or die("ErrorQuery [" . $sql .)
?>
<!DOCTYPE html>
<html lang="en">
    <header
        <! -- Required meta tags  -- >
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width =device-width,initial-scale=1">
        
        <! -- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
        <title>HELLO</title>
    </header>
    <body>
    <table border = "1">
    <tr>
        <th width="50">
            <div align="center">No</div>
        </th>
        <th width="100">
            <div align="center">EmployeeID</div>
        </th>
        <th width="100">
            <div align="center">Title</div>
        </th>
        <th width="100">
            <div align="center">Name</div>
        </th>
        <th width="100">
            <div align="center">Sex</div>
        </th>
        <th width="100">
            <div align="center">Education</div>
        </th>
        <th width="100">
            <div align="center">Start_Date</div>
        </th>

       
       
        <th width="100">
            <div align="center">Salary</div>
        </th>
        <th width="100">
            <div align="center">DepartmentName</div>
        </th>
    </tr>
    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)){
    ?>
        <tr>
            <td>
                <div align="center"><?php echo $i; ?></div>
            </td>
            <td><?php echo $objResult["EmployeeID"]; ?></div>
            <td><?php echo $objResult["Title"]; ?></div>   
            <td><?php echo $objResult["Name"]; ?></div>
            <td><?php echo $objResult["Sex"]; ?></div> 
            <td><?php echo $objResult["Education"]; ?></div> 
            <td><?php echo $objResult["Start_Date"]; ?></div>    
            <td><?php echo $objResult["Salary"]; ?></div>   
            <td><?php echo $objResult["DepartmentName"]; ?></div>   
            <td align="center"><a href="delete.php?EmployeeID=<?php echo $objResult
            ["EmployeeID"]; ?>">Delete</a></td>
            <td align="center"><a href="updatedata.php?EmployeeID=<?php echo $objResult
            ["EmployeeID"]; ?>">Update</a></td>
        </tr>    
     <?php
        $i++;
    }
    ?>
    </table>
        <!-- optional JavaScript ; choose one of the two! -->
    <!-- Option 1;  Bootstrap Bundle with Popper -- >
    <script src = "bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
<?php
    mysqli_close($conn); // ปิดฐานข้อมูล
?>