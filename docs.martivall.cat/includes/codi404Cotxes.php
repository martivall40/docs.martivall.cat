<script>
	var num = 0;
	var alt = 2000;
	var cotxe = document.getElementById("a"),
	dreta = parseInt(cotxe.style.left || 0);
	altura = parseInt(cotxe.style.top || 0);	

	algu()
	function algu() {
		
		max = window.innerWidth - 250;
		maxY = window.innerHeight - 300;

		//document.getElementById("a").innerHTML = alt; html: <p style="position: absolute;" id="a"></p> x print var
		cotxe.style.left = (dreta + num) + 'px';
		cotxe.style.top = (altura + alt) + 'px';
		if (num >= max) {
			num = 0
			var alMax = 1800; //1800 , 2200
			var alMin = 2250; //2250 , 1900
			alt = Math.floor(Math.random() * (alMax - alMin + 1) ) + alMin;
		}
	}


	(document).addEventListener('keydown', function(event) {

		var moveEl = document.getElementById("demo"),
		currLeft = parseInt(moveEl.style.left || 0);
		currTop = parseInt(moveEl.style.top || 0);



		if (event.code == 'KeyD') {
			if (currLeft >= max) {
				currLeft = -100;
			}
			moveEl.style.left = (currLeft + 10) + 'px'; 
			document.querySelector('.caixa').style.transform = 'rotate(0deg)';

		}
		  
		if (event.code == 'KeyA') {
			if (currLeft <= -20) {
				currLeft = max;
			}
			moveEl.style.left = (currLeft - 10) + 'px';
			document.querySelector('.caixa').style.transform = 'scaleX(-1)';

		}

		if (event.code == 'KeyW') {
			moveEl.style.top = (currTop - 10) + 'px';
			document.querySelector('.caixa').style.transform = 'rotate(-90deg)';

		}

		if (event.code == 'KeyS') {
			if (currTop >= maxY) {
				currTop = -100;
			}
			moveEl.style.top = (currTop + 10) + 'px';
			document.querySelector('.caixa').style.transform = 'rotate(90deg)';
		}

		if (event.code == 'KeyS' && event.code == 'KeyA') {

			moveEl.style.top = (currTop + 10) + 'px';
			moveEl.style.left = (currLeft - 10) + 'px';
			document.querySelector('.caixa').style.transform = 'rotate(90deg)';
			document.querySelector('.caixa').style.transform = 'scaleX(-1)';



		}

	});
	setInterval(function() { 
  		algu(num += 5);
	}, 2)
</script>