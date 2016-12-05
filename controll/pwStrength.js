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
		$(".easy").animate({ width: 'hide'});
		$(".medium").animate({ width: 'hide'});
		$(".hard").animate({ width: 'hide'});
	}
	switch(strength){
		case 3:
			$(".easy").animate({ width: 'show'});
			$(".medium").animate({ width: 'hide'});
			$(".hard").animate({ width: 'hide'});
			break;
		case 4:
			$(".easy").animate({ width: 'show'});
			$(".medium").animate({ width: 'show'});
			$(".hard").animate({ width: 'hide'});
			break;
		case 5:
			$(".easy").animate({ width: 'show'});
			$(".medium").animate({ width: 'show'});
			$(".hard").animate({ width: 'show'});
			break;
	}
}
