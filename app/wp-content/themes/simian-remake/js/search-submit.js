jQuery('#search-header').click(function(event){
	event.preventDefault();
	document.getElementById('form-header').submit();
});
jQuery('#search-content').click(function(event){
	event.preventDefault();
	document.getElementById('form-search').submit();
});