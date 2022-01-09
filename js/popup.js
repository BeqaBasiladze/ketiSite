document.querySelectorAll('.grid__item img').forEach(image => {
	image.onclick = () => {
		document.querySelector('.popup__image').style.display = 'block';
		document.querySelector('.popup__image img').src = image.getAttribute('src');
	}
});

document.querySelector('.popup__image span').onclick = () => {
	document.querySelector('.popup__image').style.display = 'none';
}