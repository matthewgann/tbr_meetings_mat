(function ($) {

    $(document).ready(function () {
		
		$('.btn-refresh').click(function() {
			window.location.reload();
		});
	
	
	});
	
		$('.btn a').live('click', function (event) {
	    	event.preventDefault();
			window.location = $(this).attr("href");
		});
	
	

	
	
})(jQuery);