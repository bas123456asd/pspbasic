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
        <h1>insertdata : Employee</h1>
        <from action="insert.php" method="post" name="Employew">
            <table border="1">
                <tr>
                    <td>EmployeeID : </td>
                    <td><Input type = "text" name="EmployeeID"></td>
                </tr>
                <tr>
                    <td>Table : </td>
                    <td><select name="Table">
                        <option value=นาย>นาย</option>
                        <option value=นางสาว>นางสาว</option>
                        <option value=นาง>นาง</option> 
                </select>
                </td>
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
            </table>
        <!-- optional JavaScript ; choose one of the two! -->
        <!-- Option 1;  Bootstrap Bundle with Popper -- >
    <script src = "bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>