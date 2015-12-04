<?php
$id=htmlspecialchars($_GET['id'],ENT_QUOTES);
include('dbh.php');
$stmt=$dbh->prepare('SELECT * FROM posts WHERE id=?');
$stmt->execute(array($id));
$dbh=null;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>新着記事詳細</title>
<link type="text/css" rel="stylesheet" href="css/main.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/main.js"></script>
</head>
<body>
<div class="container">
	<header id="global_header" class="clearfix">
		<a href="">
			<h1 class="logo">
				<span class="invisible">ここに見出し（CSSで非表示にしているので検索エンジンには見えても、人間には見えないよ）</span>
			</h1>
		</a>
		<nav class="utility_nav clearfix">
			<ul>
			<li><a href="">NEWS</a></li>
			<li><a href="">SITEMAP</a></li>
			<li><a href="">PRIVACY</a></li>
			</ul>
		</nav>

	</header>
	<nav id="nav" class="main_nav clearfix">
		<ul>
		<li><a href="index.php">top</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		</ul>
	</nav>
	<main>
		<div class="gloval_main">
			<section class="contents">
                <article class="content_sentence">
                    <h2 class="mid padding20">投稿詳細</h2>
                    <div class="news detail">
      
                        <?php foreach($stmt AS $row):?>
                        <h2 class="detailtitle"><?php echo $row['title']; ?></h2>
                        <p class="detailcontent"><?php echo $row['content']; ?></p>
                        <a href="index.php">Topへ</a>
                        
                        
                        <?php endforeach;?>
                        
                    
                    </div>
                </article>
			</section>


		</div>
        

	</main>

</div>
</body>
</html>