<!--PLAY BAR-->
<iframe src="silence.mp3" allow="autoplay" id="fake_audio" style="display: none"></iframe>
		<div id="play-bar">
			<audio id="music-player" src="" type="audio/mpeg" preload="auto" autobuffer autoplay
			onended="end_m();"></audio>
			<!--PLAYLIST-->
			<div id="playlist">
				<img id="album-art" src="img/album/default.jpg"/>
			</div>
			<!--PROGRESS BAR-->
			<div id="audio-progress" onclick="audio_progress(event);">
				<div id="atual-progress"></div>
			</div>
			<!--CONTROLS-->
			<div class="audio-controls">
				<i class="material-icons" id="skip-previous-btn">skip_previous</i>
				<i class="material-icons" id="play-btn">play_circle_filled</i>
				<i class="material-icons" id="skip-next-btn">skip_next</i>
				<i class="material-icons" id="repeat-btn">repeat</i>
				<i class="material-icons" id="playlist-btn">playlist_play</i>
			</div>
			<!--MUSIC INFO-->
			<div id="music-name">Now playing Nothing</div>
			<div id="music-timer">0:0</div>
		</div>
		<!--FOOTER-->
		<footer>
			&copy;2021
		</footer>
		<!--JS-->
		<script src="js/function.js" type="text/javascript" onload="refresh();"></script>
		
	</body>
</html>