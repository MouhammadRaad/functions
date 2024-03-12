<?php

function mergeSort(&$array) {
  $length = count($array);
  if ($length <= 1) {
      return;
  }
  mergeSortHelper($array, 0, $length - 1);
}

function mergeSortHelper(&$array, $left, $right) {
  if ($left < $right) {
      $mid = (int)(($left + $right) / 2);
      mergeSortHelper($array, $left, $mid);
      mergeSortHelper($array, $mid + 1, $right);
      merge($array, $left, $mid, $right);
  }
}

function merge(&$array, $left, $mid, $right) {
  $n1 = $mid - $left + 1;
  $n2 = $right - $mid;

  
  $L = array();
  $R = array();


for ($i = 0; $i < $n1; $i++) {
      $L[$i] = $array[$left + $i];
  }
  for ($j = 0; $j < $n2; $j++) {
      $R[$j] = $array[$mid + 1 + $j];
  }


  $i = 0;
  $j = 0;


  $k = $left;
while ($i < $n1 && $j < $n2) {
      if ($L[$i] <= $R[$j]) {
          $array[$k] = $L[$i];
          $i++;
      } else {
          $array[$k] = $R[$j];
          $j++;
      }
      $k++;
  }


   while ($i < $n1) {
      $array[$k] = $L[$i];
      $i++;
      $k++;
  }

  
while ($j < $n2) {
      $array[$k] = $R[$j];
      $j++;
      $k++;
  }
}











?>