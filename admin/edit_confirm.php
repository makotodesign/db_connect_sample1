<?php
session_start();
$editid=$_SESSION['editid'];
$title=h($_POST['edit_title']);
$content=strip_tags($_POST['edit_content']);
$content=nl2br($content);
$content=strip_tags($content,'<br>');

include '../dbh.php';
$stmt=$dbh->prepare('UPDATE posts SET title=:edittitle,content=:editcontent WHERE id=:id');
$stmt->execute(array(
				'edittitle'=>$title,
				'editcontent'=>$content,
				'id'=>$editid

));
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
<title>確認画面</title>
</head>
<body>
<div class="container">
    <h1 class="maintitle">更新しました</h1>
    
	<button onClick="location.href='index.php'">戻る</button>   
    </div>
    
    
            
</div>
</body>
</html>