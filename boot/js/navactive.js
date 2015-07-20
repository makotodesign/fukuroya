$(function(){
var name = $('#page_flug').attr('class');
switch (name){
	case 'index_flug':
	$('#mainnav li a').removeClass('active');
	$('#top').addClass('active');
	break;
	case 'product_flug':
	$('#mainnav li a').removeClass('active');
	$('#product').addClass('active');
	break;
	case 'order_flug':
	$('#mainnav li a').removeClass('active');
	$('#order').addClass('active');
	break;
	case 'company_flug':
	$('#mainnav li a').removeClass('active');
	$('#company').addClass('active');
	break;
	case 'contact_flug':
	$('#mainnav li a').removeClass('active');
	$('#contact').addClass('active');
	break;
}
});