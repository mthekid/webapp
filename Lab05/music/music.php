<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Music Library</title>
		<meta charset="utf-8" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/5/music.jpg" type="image/jpeg" rel="shortcut icon" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/labResources/music.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>My Music Page</h1>
		
		<!-- Ex 1: Number of Songs (Variables) -->
		<p>
			I love music.
			I have <?php $song_count = 1234; print "$song_count"; ?> total songs,
			which is over <?php $song_hour = (int) 123; print "$song_hour"; ?> <? print "you are $song_hour"; ?>  hours of music!
		</p>

		<!-- Ex 2: Top Music News (Loops) -->
		<!-- Ex 3: Query Variable -->
		<div class="section">
			<h2>Billboard News</h2>
		
			<ol>
				<?php if( isset($_GET["newspages"]) ) { 
					$newspages = $_GET["newspages"];
				for($i =0 ; $i < $newspages; $i++) { 
					$month = 11 - $i;
					if($month < 10) { ?>
				<li><a href="https://www.billboard.com/archive/article/20190<?php print"$month"; ?>">2019-<?php print"$month"; } elseif($month>=10) { ?>
				<li><a href="https://www.billboard.com/archive/article/2019<?php print"$month"; ?>">2019-<?php print"$month"; } ?> 
				<?php } ?></a></li>
				<?php } else { 
					for($i = 0; $i < 5; $i++ ) {
						$month = 11 - $i;
						if($moth < 10) { ?>
				<li><a href="https://www.billboard.com/archive/article/20190<?php print"$month"; ?>">2019-<?php print"$month"; } elseif($month>=10) { ?>
				<li><a href="https://www.billboard.com/archive/article/2019<?php print"$month"; ?>">2019-<?php print"$month"; } ?> 
				<?php } } ?>
			</ol>
		</div>

		<!-- Ex 4: Favorite Artists (Arrays) -->
		<!-- Ex 5: Favorite Artists from a File (Files) -->
		<div class="section">
		<!--	<# ?php $favoriteArtists=array("Gun N'Roses ","Green Day", "Blink182", "Queen") ?> -->
			<?php $results = "";
			$lines = @file("favorite.txt") or $results = "can't read the file.";
			$artists_wikiName[count($lines)] = array();
			if($lines != null ) {?>
					<!-- $results .= ($i+1) . ": " . $lines[$i] . "<br>";?> -->
			<h2>My Favorite Artists</h2>
			<ol>
			<?php for($i = 0; $i < count($lines); $i++) { 
				$artists_wikiName[$i] = $lines[$i];?>
				<li><a href="http://en.wikipedia.org/wiki/<?php echo "$artists_wikiName[$i]"; ?>"> <?php echo "$lines[$i]";  ?></a></li> <?php }?> 
			</ol> <?php }?>
			<!--	<# ?php for($i =0; $i < count($favoriteArtists); $i++ ) { ?>
				<li>< #?php print"$favoriteAtists[$i]"; ?></li>
				<# ?php } ?> -->

		</div>
		
		<!-- Ex 6: Music (Multiple Files) -->
		<!-- Ex 7: MP3 Formatting -->
		<div class="section">
			<h2>My Music and Playlists</h2>
			
			<?php print_r(glob("*.*")); ?> 
			<ul id="musiclist">
				<li class="mp3item">
					<a href="lab5/musicPHP/songs/paradise-city.mp3">paradise-city.mp3</a>
				</li>
				
				<li class="mp3item">
					<a href="lab5/musicPHP/songs/basket-case.mp3">basket-case.mp3</a>
				</li>

				<li class="mp3item">
					<a href="lab5/musicPHP/songs/all-the-small-things.mp3">all-the-small-things.mp3</a>
				</li>

				<!-- Exercise 8: Playlists (Files) -->
				<li class="playlistitem">326-13f-mix.m3u:
					<ul>
						<li>Basket Case.mp3</li>
						<li>All the Small Things.mp3</li>
						<li>Just the Way You Are.mp3</li>
						<li>Pradise City.mp3</li>
						<li>Dreams.mp3</li>
					</ul>
			</ul>
		</div>

		<div>
			<a href="https://validator.w3.org/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-html.png" alt="Valid HTML5" />
			</a>
			<a href="https://jigsaw.w3.org/css-validator/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-css.png" alt="Valid CSS" />
			</a>
		</div>
	</body>
</html>
