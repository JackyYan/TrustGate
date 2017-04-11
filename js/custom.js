/*
	Project Name : vapour theme
	Author Company : Ewebcraft
	Project Date:1 jan, 2016
	Author Website : http://www.ewebcraft.com
	Author Email : ewebcraft@gmail.com
*/

$(window).load(function(){
    $('#loader').fadeOut("slow");
});

(function($) {
	"use strict";

			/* for Animation */

		new WOW().init();

			/* for Animation */

		if($(window).innerWidth() <= 760){
			$('.navbar-collapse a').on('click',function (e) {
		        $('.navbar-collapse').collapse('toggle');
		        //alert('j');
		    });
		}

		$(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });

			/* Main Slider */

		 var slider = new MasterSlider();
		 slider.setup('mainSlider' , {
			width:1170,
			height:480,
			autoplay:true,
			space:1,
			loop:true,
			dir:"v",
			fullwidth:true,
			centerControls:false,
			speed:60,
			preload:0,
			view:'scale'
		});
		slider.control('arrows');
		slider.control('timebar' , {color:"#e1730f"});

		/* Smooth-Scroll */

		$(".scroll").on('click',function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top}, 2000);
		});

		/* Smooth-Scroll */

		// pretty photo function call
		$("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});

		//map initialization function
	 	function initialize() {
			var mapCanvas = document.getElementById('map-canvas');

			var mapOptions = {
			  center: new google.maps.LatLng(2.923502, 101.651151), // Set your Location Here
			  zoom: 14,
			  scrollwheel: false,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(mapCanvas, mapOptions);

		   /*********Start Map Pin code******/
		   var marker = new google.maps.Marker({
			  map: map,
			  title:"MSC Trustgate.com Sdn Bhd",

			  position: new google.maps.LatLng(2.923502, 101.651151) // Set Map Marker Location Here

			});
		   var infowindow = new google.maps.InfoWindow({
				content:"<b>MSC Trustgate.com Sdn Bhd</b> <br>" + "Suite 2-9, 4801, Jalan Perdana,<br> Cyberjaya Business District Perdana 1, 63000 Cyberjaya, Selangor <br>" + "Tel: 03-8318 1800", // Here you can add your content to show on marker click // Here you can add your content to show on marker click
			});
			google.maps.event.addListener(marker, "click", function(){
			  infowindow.open(map,marker);
			});
			/*********End Map Pin code******/
		}

		/*Google Map Initializer*/
	 	google.maps.event.addDomListener(window, 'load', initialize);
		/*End Google Map initializer*/


})(jQuery);
