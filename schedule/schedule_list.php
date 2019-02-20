<?php
header("Content-Type: text/html; charset=UTF-8");
$filename = "samplefile.txt";
$schedule_list = file($filename);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title>スケジュール一覧</title>
<style>
 a:link {
    color: #3366FF;
    background-color: transparent;
    text-decoration: none;
    font-weight: bold;
 }
 a:visited {
    color: #2B318F;
    background-color: transparent;
    text-decoration: none;
    font-weight: bold;
 }
 a:hover {
   color: #00BFFF;
   background-color: transparent;
   text-decoration: underline;
 }
 body {color: #333333; background-color: #FFFFFF;}
 table {
    border: 1px solid #CCCCCC;
    border-collapse: collapse;
    margin-bottom: 1em;
 }
 td {
   border: 1px solid #CCCCCC;
   height: 2.5em;
   vertical-align: middle;
   padding-left: 1em;
   padding-top: 2px;
   padding-right: 1em;
   padding-bottom: 2px;
 }
 th {
    border: 1px solid #CCCCCC;
    color: #333333;
    background-color: #F0F0F0;
    padding: 5px;
 }
</style>
</head>
<body>
<table border="1">
    <tr>
        <td>日付</td>
        <td>タイトル</td>
        <td>内容</td>
        <td>編集</td>
        <td>削除</td>
    </tr>
<?php
foreach($schedule_list as $lineno => $line){
    list($schedule_date, $title, $body) = explode("|", $line);
    if($schedule_date==date("Ymd", mktime(0,0,0,$_GET["month"],$_GET["day"],$_GET["year"]))){
        print("<tr>\n");
        print("<td>$schedule_date</td>\n");
        print("<td>$title</td>\n");
        print("<td>$body</td>\n");
        print("<a href=\"schedule_edit.php?lineno=$lineno& mode=edit\">編集する</a>");
        print("<a href=\"schedule_edit.php?lineno=$lineno& mode=delete\">削除する</a>");
        print("</tr>\n");
    }
}
?>
</table>
</body>
</html>
