$(function() {
  	"use strict";

  	var total = parseInt($('.table-order-medic .total .price').text());
  	$('.table-order-medic .checkbox input[type=checkbox]').each(function() {
  		if($(this).is(':checked')) {
  			var a = parseInt($(this).parent().parent().next().find('.price').text());
		  	total += a;
			$('.table-order-medic .total .price').html(total);
		}
  	});
  	$('.table-order-medic .checkbox input[type=checkbox]').on('click', function() {
  		var number = parseInt($('.table-order-medic .checkbox input[type=checkbox]:checked').parent().parent().next().find('.price').text()),
			a = parseInt($(this).parent().parent().next().find('.price').text());
		if($(this).is(':checked')) {
		  	total += a;
			$('.table-order-medic .total .price').html(total);
		} else {
		  	total -= a;
		  	$('.table-order-medic .total .price').html(total);
		}
  	});
  	$("#form-select").selectbox();
  
});