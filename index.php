<?php

function getTransLitString($str) {
  $alphabet = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'jo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й'
    => 'jj', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
    'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'с','ч' => 'ch', 'ш' => 'sh', 'щ' => 'shh', 'ъ' => '\'\'', 'ы' => 'y',
    'ь' => '\'', 'э' => 'e', 'ю' => 'u', 'я' => 'ja',
  ];
  $returnStr = '';
  $array = preg_split('//u', $str);
  foreach ($array as $char) {
    $returnStr = in_array($char, array_keys($alphabet)) ? $returnStr . $alphabet[$char] : $returnStr . $char;
  }
  return $returnStr;
}

echo getTransLitString('привет! это тестовый пример для реализации транслитерации строк');
