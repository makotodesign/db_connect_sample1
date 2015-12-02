<?php
$delid=h($_GET['delid']);
include '../dbh.php';
$stmt=$dbh->prepare('DELETE FROM posts WHERE id=?');
$stmt->execute(array($delid));
$dbh=null;

function h($v){
return htmlspecialchars($v,ENT_QUOTES);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="admin.css">
<title>削除画面</title>
</head>
<body>
<div class="container">
    <h1 class="maintitle">投稿を削除しました</h1>
    <button onClick="location.href='index.php'">管理画面トップに戻る</botton>
    
    
            
</div>
</body>
</html>