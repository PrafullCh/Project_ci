		
		var curSong=0;
		var song  = new Audio();
		song.src=songs[curSong] ;
		
		function continueSong()
		{
			var status=document.getElementById('pl').src;
			console.log
			if (status==="http://localhost:82/Project/images/pause.jpg") 
			{
				song.play();
				document.getElementById('pl').src="http://localhost:82/Project/images/play.jpg";
			}
			else
			{
				song.pause();
				document.getElementById('pl').src="http://localhost:82/Project/images/pause.jpg";
			}
		}

		function nextSong()
		{
			curSong++;
			checkCurSong();
			song.src=songs[curSong];
			document.getElementById('song_poster').src=posters[curSong];
			song.play();
			document.getElementById('pl').src="http://localhost:82/Project/images/play.jpg";
		}
		function preSong()
		{
			curSong--;
			checkCurSong();
			song.src=songs[curSong];
			document.getElementById('song_poster').src=posters[curSong];
			song.play();
			document.getElementById('pl').src="http://localhost:82/Project/images/play.jpg";
		}
		function checkCurSong()
		{
			if(curSong==songs.length)
				curSong=0;
			else if(curSong==-1)
				curSong=songs.length-1;
		}
		window.setInterval(function(){
		 	
		 	 var curTime= song.currentTime;
		 	 //console.log(curTime); 
		 	 var durSong=song.duration;
		 	 //console.log(durSong);
		 	 var val = curTime*100/durSong;
		 	 document.getElementById('range').value=val;
		 	 if(val==durSong)
		 	 {
		 	 	nextSong();
		 	 	console.log('next song')
		 	 }
		
		}, 1000);