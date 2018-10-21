(function($){
	"use strict";
	
	var elID;
	$('.hgr_template').each( function() {
		elID = $( this ).data( "template_name" );
		console.log(elID);
	});
		

	
})(jQuery);