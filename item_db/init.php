<?php
function h($str) {
  //HTMLの特殊文字をエスケープする
 return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

header('X-Frame-OPTIONS:DENY');   //フレーム内のページ表示を全ドメインで禁止する
ob_start();                       //バッファリング開始
session_start();                  //セッションを開始する
session_regenerate_id(true);      //現在のセッションIDを新しく生成したものとかえる
define('DB_NAME','ProductDB');    //DB名を設定
define('DB_HOST','localhost');    //DB のホスト名
define('DB_USER','root');         //DBユーザーを設定
define('DB_PASS','root');         //DBのpassを設定
?>
