<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $my_name = htmlspecialchars($_POST["n"], ENT_QUOTES);
  $my_mes = htmlspecialchars($_POST["m"], ENT_QUOTES);
  $db = new PDO("mysql:host=localhost;dbname=db", "root", "root");
  $db->query("INSERT INTO tb(num, name, mes, date)VALUES(NULL, '$my_name', '$my_mes', NOW())");
  print "書き込み成功";
  print "<p><a href='sns1.php'>一覧表示へ</a></p>"
  ?>
</body>

</html>