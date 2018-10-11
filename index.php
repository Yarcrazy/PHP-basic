<?php

function sum($a, $b) {
  return $a + $b;
}

function reduce($a, $b) {
  return $a - $b;
}

function multiply($a, $b) {
  return $a * $b;
}

function divide($a, $b) {
  if ($b == 0) {
    return 'На ноль делить нельзя!';
  }
  return $a / $b;
}

function mathOperation ($arg1, $arg2, $operation) {
  switch ($operation) {
    case 'sum': return sum($arg1, $arg2);
    case 'reduce': return reduce($arg1, $arg2);
    case 'multiply': return multiply($arg1, $arg2);
    case 'divide': return divide($arg1, $arg2);
  };
  return 'Неправильная операция';
}

echo mathOperation(3, 6, 'reduce');