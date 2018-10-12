<?php

function power(int $val, int $pow) {
  if ($pow < 0) {
    return 1 / ($val * power($val, abs($pow) - 1));
  }
  return $pow === 0 ? 1 : $val * power($val, $pow - 1);
}

echo power(5, -3);