$(function() {
	$('body').append('<a id="pageTop" href="#contents"><span class="fa fa-caret-square-o-up"></span>&nbsp;Top</a>');
	var topBtn = $('#pageTop');
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
    topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 1000);
		return false;
    });
});