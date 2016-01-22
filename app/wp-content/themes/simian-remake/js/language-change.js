jQuery('#es-submit').click(function(event){
	event.preventDefault();
	document.getElementById('lang-param').value = 'es';
	document.getElementById('language').submit();
});
jQuery('#en-submit').click(function(event){
	event.preventDefault();
	document.getElementById('lang-param').value = 'en';
	document.getElementById('language').submit();
});