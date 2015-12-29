jQuery('.menu-toggle').click(function(event){
	event.preventDefault();
	document.getElementsByClassName('top-header')[0].classList.toggle('active-menu');
});