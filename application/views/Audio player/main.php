<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<title>Audio</title>
	<link href="<?= base_url('assets/audio.css');?>" rel="stylesheet">
	<style type="text/css"></style>
</head>
<body>

	<div class="player">
		<div class="dialogue_box">
			<div class="poster">
				<img id="song_poster" src="http://localhost:82/Project/images/sia_cheap_thrills.jpg">
			</div>
			<div class="sneek">
				<input type="range" value="0" readonly="readonly" id="range">
			</div>
			<div class="buttons">
				<img src="<?= base_url('images/play_pre.jpg');?>" onclick="preSong();">
				<img src="<?= base_url('images/pause.jpg');?>" id="pl" onclick="continueSong();">
				<img src="<?= base_url('images/play_next.jpg');?>" onclick="nextSong();"> 
			</div>	
		</div>
	</div>
	<script type="text/javascript" src="<?= base_url('assets/audio.js')?>">
		var songs = ["http://localhost:82/Project/audio/sample.mp3","http://localhost:82/Project/audio/sample2.mp3"];
		var posters= ["http://localhost:82/Project/images/sia_cheap_thrills.jpg","http://localhost:82/Project/images/i_wish.jpg"];
	</script>
</body>
</html>