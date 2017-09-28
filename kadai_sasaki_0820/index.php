<!--
データベース作成部分の構造が知りたい。
cssでサイズが変わらない
 -->


<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="keywords" content=",,,">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>プログラミングができる学習宿泊ホテル</title>
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h2><img id="logo" src="img/header/logo.jpg" alt=""></h2>
	<p id="title">表参道で学習できるプログラミングホテル</p>
	<h2 id="header">
		<ul id="menu">
			<li>HOME</li>
			<li>ご宿泊</li>
			<li>おすすめプラン</li>
			<li>施設紹介</li>
			<li>あああ</li>
			<li>コンセプト</li>
			<li>採用情報</li>
			<li>お問い合わせ</li>
		</ul>
	</h2>
	<h2><img id="mainvisual" src="img/mainvisual/main_01.png" alt=""></h2>
	<h2 id="id02">滞在希望日時</h2>
	<h2 id="id03">
		<div class="toiawase">
		<form class="" action="index.html" method="post">
			<p>お名前：<input type="text" name="名前" value=""></p>
			<p>メールアドレス：<input type="text" name="メール" value=""></p>
			<p>男性人数：<input type="number" name="" value=""></p>
			<p>女性人数：<input type="number" name="" value=""></p>
			<input type="submit" name="送信" value="お問い合わせ">
		</form>
		</div>

	</h2>
	<h2 id="id04">
		<p id="id05">ようこそプログラミング学習ができるホテル<br>omotesandoへ。</p>
		<p id="id06">
			せまい、だけど清潔、快適、ネットも使える。
			<br>
			ホテル運営上のあらゆるムダを省き、業界初、なんとプログラミング未経験者でも大歓迎！
			<br>
			海外からのバックパッカーや宿泊コストなどを極力切り詰めたいという皆様を応援します
		</p>
	</h2>
	<h2 id="id07">
		<p id="id08">Lounge</p>
		<p id="id09">静かに学びたい方は特別なスペースを。
			<br>
			訪れてくださったお客様に思いっきり楽しんでいただきたい。そんな思いから当ホテル内に
			<br>
			Loungeを開設いたしました。
		</p>
		<p id="syousai1">詳しく見る</p>
	<h2 id="id10">
		<p id="id11">周辺施設</p>
		<p id="id12">行きたいところへ、思い立てばすぐ。
			<br>
			当ホテルから表参道周辺、青山、外苑一丁目など様々な場所に簡単にアクセスができます。
			<br>
			当ホテル周辺の観光箇所や穴場スポットなどご紹介。
		</p>
		<p id="syousai2">詳しく見る</p>
	</h2>
	<h2 id="id13">
		<p style="font-size: 24px">おすすめプラン</p>
		<ul id="sample">
			<li><div class="sampletxt1" style="	font-size: 19px; text-align: center;">サンプル</div><div id="sampleimg1"><img style="	width: 300px;height: 234px;" src="./img/top/plan_img_01.png" alt=""></div></li>
			<li><div class="sampletxt2" style="	font-size: 19px; text-align: center;">サンプル</div><div id="sampleimg2"><img style="	width: 300px;height: 234px;" src="./img/top/plan_img_01.png" alt=""></div></li>
			<li><div class="sampletxt3" style="	font-size: 19px; text-align: center;">サンプル</div><div id="sampleimg3"><img style="	width: 300px;height: 234px;" src="./img/top/plan_img_01.png" alt=""></div></li>
		</ul>
	</h2>
	<h2 id="id14"></h2>
		<p id="id15">What's new・プログラミングができる学習宿泊ホテル</p>
		<div><!--ここにSQL文を差し込む-->
		<table>
			<?php
			session_start();
			//1.  DB接続する
			try {
			  $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
			} catch (PDOException $e) {
			  exit('DbConnectError:'.$e->getMessage());
			}

			//２．データ抽出SQL作成
			$stmt = $pdo->prepare("SELECT * FROM kadai_table");
			$status = $stmt->execute();

			//３．データ表示
			$view="";
			if($status==false) {
			  //execute（SQL実行時にエラーがある場合）
			  $error = $stmt->errorInfo();
			  exit("ErrorQuery:".$error[2]);

			} else {
			  //Selectデータの数だけ自動でループしてくれる
			  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
			    $view .= '<tr><td><p>'.$result["indate"].'</p>';
					$view .= '<td><p>'.$result["naiyou"].'</p>';
			  }
			}
			?>
			<?php echo $view; ?>

		</table>
		</div>
		<div><!--ユーチューブのアイフレームをここにいれる-->
			<ul id="video">
				<li><iframe width="465" height="285" src="https://www.youtube.com/embed/euBCPxR6dIo" frameborder="0" allowfullscreen></iframe></li>
				<li><iframe width="465" height="285" src="https://www.youtube.com/embed/euBCPxR6dIo" frameborder="0" allowfullscreen></iframe></li>
			</ul>
		</div>
	</h2>
	<h2 id="id09">
		<ul id="concept">
			<li>アメニティ<img src="./img/footer/f_banner_link_01.png" alt="" width="200" height="200"></li>
			<li>お得情報<img src="./img/footer/back_top.png" alt=""width="200" height="200"></li>
			<li>コンセプト<img src="./img/footer/f_banner_link_03.png" alt=""width="200" height="200"></li>
			<li>採用情報<img src="./img/footer/f_banner_link_04.png" alt=""width="200" height="200"></li>
		</ul>
	</h2>

	<!--SNSのところ-->
	<h2>
		<ul id="sns">
			<li id="fb"><img src="./img/footer/fb.png" alt=""></li>
			<li id="tw"><img src="./img/footer/tw.png" alt=""></li>
			<li id="insta"><img src="./img/footer/insta.png" alt=""></li>
		</ul>
	</h2>



	<div id="wrapper">

	</div>
	<!-- end# wrapper -->

	<!-- jquery script -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/common.js"></script>
</body>

</html>
