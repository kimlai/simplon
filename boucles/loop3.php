<?php

$input = [3, 5, 2, 6, 5, 6, 2, 19];

$output = [];

foreach ($input as $number) {
  if ($number % 2 === 0) {
    $output[] =  $number;
  }
}

// $output = ?
