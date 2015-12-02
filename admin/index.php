<?php
include '../dbh.php';
$stmt=$dbh->query('SELECT * FROM posts ORDER BY time DESC');
$dbh=null;

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="admin.css">
<title>管理画面</title>
</head>
<body>
<div class="container">
    <h1 class="maintitle">投稿管理画面</h1>
    <div class="content">
       <h2 class="subtitle">新規投稿</h2>
        <form action="confirm.php" method="post" class="input">
           <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" class="input_title" required placeholder="ここにタイトルを入力してください"><br>
            </p>
            <p>
            <label for="title">内容</label><br>
                <textarea name="content" class="input_textarea" required placeholder="ここに本文を入力してください"></textarea><br>
            </p>
            <p>
            <input type="submit" value="確認">
            </p>      
        </form>
        
    </div>
    <div class="content">
        <h2 class="subtitle">投稿一覧から編集</h2>
        <table class="allpost">
            <tr>
                <th width="5%">ID</th>
                <th width="10%">更新時間</th>
                <th width="20%">タイトル</th>
                <th width="55%">本文</th>
                <th width="10%">編集内容</th>                
            </tr>
            <?php foreach($stmt AS $row):?>
            <tr>
            	<td><?php echo $row['id']; ?></td>	
          		<td><?php echo $row['time']; ?></td>
            	<td><?php echo $row['title']; ?></td>
            	<td><?php echo $row['content']; ?></td>
            	<td>
            	<a href="delete.php?delid=<?php echo $row['id'];?>">削除する</a><br>
            	<a href="edit.php?editid=<?php echo $row['id'];?>">編集する</a>
            	</td>
            </tr>
			<?php endforeach; ?>
        </table>
    </div>
    
            
</div>
</body>
</html>