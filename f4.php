<?php

function flip ($number){

$reversed=0;

while($number!=0){
  $digit= $number%10;
  $reversed=$number*10 + $digit;
  $number=$number/10;

}

return $reversed;
}
$flipNum=flip(1234);

echo($flipNum);














?>