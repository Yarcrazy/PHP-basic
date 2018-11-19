<?php

require 'vendor/autoload.php';

use App\View\Page;

$page = new Page('gallery');

echo $page->render([
  'images' => [
    [
      'pathBig'=>'img/big/1.jpg',
      'pathSmall'=>'img/small/1.jpg',
      'alt'=>'1'
    ],
    [
      'pathBig'=>'img/big/2.jpg',
      'pathSmall'=>'img/small/2.jpg',
      'alt'=>'2'
    ],
    [
      'pathBig'=>'img/big/3.jpg',
      'pathSmall'=>'img/small/3.jpg',
      'alt'=>'3'
    ],
    [
      'pathBig'=>'img/big/4.jpg',
      'pathSmall'=>'img/small/4.jpg',
      'alt'=>'4'
    ],
  ]
]);