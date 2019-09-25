var phonecond = 0;
var infocond = 0;

function phone() {
	if (phonecond == 0) {
		document.getElementById("me").style.display = 'block';
		document.getElementById("main").style.display = 'none';
		document.getElementById("talking").innerHTML = 'My phone number is <br> +34 675614953';
		phonecond = 1;
		infocond = 0;
	} else {
		document.getElementById("me").style.display = 'none';
		document.getElementById("main").style.display = 'block';
		phonecond = 0;
	}
} // Muestra el telefono
function sayinfo() {
	if (infocond == 0) {
		document.getElementById("me").style.display = 'block';
		document.getElementById("main").style.display = 'none';
		document.getElementById("talking").innerHTML = 'My name is Javier García Cortés. I am a web developer. Here you have my <a href="docs/CV%20WEb%20Developer%20en%202.pdf" download>CV</a>';
		infocond = 1;
		phonecond = 0;
	} else {
		document.getElementById("me").style.display = 'none';
		document.getElementById("main").style.display = 'block';
		infocond = 0;
	}
} // Muestra mi nombre
