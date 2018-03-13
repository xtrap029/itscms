$(function(){
	$('.menu').on('click', function(e) {
		page = parseInt($(this).index('.menu'))
		$('body, html').animate({
			scrollTop: $('.page:eq('+page+')').offset().top - 85
		}, 300)
	})  
	$('.menu2').on('click', function(e) {
		page = parseInt($(this).index('.menu2'))
		$('body, html').animate({
			scrollTop: $('.page:eq('+page+')').offset().top - 85
		}, 300)
	})  

	$('.page4').on('click', function(e){
		$('body, html').animate({
			scrollTop: $('.page:eq(3)').offset().top - 85
		}, 300)
	})

	$('body').on('click', function(e){
		if(e.target.id == 'toggle'){
			e.preventDefault()
			$('#toggle_menu').slideToggle(200)
		}
		else{
			$('#toggle_menu').slideUp(200)
		}
	})

	$(window).scroll(function() {
	  var window_offset = $(window).scrollTop()
	  if(window_offset >= 104){
		$('#menu_logo').fadeIn(400)
	  }
	  else{
	  }
	})

	var hash = window.location.hash
	if(hash == '#inq'){
		$('body, html').animate({
			scrollTop: $('.page:eq(3)').offset().top
		}, 300)
	}

	$("#owl-demo").owlCarousel({
 
      navigation : false,
      pagination : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay : 8000
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  })
})