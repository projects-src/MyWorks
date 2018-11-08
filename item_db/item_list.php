<?php
//databaseに接続
require_once dirname(__FILE__).'/init.php'
//エラーが発生した場合はindex.htmlに飛ばす
if(!$_SESSION['login_data']['error']){
  header('Location:index.html');
  exit;
}

try{
  $dsn ='mysql:dbname='.DB_NAME.'; host=localhost; charset=utf8;';
  $db_user = DB_USER;
  $db_pass = DB_PASS;

  $dbh = new PDO($dsn, $db_user, $db_pass);
}catch(Exception $e) {
  print 'システムエラーが発生しました';
  exit;
}
$sql = 'SELECT * FROM items WHERE 1;';

//以下からSQLの実行
$rec = $dbh ->query($sql);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>登録商品一覧</title>
<style>
th{
  font-weight: bold;
  background: #F0E68C;
}
td{
  padding: 0 10px;
}
.code{
  text-align:center;
  background:#FFE4B5;
}
</style>
</head>
<body>
<h1>登録商品一覧</h1>
<a href="logout.php">ログアウト</a>
<div id="container">
<div id="content">
<table border="1">
<tr>
<th>コード</th><th>商品</th><th>価格</th><th>修正</th><th>削除</th>
</tr>
<?php
foreach($rec as $v){
  print '<tr>';
  print '<td class="code">';
  print h($v['item_code']);
  print '</td>';
  print '<td>';
  print h($v['item_name']);
  print '</td>';
  print '<td>';
  print h($v['item_price']);
  print '</td>';
  print '<td>';
  print '<a href="update.php?item_code='.h($v['item_code']).'">修正</a>';
  print '</td>';
  print '<td>';
  print '<a href="delete_confirm.php?item_code='.h($v['item_code']).'">削除</a>';
  print '</td>';
  print '</tr>';
}
?>
<?php
foreach($stmt as $rec){
  print '<tr>';
  print '<td>';
  print $rec['item_code'];
  print '</td>';
  print '<td>';
  print $rec['item_name'];
  print '</td>';
  print '<td>';
  print $rec['item_price'];
  print '</td>';
  print '<td>';
  print '</td>';
  print '<td>';
  print '</td>';
  print '</tr>';
}
?>
</table>
<a href="entry.php">新規商品登録</a>
</div>
</div>
</body>
</html>
