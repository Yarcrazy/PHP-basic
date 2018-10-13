<?php

$num = 0;
do {
  if ($num === 0) {
    echo "$num - это ноль\n";
  } else if ($num % 2 === 1) {
    echo "$num - это нечетное число\n";
  } else if ($num % 2 === 0) {
    echo "$num - это четное число\n";
  }
  $num += 1;
} while ($num <= 10);