<?php

function getDashNotSpace($str) {
  $returnStr = '';
  $array = preg_split('//u', $str);
  foreach ($array as $char) {
    $returnStr = $char === ' ' ? $returnStr . '_' : $returnStr . $char;
  }
  return $returnStr;
}

echo getDashNotSpace('Здесь будет много пробелов        ');