WebFontConfig = {
	google: { families: [ 'Lora:400,700,400italic,700italic:latin', 'Slackey::latin' ] },
	timeout: 2000 // Set the timeout to two seconds
};
(function() {
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
})();

$(document).on('click', 'a.ac-NavAnchor', function(){
	//var target = $(this);
	var hash = this.hash;
	var destination = $(hash).offset().top;

	stopAnimatedScroll();

	$('html, body').stop().animate({
		scrollTop: destination
	}, 400, function() { window.location.hash = hash; });
	return false;
});

function stopAnimatedScroll(){
	if ( $('*:animated').length > 0 ) { $('*:animated').stop(); }
}
if(window.addEventListener) {
    document.addEventListener('DOMMouseScroll', stopAnimatedScroll, false);
}
document.onmousewheel = stopAnimatedScroll;
