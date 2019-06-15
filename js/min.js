/* --- Scrolling to top --- */
$(document).ready(function(){
	$(function toTop() {
		$('#top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 1000);
			return false;
		});
	});			
});
/* --- Show / Hide Footer by scrolling ---*/
// Hide Header on on scroll down
