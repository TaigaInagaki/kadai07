<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="sns2.php" method="POST">
    名前
    <div><input type="text" name="n"></div>
    メッセージ
    <div><textarea name="m"></textarea></div>
    <input type="submit" value="送信する">
  </form>
  <hr>
  <form action="sns3.php" method="POST">
    検索キーワード
    <div><input type="text" name="s"></div>
    <input type="submit" value="検索する"><br>
    <a href="index.php">戻る</a>
  </form>
  <hr>

  <?php
  $db = new PDO("mysql:host=localhost;dbname=db", "root", "root");
  $ps = $db->query("SELECT * FROM tb ORDER BY num DESC");

  while ($r = $ps->fetch()) {
    print "{$r['num']} {$r['name']} <br> {$r['mes']} <br> {$r['date']}<hr>";
  };
  ?>
</body>

</html>