<?php

$input = [3, 4, 3, 1, 5, 4];

$output = [];

foreach ($input as $value) {
  if (!in_array($value, $output)) {
    $output[] = $value;
  }
}

// $output = ?
