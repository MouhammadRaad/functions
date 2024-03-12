<?php

function sum($a,$b){
  return strval($a+$b);
}
function multiply($a,$b){
  return strval($a*$b);
}

function division($a,$b){
  return strval($a/$b);
}
function substraction($a,$b){
  return strval($a-$b);
}


$result=sum(10,5);
echo $result;



?>