jQuery('.menu-toggle').click(function(event){
	event.preventDefault();
	document.getElementsByClassName('top-header')[0].classList.toggle('active-menu');
});
jQuery('.search-toggle').click(function(event){
	event.preventDefault();
	document.getElementsByClassName('search-bar')[0].classList.toggle('active-search');
	document.getElementsByClassName('social')[0].classList.toggle('inactive');
	document.getElementsByClassName('languages')[0].classList.toggle('inactive');
	for (var i = 0; i < document.getElementsByClassName('languages').length; i++) {
		document.getElementsByClassName('languages')[i].classList.toggle('inactive');
	};
	document.getElementsByClassName('search-tool')[0].classList.toggle('inactive');
	document.getElementsByClassName('mail')[0].classList.toggle('inactive');
	for (var i = 0; i < document.getElementsByClassName('icon-vertical-separator').length; i++) {
		document.getElementsByClassName('icon-vertical-separator')[i].classList.toggle('inactive');
	};
});