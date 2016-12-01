function anim() {
	var strength = 0;
	
	var pattern = /^(?=.*\d).+$/g;//digit
	if(pattern.test($("#Pw").val())){
		strength += 1;
	}
	pattern = /^(?=.*[A-Z]).+$/g;//uppercase
	if(pattern.test($("#Pw").val())){
		strength += 1;
	}
	pattern = /^(?=.*[a-z]).+$/g;//lowercase
	if(pattern.test($("#Pw").val())){
		strength += 1;
	}
	pattern = /^(?=.*[-+_!@#$%^&*.,?]).+$/g;//symbol
	if(pattern.test($("#Pw").val())){
		strength += 1;
	}
	pattern = /^.{6,}$/g;//length
	if(pattern.test($("#Pw").val())){
		strength += 1;
	}
	
	if(strength < 2){
		$(".easy").hide();
		$(".medium").hide();
		$(".hard").hide();
	}
	switch(strength){
		case 3:
			$(".easy").show();
			$(".medium").hide();
			$(".hard").hide();
			break;
		case 4:
			$(".easy").show();
			$(".medium").show();
			$(".hard").hide();
			break;
		case 5:
			$(".easy").show();
			$(".medium").show();
			$(".hard").show();
			break;
	}
	/*if($(".easy").is(":hidden")) {
		$(".easy").animate({
            width: 'toggle'
        });
	}
	if(true) {
		$(".medium").animate( {
            width: 'toggle'
        });
	}
	if(true) {
		$(".hard").animate( {
            width: 'toggle'
        });
	}*/
}
