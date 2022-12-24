function login(){
	var emailRegex = /[a-z0-9_-]{3,}[@]{1}[a-z-]{3,}[.com || .net]{1,}$/
	var email= document.getElementById("email").value;

	if(emailRegex.test(email)){
		
	}
	else{
		alert('Correctly input your email!');
	}

	var passwordRegex = /[A-Z]{1,}[a-zA-Z]{3,}[0-9]{1,}/;
	var password= document.getElementById("password").value;

	if(passwordRegex.test(password)){
			
	}
	else{
		alert('Correctly input your password! (At least one: uppercase letter and number!)');
	}
}	

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slider");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "block";
}

document.querySelector('.menu').addEventListener ('click', () => document.querySelector('.main-menu').classList.toggle('show'));

