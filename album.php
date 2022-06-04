<?php
// 画像ファイルのリストを格納する配列
$images = array();
// 画像フォルダから画像のファイル名を読み込む
if ($handle = opendir('./album')) {
  while ($entry = readdir($handle)) {
    // .と..ではない時、ファイル名を配列に追加
    if (!$entry = "." && !$entry = "..") {
      $images[] = $entry;
    }
  }
  closedir($handle);
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
    <h1>アルバム</h1>
    <?php
    if (count($images) > 0) {
      echo '<div class="row">';
      foreach ($images as $img) {
        echo '<div class="col-3">';
        echo '<div class="card">';
        echo '<a href="./album/' . $img . '" target"_blank"><img src="./album/' . $img . ' "class-img-fluid></a>';
        echo '</div>';
        echo '</div>';
      }
      echo '</div>';
    } else {
      echo '<div class="alert alert-dark" role="alert">画像はまだありません</div>';
    }
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