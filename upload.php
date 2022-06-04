<?php
//アップロード状況
$msg = null;
//メッセージのデザイン
$alert = null;
//アップロード処理
if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
  $old_name = $_FILES['image']['tmp_name'];
  $new_name = $_FILES['image']['name'];
  if (move_uploaded_file($old_name, 'album/' . $new_name)) {
    $msg = 'アップロードしました';
    $alert = 'success';
  } else {
    $msg = 'アップロードできませんでした';
    $alert = 'danger';
  }
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
  <h1>画像アップロード</h1>
  <?php
  if ($msg) {
    echo '<div class="alert alert-' . $alert . ' "role="alert">' . $msg . '</div>';
  }
  ?>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>アップロードファイル</label><br>
      <input type="file" name="image" class="form-control-file">
    </div>
    <input type="submit" value="アップロードする" class="btn btn-primary">
  </form>


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