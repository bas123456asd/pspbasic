<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("TOYOTA",5,2),
  array("HONDA",17,15)
);

for ($row = 0; $row < count($cars); $row++) {
  for ($col = 0; $col < count($cars[$row]); $col++) {
    echo $cars[$row][$col]."<br>";
  }
}
?>