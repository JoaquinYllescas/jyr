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
					  calibrateX: false,
					  calibrateY: false,
					  invertX: true,
					  invertY: true,
					  limitX: 100,
					  limitY: 10,
					  scalarX: 3,
					  scalarY: 3,
					  frictionX: 0.8,
					  frictionY: 0.8,
					  onReady: function(){
					
						$(".loader").delay(1000).fadeOut("1000");	

					
					  }
					});
					

					
				}

				


			});
//HOME PAGE
		
	




	});
	
})(jQuery, this);
