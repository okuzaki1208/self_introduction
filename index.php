<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>好きなこと紹介ページ</title>
<meta name="viewport" content="width=device-width">
<meta name="robots" content="noindex,nofollow">
<meta name="description" content="スライドショー">
<meta name="theme-color" content="#553968">
<link rel="canonical" href="https://lopan.jp/css-animation/slideshow/">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slick.css"/>
<link rel="stylesheet" href="css/slick-theme.css"/>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="./js/anime.min.js"></script>
</head>

<header>
	<img id="block" src="./image/mb.png" style="width: 100px; height: 100px; position: absolute; cursor: pointer;">
	<section class="nav">

		<img src="image/MY-FAVORITES-PAGE.png" alt="navi-left" width="30%" height="auto">
		<dev class="navi-right">


			<div id="background_content">
				<a id="openImageLink" href="#" target="_blank">背景画像を新規タブで開く</a>
				<button id="reloadButton">背景画像を再読み込み</button>
				<button id="toggleBoxesButton">ポケモンゲット機能をOFF</button>
			</div>

			<div id="counter">捕まえたポケモンの数: 0</div>
		<!-- <a class="btn btn-border-4" href="#a">まえがき</a>
		<a class="btn btn-border-4" href="#b">好き①</a>
		<a class="btn btn-border-4" href="#c">好②</a>
		<a class="btn btn-border-4" href="#d">好③</a>
		<a class="btn btn-border-4" href="#e">好④</a>
		<a class="btn btn-border-4" href="#f">好⑤</a>
		<a class="btn btn-border-4" href="#g">あとがき</a> -->
		</dev>
	</section>

</header>

