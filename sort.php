<?php
//asort.php
$fruits = array( "e" => "lemon",
"r" => "orange",
"a" => "banana",
"p" => "apple");
print_r($fruits);
asort($fruits);
print "*** after asort() ***\n";
print_r($fruits);
?>

<?php
//ksort.php
$fruits = array( "e" => "lemon",
    "r" => "orange",
    "a" => "banana",
    "p" => "apple");
print_r($fruits);
ksort($fruits);
print "*** after ksort() ***\n";
print_r($fruits);
?>

<?php
//rsort.php
$numbers=array(4,6,2,22,11);
rsort($numbers);

$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++){
  echo $numbers[$x];
  echo "";
}
?>

<?php
//arsort.php
$age=array("2"=>"35","1"=>"37","5"=>"43");
arsort($age);

foreach($age as $x=>$x_value){
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "";
}
?>

<?php
//krsort.php
$age=array("2"=>"35","1"=>"37","5"=>"43");
krsort($age);

foreach($age as $x=>$x_value){
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "";
}
?>





