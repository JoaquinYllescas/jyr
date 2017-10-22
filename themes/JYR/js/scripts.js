(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		console.log("Kino");


//HOME PAGE

		$(window).on("load", function(){
			
		

				//Parallax 
				if($("#scene").length > 0 ){
					var scene = document.getElementById('scene');
					var parallax = new Parallax(scene, {
					  relativeInput: true,
					  calibrateX: true,
					  calibrateY: true,
					  invertX: true,
					  invertY: true,
					  limitX: 50,
					  limitY: 50,
					  scalarX: 3,
					  scalarY: 3,
					  frictionX: 0.4,
					  frictionY: 0.8,
					  onReady: function(){
					
						// $(".loader").delay(1000).fadeOut("1000");	

					
					  }
					});
					

					
				}

				
				$(".loader").fadeOut("1000");

			});
//HOME PAGE
		
	




	});
	
})(jQuery, this);
