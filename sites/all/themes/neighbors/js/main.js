jQuery(document).ready(function($) {
	$("a[href='#top']").click(function() {
	  $("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});	

	(function ($) { 
		var $dropdown_nav = $('#navigation')
		
		$('button.menu_trigger').click(function () {
			if($dropdown_nav.hasClass('open') === true){
				$dropdown_nav.slideUp().removeClass('open');
			}else{
				$dropdown_nav.slideDown().addClass('open');
			}
		});
		
	})(jQuery);  
});
