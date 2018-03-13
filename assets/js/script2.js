$(function(){

	$('.read_inq').on('click', function(e){
		$('.read_inq_pop:eq('+$(this).index('.read_inq')+')').fadeIn()
		$('#blur').fadeIn()	
	})
	$('.read_inq_close').on('click', function(e){
		$('.read_inq_pop').fadeOut()
		$('#blur').fadeOut()	
	})

	$('#inq').on('click', function(e){
		$('.menu_option').fadeOut(200)
		$('.inq_table').delay(200).fadeIn()
		activemenu(this)
	})
	$('#testi').on('click', function(e){
		$('.menu_option').fadeOut(200)
		$('.testi_table').delay(200).fadeIn()
		activemenu(this)
	})
	$('#banner').on('click', function(e){
		$('.menu_option').fadeOut(200)
		$('.banner_table').delay(200).fadeIn()
		activemenu(this)
	})

	function activemenu(e){
		$('.sidebar-menu').children().removeClass('active')
		$(e).parent().addClass('active')
	}

	var hash = window.location.hash
	if(hash == '#inq'){
		$('.menu_option').fadeOut(200)
		$('.inq_table').delay(200).fadeIn()
		activemenu($('#inq'))
	}
	else if(hash == '#testi'){
		$('.menu_option').fadeOut(200)
		$('.testi_table').delay(200).fadeIn()
		activemenu($('#testi'))
	}
	else if(hash == '#banner'){
		$('.menu_option').fadeOut(200)
		$('.banner_table').delay(200).fadeIn()
		activemenu($('#banner'))
	}
})