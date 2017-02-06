Tmpl = {
/***********************--[ Slider-Testimonials ]--************************/
	testimonials : function() {		
		jQuery('body > div.testimonials > .owlContainer, body > div.owlSlider').owlCarousel({	
					loop:true,
					margin:10,
					autoplay: true,
					autoplayTimeout: 2000,
					autoplayHoverPause: true,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:false
						}
					}
				})	
	}, 
/***********************--[ Submenu ]--************************/	
	submenu : function() {
		jQuery('body li.parent').toggleClass('active');
	},
/***********************--[ Mobile-Menu ]--************************/
	menuMobile : function() {
		jQuery('body nav.menu').toggleClass('active');
		
		if(jQuery('nav.menu').hasClass('active')){
			setTimeout(function() {
				jQuery('nav.menu').addClass('ekstraactive');
			},200);
		}else {
			jQuery('nav.menu').removeClass('ekstraactive');
		}
		
		jQuery('body li.parent').removeClass('active');
	},
/***********************--[ Cookies ]--************************/	
	setc : function() {
		var date = new Date();
		date.setTime(date.getTime() + (1 * 3 * 1000));
		jQuery.cookie("ciacho","czekolada", {expires : date});
	
	},
	cookies : function() {
		jQuery('#ciacho').toggleClass('active');
		
		if(jQuery('#ciacho').hasClass('active')){
			setTimeout(function() {
				jQuery('#ciacho').addClass('ekstraactive');
			},200);
		}else {
			jQuery('#ciacho').removeClass('ekstraactive');
		}

		setTimeout(function() {
			jQuery('#ciacho').toggle();	
			},200);
	}
}