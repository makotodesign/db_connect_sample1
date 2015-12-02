<?php
session_start();
$title=h($_POST['title']);
$content_before=nl2br($_POST['content']);
$content=strip_tags($content_before,'<br>');

$_SESSION['post']['title']=$title;
$_SESSION['post']['content']=$content;
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
    <h1 class="maintitle">投稿確認</h1>
    <div class="content">
    <h2 class="subtile">投稿内容</h2>
    <h3>タイトル</h3>
	<p>「<?php echo $title;?>」</p>
	<h3>本文</h3>
	<p><?php echo $content;?></p>     
	<button onClick="history.back();">戻る</button>
	<button onClick="location.href='done.php'">送信</button>     
    </div>
    
    
            
</div>
</body>
</html>