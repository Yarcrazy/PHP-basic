<?php

function renderMenu($array, $code) {
  $code .= "<ul";
  foreach ($array as $li => $ul) {
    echo $li . "\n";
    $code = "<li" . $li;
    if (is_array($ul)) {
      renderMenu($ul, $code);
    }
    $code .= "/li>";
  }
  $code .= "/ul>";
  return $code;
}

$array = [
  'Обувь' => [
    'Мужская' => [
      'Кроссовки' => ['Высокие', 'Низкие'],
      'Сандалии',
      'Тапки'],
    'Женская' => ['Сапожки', 'Босоножки', 'Туфли'],
  ],
];

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<ul><?php renderMenu($array, '') ?></ul>
<!--<ul>Обувь-->
<!--  <li><ul>Мужская-->
<!--    <li><ul>Кроссовки-->
<!--      <li>Высокие</li>-->
<!--      <li>Низкие</li>-->
<!--    </ul></li>-->
<!--    <li>Сандалии</li>-->
<!--    <li>Тапки</li>-->
<!--  </ul></li>-->
<!--  <li><ul>Женская-->
<!--    <li>Сапожки</li>-->
<!--    <li>Босоножки</li>-->
<!--    <li>Туфли</li>-->
<!--  </ul></li>-->
<!--</ul>-->
</body>
</html>