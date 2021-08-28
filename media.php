<!-- Video
YouTube
Audio -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Media in HTML 5</h1>


<!-- 	<iframe src="https://www.youtube.com/embed/2oTZoksd9U4?autoplay=1&&mute=1&&list=PLEN67NEFoELvTyyl92fDJ37C7c2fYTgeB" style="width: 500px; height: 250px;"></iframe> -->


	<!-- <audio style="width: 100%;" controls autoplay="" muted id="myAudio">
		<source src="media/audio.mp3" type="audio/mp3">
	</audio> -->

	<!-- <button type="button" onclick="playAndPause()">Play/Pause</button>

	<button type="button" onclick="makeBig()">Make Big Size</button>

	<button type="button" onclick="makeNormal()">Make Normal Size</button>

	<br><br> -->
<!-- 
	<video class="elementor-video" src="https://techwinging.com/wp-content/uploads/2021/08/WhatsApp-Video-2021-08-24-at-7.52.06-PM.mp4" autoplay="" controls="" controlsList="nodownload"></video> -->

	<!-- <video controls id="myvideo" autoplay muted>
		<source src="media/video.mp4" type="video/mp4">
	</video> -->

	<script type="text/javascript">

		// var myAudio = document.getElementById('myAudio');

		// console.log(myAudio.muted = false);

		 // var myvideo = document.getElementById('myvideo');

		 // console.log(myvideo.muted = false);

		 function makeNormal() {
		 	myvideo.width = "500";
		 }

		function makeBig() {
			//console.log(myvideo);

			myvideo.width = "1000";
		}

		function playAndPause() {
			
		
			 console.log(myvideo);

			 if (myvideo.paused) {
			 	myvideo.play();
			 } else {
			 	myvideo.pause();
			 }

			 //myvideo.play();

			// myvideo.pause();

			//console.log(myvideo.play);

			// if(myvideo.play()) {
			// 	myvideo.pause()
			// } else {
			// 	myvideo.play()
			// }



		}
	</script>
</body>
</html>