<?php

function getTransLitString($str) {
  $alphabet = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'jo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й'
    => 'jj', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
    'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shh', 'ъ' => '\'\'', 'ы' => 'y', 'ь' => '\'',
    'э' => 'eh', 'ю' => 'ju', 'я' => 'ja',
  ];
  $returnStr = '';
  $array = mb_split('//', $str, 1);
  var_dump($array);
  foreach ($array as $char) {
    $returnStr = in_array($char, $alphabet) ? $returnStr . $alphabet[$char] : $returnStr . $char;
  }
  return $returnStr;
}

echo getTransLitString('привет! это тестовый пример для реализации транслитерации строк. к сожалению символы в верхнем регистре пока не поддерживаются');
