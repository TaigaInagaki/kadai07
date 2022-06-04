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
  $search = htmlspecialchars($_POST["s"], ENT_QUOTES);
  $db = new PDO("mysql:host=localhost;dbname=db", "root", "root");
  print "<p style='font-size:20pt'>{$search}の検索結果</p>";
  $ps = $db->query("SELECT * FROM tb WHERE mes like '%$search%'");
  while ($r = $ps->fetch()) {
    print "{$r['num']} {$r['name']} <br> {$r['mes']} <br> {$r['date']}";
  }
  print "<p><a href='sns1.php'>一覧表示へ</a></p>"
  ?>
</body>

</html>