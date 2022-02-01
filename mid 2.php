<?php
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    for ($i=0; $i<count($numbers); $i++) {
        if ($i != count($numbers) - 1) echo "$numbers[$i] ,";
        else echo "$numbers[$i]";
    } if( $number % 2 == 0 ) {
            $return .= "เลขคู่";
        } else {
            $return .= "เลขคี่";
        }
        $return .= "<br/>";
        return $return;
    }
?>
