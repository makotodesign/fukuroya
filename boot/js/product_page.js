$(function(){
	$('#product_title').css({position:'relative',left:'-1000px'});
	$('#product_subtitle').css({position:'relative',left:'1000px'});
	$('#product_p').css({opacity:0});
	$('#product_content').hide();

	$('#product_title').animate({left:0},2000,'easeInOutQuart',function(){
		$(this).animate({color:'#F46767',fontSize:'4rem'},1000,'linear',function(){
			$('#product_subtitle').animate({left:0},2500,'easeInOutQuart',function(){
				$(this).textillate({
				loop:false,
				initialDelay: 200,
				 in: { 
				 	effect: 'bounce',
				 	delayScale: 3
				 	}	
					});
				$('#product_p').delay(4000).animate({opacity:1},1500,'linear',function(){
					$('#product_content').show('slide',2000);
				});
			});
		});
	});





});