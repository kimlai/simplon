<?php

$input1 = [3, 5, 1, 2, 6, 3];
$input2 = 9;

$output = false;
$i = 0;

while ($i < count($input1)) {
  if ($input1[$i] === $input2) {
    $output = true;
  }
  $i++;
}

// $output = ?
