<?php
error_reporting(0); //ปิด error
$number1 = $_POST["number1"]
$number2 = $_POST["number2"]
$number3 = $_POST["number3"]
$number4 = $_POST["number4"]
$number5 = $_POST["number5"]
?>
<!DOCTYPE html>
<html lang="en">
    <header
    <!-- Required meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width =device-width,initial-scale=1">
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    
    <title>number_format</title>
    </header>
    <body>
    
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" 
        id="inputGroup-sizing-default">number 1</span>
    </div>
        <input type="number" class="form-control" 
        aria-label="Default" 
        aria-describedby="inputGroup-sizing-default"
        name="number1">
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" 
        id="inputGroup-sizing-default">number 2</span>
    </div>
        <input type="number" class="form-control" 
        aria-label="Default" 
        aria-describedby="inputGroup-sizing-default"
        name="number2">
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" 
        id="inputGroup-sizing-default">number 3</span>
    </div>
        <input type="number" class="form-control" 
        aria-label="Default" 
        aria-describedby="inputGroup-sizing-default"
        name="number3">
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" 
        id="inputGroup-sizing-default">number 4</span>
    </div>
        <input type="number" class="form-control" 
        aria-label="Default" 
        aria-describedby="inputGroup-sizing-default"
        name="number4">
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" 
        id="inputGroup-sizing-default">number 5</span>
    </div>
        <input type="number" class="form-control" 
        aria-label="Default" 
        aria-describedby="inputGroup-sizing-default"
        name="number5">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="submit" class="btn btn-primary">reset</button>
          </form> 
        <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

     </body>
</html>
<?php
