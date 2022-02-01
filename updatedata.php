<!DOCTYPE html>
<html lang="en">
    <header
        <! -- Required meta tags  -- >
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width =device-width,initial-scale=1">
         <! -- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
           <title>Hello</title>
    </header>
    <body>
        <?php
        $EmployeeID = $_REQUEST['EmployeeID'];
        ?>
        <h1>insertdata : Employee</h1>
        <from action="update.php?EmployeeID=<?php echo $EmployeeID;?> method="post" name="Employew">
            <table border="1">
                <tr>
                    <td>EmployeeID : </td>
                    <td><Input type = "text" name="EmployeeID" value="<?php echo
                    $EmployeeID;?>"disabled></td> 
                </tr>
                <tr>
                    <td>Table : </td>
                    <td><select name="Table">
                        <option value=นาย>นาย</option>
                        <option value=นางสาว>นางสาว</option>
                        <option value=นาง>นาง</option> 
                </select>
                </td>
                <tr>
                    <td>Name :</td>
                    <td><Input type="text" name="Name"></td>
                </tr>
                <tr>
                <td>Sex : </td>
                    <td>
                    <input type="radio" name="Sex" value="ชา่ย"> ชา่ย
                    <input type="radio" name="Sex" value="หญิง"> หญิง
                    </td>
                </tr>
                <tr>
                    <td>name
                <tr>
                    <td>Education : </td>
                    <td><select name="Education">
                        <option value=ปริญาตรี>ปริญาตรี</option>
                        <option value=ปริญาโท>ปริญาโท</option>
                        <option value=อื่น>อื่นๆ</option> 
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Start_data:</td>
                    <td><inpur type="data" name="Start_data"></td>
                </tr>
                <tr>
                    <td>Salary:</td>
                    <td><inpur type="number" name="Salary"></td>
                </tr>
                <tr>
                    <td>DepartmentID:</td>
                    <?php
                    //DepartmentID Query form Table
                    require ('connect.php');
                    $sql = 'SELECT DepartmentID FROM department;'l
                    $objQuery = mysqli_query($conn,$sql) or die("Error Query[" . $sql . "]");
                    ?>
                    <td><select name="DepartmentID">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)){
                            ?>
                        <option value=<?php echo $objResult["DepartmentID"]; ?>><?php
                        echo$ $objResult["DepartmentID"]; ?></option>
                         <?php
                        }
                        ?>
                    </select>
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Update Data">
        </form>
        <?php
        mysqli_close($conn); // ปิดฐานข้อมูล
        echo "<br><br>";
        echo "--- END ---";
        ?>                 
        <!-- Optional JavaScript ; choose one of the two! -->
        <!-- Option 1;  Bootstrap Bundle with Popper -- >
    <script src = "bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>