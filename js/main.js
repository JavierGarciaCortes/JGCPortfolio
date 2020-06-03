window.onload = inicio;
var phonecond = 0;
var infocond = 0;
var fecha = new Date();
var day = fecha.getDay();
var hour = fecha.getHours();
var mywebs = ["Jeongye's Academy", "WPlanner", "Hotel del Oso", "Leon Cantabro"];
var nopress=setInterval(function(){ meclick1();}, 3000);

function inicio() {
    meclick1();
	document.getElementById("medib").onclick = meclick1;
}
function meclick1() {
	document.getElementById("cloud").style.display = 'none';
	if (a == 4) {
		clearInterval(nopress);
		document.getElementById("talking").innerHTML = "These are my webs:";
		for (i = 0; i < mywebs.length; i++) {
			document.getElementById("talking").innerHTML += `<div class="chose1"><a href="${mywebs[i]}.html">${mywebs[i]}</a></div>`;
		}
	}
	if (a == 3) {
		document.getElementById("talking").innerHTML = "Do you want to see my WEBS?";
		a++;
	}
	if (a == 2) {
		document.getElementById("talking").innerHTML = "Anyway... Let's start";
		a++;
	}
	if (a == 1) {
		switch (day) {
			case 1:
				document.getElementById("talking").innerHTML = "Happy Monday!<br>";
				break;
			case 2:
				document.getElementById("talking").innerHTML = "Happy Tuesday!<br>";
				break;
			case 3:
				document.getElementById("talking").innerHTML = "Happy Wednesday!<br>";
				break;
			case 4:
				document.getElementById("talking").innerHTML = "Happy Thursday!<br>";
				break;
			case 5:
				document.getElementById("talking").innerHTML = "Happy Friday!<br>";
				break;
			case 6:
				document.getElementById("talking").innerHTML = "Happy Saturday!<br>";
				break;
			default:
				document.getElementById("talking").innerHTML = "Happy Sunday!<br>";
				break;
		}
		if (hour <= 9) document.getElementById("talking").innerHTML += "You start working very soon.";
		else if (hour > 9 && hour <= 12) document.getElementById("talking").innerHTML += "Did you alreaddy drink your coffee?";
		else if (hour > 12 && hour <= 13) document.getElementById("talking").innerHTML += "I start beeing hungry. And you?";
		else if (hour > 13 && hour <= 14) document.getElementById("talking").innerHTML += "It's almost time to have lunch... I'm hungry";
		else if (hour > 14 && hour <= 16) document.getElementById("talking").innerHTML += "Did you drink your coffee? I need one...";
		else if (hour > 16 && hour <= 19) document.getElementById("talking").innerHTML += "Cheer up! You are in the final stretch!";
		else document.getElementById("talking").innerHTML += "You work until very late...";
		a++;
	}
    if (a == 0) {
		document.getElementById("talking").innerHTML = "Welcome to my portfolio";
		a++;
	}

} 	// Dialogo inicial y menu
function phone() {
	if (phonecond == 0) {
		document.getElementById("cloud").style.display = 'block';
		document.getElementById("cloud").innerHTML = "call me";
		document.getElementById("talking").innerHTML = 'My phone number is <br> +34 675614953';
		phonecond = 1;
		infocond = 0;
	} else {
		document.getElementById("cloud").style.display = 'none';
		meclick1();
		phonecond = 0;
	}
}		// Muestra el telefono
function sayinfo(){
	if (infocond == 0) {
		document.getElementById("cloud").style.display = 'block';
		document.getElementById("cloud").innerHTML = "about me";
		document.getElementById("talking").innerHTML = 'My name is Javier García Cortés. I am a web developer. Here you have my <a href="docs/CV%20WEb%20Developer%20en%202.pdf" download>CV</a>';
		infocond = 1;
		phonecond = 0;
	} else {
		document.getElementById("cloud").style.display = 'none';
		meclick1();
		infocond = 0;
	}
}	// Muestra mi nombre
