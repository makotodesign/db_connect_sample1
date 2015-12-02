<?php
session_start();
$title=$_SESSION['post']['title'];
$content=$_SESSION['post']['content'];
include '../dbh.php';
$stmt=$dbh->prepare('INSERT INTO posts(time,title,content) VALUES (now(),:title,:content)');
$result=$stmt->execute(array(
						'title'=>$title,
						'content'=>$content
							));
$dbh=null;

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="admin.css">
<title>確認画面</title>
</head>
<body>
<div class="container">
    <h1 class="maintitle">投稿完了しました</h1>
    <button onClick="location.href='index.php'">管理画面トップに戻る</botton>
    
    
            
</div>
</body>
</html>