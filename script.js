
let aspectBtn = document.getElementById("aspecto");
let mainElement = document.getElementById("container");

aspectBtn.addEventListener("click", function(){
	mainElement.classList.toggle("dark");
});