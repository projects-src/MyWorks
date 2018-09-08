<?php
  if(isset($_POST['comment']))
  $comment = $_POST['comment'];
  echo $comment;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>検索フォーム</title>
</head>
<body>
  <h1>フォームデータの送信</h1>
  <form action="search.php" method="post">
  <input type="text" name="comment"/><br/>
  <input type="submit" value="送信"/>
  </form>
</body>
</html>
