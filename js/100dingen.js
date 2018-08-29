var $window = $(window);
	var velocity = 0.4;
	var slowvelocity = 0.4;

	function update(){
	    var pos = $window.scrollTop();
	    console.log(pos);
	    
	    if (pos <= 10 && pos > 1) {
	    	$('.sc_one_image.one').fadeTo("fast", 1 );
	    	$('.sc_one_image.four').fadeTo("fast", 1 );
	    }
	    if (pos >= 110 && pos < 230) {
	    	$('.sc_one_image.two').fadeTo("fast", 1 );
	    	$('.sc_one_image.five').fadeTo("fast", 1 );
	    	$('.sc_one_image.one').fadeTo("fast", 0.4 );
	    	$('.sc_one_image.four').fadeTo("fast", 0.4 );
	    }
	    if (pos >= 230 & pos <= 300) {
	    	$('.sc_one_image.three').fadeTo("fast", 1 );
	    	$('.sc_one_image.two').fadeTo("fast", 0.4 );
	    	$('.sc_one_image.five').fadeTo("fast", 0.4 );
	    }
	    if (pos <= 1 || pos > 300) {
	    	$( "img" ).each(function( ) {
	    		$(this).fadeTo("fast", 0.40 );
	    	});
	    }
	};

	$window.bind('scroll', update);
	

			