(function($){	
	$(document).ready(function(){
		$var_c_wording = $('<h4/>').html('We are vulnerable because we are honest.  We are brave because we try.  We are Confused Girls.  Learning to embrace every part of ourselves. We take images of healing crystals and create active-wear that can only be described as pure art.  We support your journey in discovering your true nature. May our crystal inspired designs be a reminder of your eternal beauty.');
		$('h1.page-title').html('Confused Girl').append($var_c_wording);
		$('h1.page-title').show();
		
		$.each($('.price'),function(){
			var $lowest_price = $(this).first().clone();
			$(this).empty();
			$(this).append($($lowest_price).children()[0]);
		});
		$('.price').show('slow');		
	});
})(jQuery);