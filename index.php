<?php
$date = date('Y');
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .content {
      height: 90vh;
    }
    .footer {
      height: 10vh;
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }
    .container {
      width: 1140px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
<div class="content container"></div>
<footer class="footer container">
  <div class="date"><?= $date ?></div>
</footer>
</body>
</html>
