<?php
session_start();
$editid=h($_GET['editid']);
$_SESSION['editid']=$editid;
include '../dbh.php';
$stmt=$dbh->prepare('SELECT id,title,content FROM posts WHERE id=?');
$stmt->execute(array($editid));
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
<title>編集画面</title>
</head>
<body>
<div class="container">
   <div class="content">
    <h1 class="maintitle">投稿を編集します</h1>
    <form action="edit_confirm.php" method="post" class="input">
    	<?php foreach($stmt AS $row):?>
           <p>
            <label for="edit_title">タイトル</label><br>
            <input type="text" name="edit_title" class="input_title" value="<?php echo $row['title']; ?>"><br>
            </p>
            <p>
            <label for="edit_title">内容</label><br>
                <textarea name="edit_content" class="input_textarea"><?php echo $row['content'];?></textarea><br>
            </p>
        <?php endforeach;?>	    
            <p>
            <input type="submit" value="更新">
            </p>      
        </form>
    
    <button onClick="location.href='index.php'">管理画面トップに戻る</botton>
    
    
    </div>       
</div>
</body>
</html>