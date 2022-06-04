<?php $fp = fopen("info.txt", "r");
//  ファイル内容を1行ずつ要素に格納するための配列を用意
$line = array();
// 本文を格納するための変数
$body = '';
// ファイルが正しく開けたとき
if ($fp) {
  while (!feof($fp)) {
    $line[] = fgets($fp);
  }
  fclose($fp);
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>サークルサイト</title>
</head>

<body>
  <?php include('navbar.php'); ?>
  <div style="padding: 30px 40px;">
    <h1>お知らせ</h1>
    <?php
    // お知らせがあるとき
    if (count($line) > 0) {
      for ($i == 0; $i < count($line); $i++) {
        if ($i == 0) {
          // 1行目はタイトル
          echo '<h2>' . $line[0] . '</h2>';
        } else {
          // $i行目に改行タグをつけて変数に代入
          $body .= $line[$i] . '<br>';
        }
      }
    } else {
      $body = "お知らせはありません";
    }
    echo '<p>' . $body . '</p>';
    ?>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>