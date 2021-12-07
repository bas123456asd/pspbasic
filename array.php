<?php
    // array
    $cars = array("volvo","BMW","Toyota");
    echo " I like " . $cars[0].",". $cars[1]."and"
    .$cars[2].".";
    echo("<br>");
    echo" I like $cars[0], $cars[1],and
    $cars[2].";
    for ($i=0;$i<=count($cars);$i++){
        echo("$cars[$i]."<br>");
        }
?>

    // Associative Array
    $age = array("Prter"=>"35","Ben"=>"37","Joe"=>"43");
    echo "Peter is ".$age['Peter']."years old.";
    echo "Ben is ".$age['Ben']."years old.";
    echo "Joe is ".$age['Joe']."years old.";

    //Multidimensional Array
    $cars = array
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );
    echo $cars[0][0].": In stock ".$cars[0][1].",
    sold:".$cars1[0][2].".<br>:";
    echo $cars[1][0].": In stock ".$cars[1][1].",
    sold:".$cars1[1][2].".<br>:";
    echo $cars[2][0].": In stock ".$cars[2][1].",
    sold:".$cars1[2][2].".<br>:";
    echo $cars[3][0].": In stock ".$cars[3][1].",
    sold:".$cars1[3][2].".<br>:";

    //Sort Array
    sort($cars); 
    for ($i=0;$i<=count($cars);$i++){
        echo("$cars[$i]."<br>");
        }
        $numbers = (4,6,2,22,11);
        sort($numbers);
        for($i=0;$i<count($numbers);$i++){
            echo("$number[$i],");
        }
 
    
?>
