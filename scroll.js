window.addEventListener('scroll', function() {
	const header = document.querySelector('Header');
	header.classList.toggle("sticky", window.scrollY > 0);
})