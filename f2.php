<?php

function filterNumbers($str) {
  $name = '';
    for ($i = 0; $i < strlen($str); $i++) {
if (ctype_digit($str[$i])) {
  $name .= $str[$i];
      }
  }
  return $name;
}
$string = "abc123xyz456";
$numbers = filterNumbers($string);
echo $numbers; 


?>