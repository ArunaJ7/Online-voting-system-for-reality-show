var image = document.getElementById('homepic');
var images = ['../images/home1.jpeg','../images/home2.jpeg','../images/home3.jpeg','../images/home4.jpeg']
setInterval(function(){
	var random = Math.floor(Math.random()*4);
	image.src = images[random];
},800);

	