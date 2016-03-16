jQuery('.menu-toggle').click(function(event){
	event.preventDefault();
	document.getElementsByClassName('top-header')[0].classList.toggle('active-menu');
});
jQuery('.search-toggle').click(function(event){
	event.preventDefault();
	var searchbars = document.getElementsByClassName('search-bar');
	for (var i = 0; i < searchbars.length; i++) {
		searchbars[i].classList.toggle('active-search');
	}
	var socials = document.getElementsByClassName('social');
	for (var i = 0; i < socials.length; i++) {
		socials[i].classList.toggle('inactive');
	}
	for (var i = 0; i < document.getElementsByClassName('languages').length; i++) {
		document.getElementsByClassName('languages')[i].classList.toggle('inactive');
	};
	for (var i = 0; i < document.getElementsByClassName('search-tool').length; i++) {
		document.getElementsByClassName('search-tool')[i].classList.toggle('inactive');
	}
	for (var i = 0; i < document.getElementsByClassName('mail').length; i++) {
		document.getElementsByClassName('mail')[i].classList.toggle('inactive');
	}
	for (var i = 0; i < document.getElementsByClassName('icon-vertical-separator').length; i++) {
		document.getElementsByClassName('icon-vertical-separator')[i].classList.toggle('inactive');
	};
});