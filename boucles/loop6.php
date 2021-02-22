<?php

$input = [3, 5, 2, 7, 1];
$output = [];

for ($i = 0; $i < count($input); $i++) {
  $minIndex = $i;
  for ($j = $i + 1; $j < count($input); $j++) {
    if ($input[$j] < $input[$minIndex]) {
      $minIndex = $j;
    }
  }
  $min = $input[$minIndex];
  $input[$minIndex] = $input[$i];
  $output[] = $min;
}

// $output ?
