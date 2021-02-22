<?php

$input = [8, 6, 2, 9, 2, 1, 7];

$output = null;
$i = 0;

while ($i < count($input)) {
  if ($output < $input[$i]) {
    $output = $input[$i];
  }
  $i++;
}

// $output = ?
