<?php

function decimalToBinary($decimal) {
  if ($decimal == 0) {
      return '0'; 
  }

  $binary = ''; 

  while ($decimal > 0) {
      $remainder = $decimal % 2; 
      $binary = $remainder . $binary; 
      $decimal = (int)($decimal / 2); 
  }

  return $binary;
}











?>