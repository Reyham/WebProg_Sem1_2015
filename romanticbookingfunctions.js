$(document).ready(function(){
	$(".SessionDay").on('change', function(){
		$(this).val();
		if($(this).val()=="Monday" || $(this).val()=="Tuesday"){
			$(".SessionTime").val("9pm");
			$("#TimeDisplay").text("9pm");
			$("#SA").find('option').remove().end();
			var sa = 0;
			while(sa<10){
			$("#SA").append('<option value="'+(sa*12)+'">'+sa+'</option>');
			sa++;
			};
			$("#SP").find('option').remove().end();
			var sp = 0;
			while(sp<10){
			$("#SP").append('<option value="'+(sp*10)+'">'+sp+'</option>');
			sp++;
			};
			$("#SC").find('option').remove().end();
			var sc = 0;
			while(sc<10){
			$("#SC").append('<option value="'+(sc*8)+'">'+sc+'</option>');
			sc++;
			};
			$("#FA").find('option').remove().end();
			var fa = 0;
			while(fa<10){
			$("#FA").append('<option value="'+(fa*25)+'">'+fa+'</option>');
			fa++;
			};
			$("#FC").find('option').remove().end();
			var fc = 0;
			while(fc<10){
			$("#FC").append('<option value="'+(fc*20)+'">'+fc+'</option>');
			fc++;
			};
			$("#B1").find('option').remove().end();
			var b1 = 0;
			while(b1<10){
			$("#B1").append('<option value="'+(b1*20)+'">'+b1+'</option>');
			b1++;
			};
			$("#B2").find('option').remove().end();
			var b2 = 0;
			while(b2<10){
			$("#B2").append('<option value="'+(b2*20)+'">'+b2+'</option>');
			b2++;
			};
			$("#B3").find('option').remove().end();
			var b3 = 0;
			while(b3<10){
			$("#B3").append('<option value="'+(b3*20)+'">'+b3+'</option>');
			b3++;
			};
		};
		if($(this).val()=="Wednesday" || $(this).val()=="Thursday" || $(this).val()=="Friday"){
			$(".SessionTime").val("1pm");
			$("#TimeDisplay").text("1pm");
			$("#SA").find('option').remove().end();
			var sa = 0;
			while(sa<10){
			$("#SA").append('<option value="'+(sa*12)+'">'+sa+'</option>');
			sa++;
			};
			$("#SP").find('option').remove().end();
			var sp = 0;
			while(sp<10){
			$("#SP").append('<option value="'+(sp*10)+'">'+sp+'</option>');
			sp++;
			};
			$("#SC").find('option').remove().end();
			var sc = 0;
			while(sc<10){
			$("#SC").append('<option value="'+(sc*8)+'">'+sc+'</option>');
			sc++;
			};
			$("#FA").find('option').remove().end();
			var fa = 0;
			while(fa<10){
			$("#FA").append('<option value="'+(fa*25)+'">'+fa+'</option>');
			fa++;
			};
			$("#FC").find('option').remove().end();
			var fc = 0;
			while(fc<10){
			$("#FC").append('<option value="'+(fc*20)+'">'+fc+'</option>');
			fc++;
			};
			$("#B1").find('option').remove().end();
			var b1 = 0;
			while(b1<10){
			$("#B1").append('<option value="'+(b1*20)+'">'+b1+'</option>');
			b1++;
			};
			$("#B2").find('option').remove().end();
			var b2 = 0;
			while(b2<10){
			$("#B2").append('<option value="'+(b2*20)+'">'+b2+'</option>');
			b2++;
			};
			$("#B3").find('option').remove().end();
			var b3 = 0;
			while(b3<10){
			$("#B3").append('<option value="'+(b3*20)+'">'+b3+'</option>');
			b3++;
			};
		};
		if($(this).val()=="Saturday" || $(this).val()=="Sunday"){
			$(".SessionTime").val("6pm");
			$("#TimeDisplay").text("6pm");
			$("#SA").find('option').remove().end();
			var sa = 0;
			while(sa<10){
			$("#SA").append('<option value="'+(sa*18)+'">'+sa+'</option>');
			sa++;
			};
			$("#SP").find('option').remove().end();
			var sp = 0;
			while(sp<10){
			$("#SP").append('<option value="'+(sp*15)+'">'+sp+'</option>');
			sp++;
			};
			$("#SC").find('option').remove().end();
			var sc = 0;
			while(sc<10){
			$("#SC").append('<option value="'+(sc*12)+'">'+sc+'</option>');
			sc++;
			};
			$("#FA").find('option').remove().end();
			var fa = 0;
			while(fa<10){
			$("#FA").append('<option value="'+(fa*30)+'">'+fa+'</option>');
			fa++;
			};
			$("#FC").find('option').remove().end();
			var fc = 0;
			while(fc<10){
			$("#FC").append('<option value="'+(fc*25)+'">'+fc+'</option>');
			fc++;
			};
			$("#B1").find('option').remove().end();
			var b1 = 0;
			while(b1<10){
			$("#B1").append('<option value="'+(b1*30)+'">'+b1+'</option>');
			b1++;
			};
			$("#B2").find('option').remove().end();
			var b2 = 0;
			while(b2<10){
			$("#B2").append('<option value="'+(b2*30)+'">'+b2+'</option>');
			b2++;
			};
			$("#B3").find('option').remove().end();
			var b3 = 0;
			while(b3<10){
			$("#B3").append('<option value="'+(b3*30)+'">'+b3+'</option>');
			b3++;
			};
		}; 
	});
});