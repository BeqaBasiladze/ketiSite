/*
document.querySelectorAll('.grid__item img').forEach(image => {
	image.onclick = () => {
		document.querySelector('.grid__item img').src = image.getAttribute('src');
		document.getElementById('modal_project_1').style.display = 'flex';
	}
});

document.querySelector('.data__close-img').onclick = () => {
	document.getElementById('modal_project_1').style.display = 'none';
}

var slideIndex = 1;
showModalSlides(slideIndex);

// Next/previous controls
function plusModalSlides(n) {
  showModalSlides(slideIndex += n);
}


function showModalSlides(n) {
  var i;
  var slides = document.querySelectorAll(".worksSlider div");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
*/




