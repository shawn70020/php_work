<?php

$a = 12;
$b = "34";

$result = $a + $b; // 46
// $result = $a . $b; // 1234
 $result = $a + intval($b);  // intval 將字串轉換成整數

echo $result;

?>