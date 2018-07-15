$.fn.slider = function () {
	//$(this).addClass('slider');

	var id = $(this).attr('id');

	var lis = $('.slider ul li');
	var len = lis.length;
	var w = $('.slider').width();
	var h = $('.slider').height();
	var pic_w = $('#pic').width();
	var pic_h=$('#pic').height()+30;
	$(lis).addClass('slideitem').each( function (i) {
		$(this).css({left: !i ? 0 : pic_w, top: -i * pic_h, 'z-index':i});
		$(this).append("<div class='tag'>" + $(this).data('title') + "</div>");
	});

	var q = [];
	var i;
	for (i = 2; i<= len; ++i) 
		q.push(i);
	q.push(1);

	$('#li1').addClass('cur');
	setInterval(function(){
		var cur = q.shift();
		var zz = len;
		for (x in q)
		{
			varliid = '#li' + q[x];
			$(liid).css({'z-index': zz--});
		}
		q.push(cur);

		var liid = '#li' + cur;
		$('.cur').animate({left: -w}, 500);
		$(liid).animate({left: 0}, 500, function () {
			$('.cur').removeClass('cur').css({left: pic_w, 'z-index': 0});
			$(this).addClass('cur');
		})
	}, 2000);
}

$(document).ready(function() {
	$("body").slider();
	var w_b = $("body").width();
	var w_d = $("#pp").width();
	var h_b = $("body").height();
	var h_d = $("#pp").height();
	var w_float = (w_b-w_d)/2;
	var h_float = (h_b-h_d)/2;
	
	$("#pp").css({"position":"relative","left":w_float+"px","top":h_float+"px"});
	
}) 


