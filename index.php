<?php

function getDeclination($num, $words) {
  switch ($num % 10) {
    case 1:
      $word = $words[0];
      break;
    case 2:
    case 3:
    case 4:
      $word = $words[1];
      break;
    default:
      $word = $words[2];
  }
  if ((($num % 100) > 10) && (($num % 100) < 20)) {
    $word = $words[2];
  }
  return $word;
}

$words = [
  'час' => ['час', 'часа', 'часов'],
  'минута' => ['минута', 'минуты', 'минут'],
];

$hour = date('H');
$min = date('i');

echo $hour . ' ' . getDeclination($hour, $words['час']) . ' ';
echo $min . ' ' . getDeclination($min, $words['минута']) . " \n";