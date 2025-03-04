$(function() {
	var moveSpd = 500;
	var i_mt= 60; 
	$('a[href^=#]').click(function() {
		
		var s_tgt = $(this).attr("href");
		if(s_tgt !== undefined){
			if(typeof i_mt === 'undefined'){i_mt = 0;}
				var r_tgt_offset = $(s_tgt).offset();
				var s_tgt_top = r_tgt_offset.top;
				$('html, body').animate({scrollTop:s_tgt_top - i_mt},moveSpd, "swing");
			}
	});
	
	if(location.hash.indexOf("#") !== -1){
		r_tgt_offset = $(location.hash).offset();
		s_tgt_top = r_tgt_offset.top;
		$('html, body').animate({scrollTop:s_tgt_top - i_mt},(moveSpd * 2));
	}
	return this;
});

