<!DOCTYPE gtml>
<html lang= "en">
    <header>
        <i -- Required meta tags -->
        <mera cgarset="utf-8">
            <meta name="viewport"content="width=device-width,initial-scale=1">
            <title>loop</title>
    </header>
    <body>
        <?php
        #for loop
        echo("for loop <br>");
        # x+=2 ; x=x+2
        for($x = 0 ; $x < 10 ; $x+=2){
            echo "the number is :$x <br>";
            #echo "the number is :$x <br>"; (syntax old)
            }    
            #while loop
            echo("while loop <br>");
            $w=1;
            while($x<=10){
                echo "the number is :$w <br>";
                $w++; 
            }
            # do while loop
            echo("do while loop <br>");
            $d=1;
            do{
                echo "the number is :$d <br>";
                $d++;
            }while($d<=10);
            
            #continue
            echo("continue <br>");
            for($a=0;$a<10;$a++){
                if ($a == 4){
                    continue;
                }
                echo "the number is : $a <br>"
            }
            #Bereak
            echo("Bereak <br>");
            for($a=0;$a<10;$a++){
                if ($a == 4){
                    break;
                }
                echo "the number is : $a <br>"
            }

            ?>
            

    </body>
</html>