<body>
	<div id="box1" class="box"></div>
	<div id="box2" class="box"></div>
	<div id="box3" class="box"></div>
	<div id="box4" class="box"></div>
	<!-- <video id="video-background" autoplay loop muted>
		<source src="image/sunset.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video> -->
	<audio id="collisionSound" src="./image/collisionsound.mp3"></audio>
			<div class="pre-slideshow">

				<h2 id="a" class="midashi">　　　　～ まえがき ～</h2>
				<dev class="zunda">



					<img src="image/zunda_zenshin.png" alt="zunda A" width="20%" height="auto" onclick="toggleAudio('zunda1')">
					<div class='zunda B'>
						はじめまして！ボクの名前は「ずんだもん」なのだ。<br>
						このページでは奥崎恭平さんの好きなものを、ボクが代わりに紹介するのだ！<br>
						このページは、HTMLとCSSのみでコーディングされているのだ！<br>
						スライドショーもJavascript無しで実装してみたから、左右のボタンで捲ってみてほしいのだ！<br>
						　<br>
						2024.03.07 追記<br>
						遂にJavascriptを実装したのだ！<br>
						アニメーションや画像クリックでの音声コントロールも実装してみたのだ！<br>
					</div>
				<div>
					<audio src="image/zunda1.wav" alt="zunda D" controls type="audio/mp3" id="zunda1">test</audio>
				</div>
			</div>
			<main class="main-top" id="sukinakotoContainer">
					<section class="sukinakoto" onclick="toggleSize(this)">
						<img src="./image/game.png" class="sukinakoto-image">
						<h2 id="b" class="midashi">好きなこと①　ゲーム</h2>

							<div class="slideshow1">
								<input type="radio" name="slideshow1" id="switch1" checked>
								<input type="radio" name="slideshow1" id="switch2">
								<input type="radio" name="slideshow1" id="switch3">
								<input type="radio" name="slideshow1" id="switch4">
								<input type="radio" name="slideshow1" id="switch5">
								<div class="slideContents1">
									<section id="slide1">
										<img src="image/airride.gif" alt="" width="70%" height="70%">
									</section>
									<section id="slide2">
										<img src="image/bio2.gif" alt="" width="70%" height="70%">
									</section>
									<section id="slide3">
										<img src="image/gran.gif" alt="" width="70%" height="70%">
									</section>
									<section id="slide4">
										<img src="image/palworld.gif" alt="" width="70%" height="70%">
									</section>
									<section id="slide5">
										<img src="image/dakuso.gif" alt="" width="70%" height="70%">
									</section>
								</div>
								<p class="arrow prev">
									<i class="ico"></i>
									<label for="switch1"></label>
									<label for="switch2"></label>
									<label for="switch3"></label>
									<label for="switch4"></label>
									<label for="switch5"></label>
								</p>
								<p class="arrow next">
									<i class="ico"></i>
									<label for="switch1"></label>
									<label for="switch2"></label>
									<label for="switch3"></label>
									<label for="switch4"></label>
									<label for="switch5"></label>
								</p>
							</div>
							<div class="zunda">
								<img src="image/zundamon1.png" alt="zunda A" width="20%" height="auto" onclick="toggleAudio('zunda2')">
								<div class='zunda B'>奥崎恭平さんの一番の趣味は、何と言ってもゲームなのだ！<br>
									特にレースゲームやFPS、バイオハザードシリーズがお気に入りなのだ。<br>
									最新のゲームから古のゲームまで幅広く愛す、生粋のオールラウンダーなのだ！<br>
								<br>
								</div>
								<div>
								<audio src="image/zunda2.wav" alt="zunda C" controls type="audio/mp3" id="zunda2">test</audio>
								</div>
							</div>
							<div class="button-container">
								<button class="reset-button" onclick="resetSize(event)">閉じる</button>
							</div>
					</section>
					


				<section class="sukinakoto" onclick="toggleSize(this)">
					<img src="./image/fishing.png" class="sukinakoto-image">
					<h2 id="c" class="midashi">好きなこと②　釣り</h2>

					<div class="slideshow2">
						<input type="radio" name="slideshow2" id="switch6" checked>
						<input type="radio" name="slideshow2" id="switch7">
						<input type="radio" name="slideshow2" id="switch8">
						<input type="radio" name="slideshow2" id="switch9">
						<input type="radio" name="slideshow2" id="switch10">
						<div class="slideContents2">
							<section id="slide6">
								<img src="image/turi1.jpg" alt="" width="30%" height="30%">
							</section>
							<section id="slide7">
								<img src="image/turi2.jpg" alt="" width="70%" height="70%">
							</section>
							<section id="slide8">
								<img src="image/turi3.png" alt="" width="70%" height="70%">
							</section>
							<section id="slide9">
								<img src="image/turi4.png" alt="" width="70%" height="70%">
							</section>
							<section id="slide10">
								<img src="image/turi5.jpg" alt="" width="70%" height="70%">
							</section>
						</div>
						<p class="arrow prev">
							<i class="ico"></i>
							<label for="switch6"></label>
							<label for="switch7"></label>
							<label for="switch8"></label>
							<label for="switch9"></label>
							<label for="switch10"></label>
						</p>
						<p class="arrow next">
							<i class="ico"></i>
							<label for="switch6"></label>
							<label for="switch7"></label>
							<label for="switch8"></label>
							<label for="switch9"></label>
							<label for="switch10"></label>
						</p>
					</div>
					<div class="zunda">
						<img src="image/zundamon1.png" alt="zunda A" width="20%" height="auto" onclick="toggleAudio('zunda3')">
						<div class='zunda B'>
						アウトドアで唯一とも言える趣味が釣りなのだ。<br>
						潮風に吹かれながら俗世に疲れた心を癒やし、突如として起こる大物との命の駆け引きはたまらないのだ！<br>
						・・・初期投資も継続投資もそこそこ高くついてしまうところが、タマにキズなのだ。<br>
						</div>
						<div>
							<audio src="image/zunda3.wav" alt="zunda C" controls type="audio/mp3" id="zunda3">test</audio>
						</div>
					</div>

					<div class="button-container">
						<button class="reset-button" onclick="resetSize(event)">閉じる</button>
					</div>

				</section>

				<section class="sukinakoto" onclick="toggleSize(this)">
					<img src="./image/piano.png" class="sukinakoto-image">
					<h2 id="d" class="midashi">好きなこと③　ピアノ演奏</h2>

					<div class="insta">
					<video controls width="320" height="640" alt="">
						<source src="image/insta 13_3.mp4">
						<p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
						</video>
					</div>
					<div class="zunda">
						<img src="image/zundamon1.png" alt="zunda A" width="20%" height="auto"  onclick="toggleAudio('zunda4')">
						<div class='zunda B'>
							最も文芸的で見てくれが良い趣味がピアノ演奏なのだ。<br>
							小学生で一度辞めたものの成人後にまた触りだし、おこがましくもバッハなんかを弾いてるみたいなのだ。<br>
							音楽で食っていく道を一度は夢見るものなのだ！<br>
						</div>
						<div>
							<audio src="image/zunda4.wav" alt="zunda C" controls type="audio/mp3" id="zunda4">test</audio>
						</div>
					</div>

					<div class="button-container">
						<button class="reset-button" onclick="resetSize(event)">閉じる</button>
					</div>

				</section>

				<section class="sukinakoto" onclick="toggleSize(this)">
					<img src="./image/criative.png" class="sukinakoto-image">
					<h2 id="e" class="midashi">好きなこと④　制作活動</h2>

					<div class="insta">
					<img src="image/youtube.gif" alt="" width="70%" height="70%" alt="" ></div>
					<div class="zunda">
						<img src="image/zundamon1.png" alt="zunda A" width="20%" height="auto"  onclick="toggleAudio('zunda5')">
						<div class='zunda B'>
							パソコンを使って画像や動画の編集をすることが好きで、以前はゆっくり解説動画などを投稿していたのだ。<br>
							しばらくご無沙汰のようだが、復活の日も近いのか？<br>
							それにしても、このボクを差し置いてゆっくり解説動画を作るなんて、とんだ失敬なのだ！<br>
						</div>
						<div>
						<audio src="image/zunda5.wav" alt="zunda C" controls type="audio/mp3" id="zunda5">test</audio>
						</div>
						
					</div>

					<hr class="line1">

					<div class="yukkuri">
						<div class='yukkuri B'>
							合成音声動画のパイオニアは私達ゆっくりである。<br>
							あらゆるジャンルの実況・解説動画に私達が登場し、視聴者に有益をもたらしてきたのは周知の事実。<br>
							ぽっと出の新参者がたどり着ける境地ではない事は、歴史が証明している。<br>
							格が違うんだよ！  格が！！<br>
						</div>
							<img src="image/yukkuri.png" alt="yukkuri A" width="20%" height="auto" onclick="toggleAudio('yukkuri1')">
						<div>
							<audio src="image/yukkuri1.wav" alt="yukkuri C" controls type="audio/mp3" id="yukkuri1">test</audio>
						</div>
					</div>
					
					<hr class="line1">

					<div class="zunda">
						<img src="image/zundamon2.png" alt="zunda A" width="20%" height="auto" onclick="toggleAudio('zunda6')">
						<div class='zunda B'>
							なんて厚かましい奴らなのだ！<br>
							でも、胡座をかいていられるのも今のうちなのだ！<br>
							ボクの動画のシェアをもっと広げて、いつかあなた方をご退場に導いて差し上げるのだ！！<br>
						</div>
					<div>
						<audio src="image/zunda6.wav" alt="zunda C" controls type="audio/mp3" id="zunda6">test</audio>
						</div>
					</div>

					<div class="button-container">
						<button class="reset-button" onclick="resetSize(event)">閉じる</button>
					</div>

				</section>

				<section class="sukinakoto" onclick="toggleSize(this)">
					<img src="./image/karaoke.png" class="sukinakoto-image">
					<h2 id="f" class="midashi">好きなこと⑤　カラオケ</h2>

					<div class="insta">
						<img src="image/karaoke.jpg" alt="" width="70%" height="70%" alt="" >
					</div>
					<dev class="zunda">
							<img src="image/zundamon1.png" alt="zunda A" width="20%" height="auto" onclick="toggleAudio('zunda7')">
						<div class='zunda B'>
							カラオケは一人で行くくらい大好きなのだ！<br>
							採点での最高記録は、Kinki Kidsの「愛のかたまり」で97点台なのだ。<br>
							目指せ100点満点なのだ！！<br>
						</div>
						<div>
							<audio src="image/zunda7.wav" alt="zunda C" controls type="audio/mp3" id="zunda7">test</audio>
						</div>
					</dev>

					<div class="button-container">
						<button class="reset-button" onclick="resetSize(event)">閉じる</button>
					</div>

				</section>



				</main>



				<!-- <main class="main-middle">
					<section class="sukinakoto_dummy"></section>	
				</main> -->

				<main class="sukinakoto_dummy"></main>

				<footer class="pre-slideshow">

					<h2 id="g" class="midashi">～ あとがき ～</h2>
					<div class="zunda">
						<img src="image/zunda_zenshin.png" alt="zunda A" width="20%" height="auto" onclick="toggleAudio('zunda8')">
						<div class='zunda B'>
								Visual studio codeでコーディングしてみましたが、
								要素を理想通りの位置に配置できなくて大変だったのだ！！
								ChatGPT様々だったのだ！<br>
								Javascriptを使うともっと色々なことができるのかな？
								さらに勉強を頑張らないとなのだ！<br>
								ご視聴ありがとうございました！！<br>
								　<br>
								2024.03.07 追記<br>
								javascriptのおかげで、ページ設計の自由度が大幅にアップしたのだ！！<br>
								もっと練習して、スキルアップしていくのだ！<br>
						</div>
						<div>
							<audio src="image/zunda8.wav" alt="zunda D" controls type="audio/mp3" id="zunda8">test</audio>
						</div>
					</div>
				</footer>
			<script src="./js/sukinakoto.js"></script>
		</body>
</html>