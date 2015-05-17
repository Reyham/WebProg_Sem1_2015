//Toggle and fade functions for selecting movie on movies.html
$(document).ready(function(){
    $("#Poster1").on('click', function(){
		$.post("http://titan.csit.rmit.edu.au/~e54061/wp/movie-service.php", function(movies){
		$("#Title").text(movies.RC.title);
		$("#Description").text(movies.RC.description);
		$(".Ticketing").attr("id","RC");
		$(".Ticketing").attr("title",movies.RC.title);
	}, 'json');
		$("#Synopsis").fadeIn();
		$('html,body').animate({
			scrollTop: $("#Synopsis").offset().top},
			'slow');
    });
});

$(document).ready(function(){
    $("#Poster2").on('click', function(){
		$.post("http://titan.csit.rmit.edu.au/~e54061/wp/movie-service.php", function(movies){
		$("#Title").text(movies.AC.title);
		$("#Description").text(movies.AC.description);
		$(".Ticketing").attr("id","AC");
		$(".Ticketing").attr("title",movies.AC.title);
	}, 'json');
		$("#Synopsis").fadeIn();
		$('html,body').animate({
			scrollTop: $("#Synopsis").offset().top},
			'slow');
    });
});

$(document).ready(function(){
    $("#Poster3").on('click', function(){
		$.post("http://titan.csit.rmit.edu.au/~e54061/wp/movie-service.php", function(movies){
		$("#Title").text(movies.CH.title);
		$("#Description").text(movies.CH.description);
		$(".Ticketing").attr("id","CH");
		$(".Ticketing").attr("title",movies.CH.title);
	}, 'json');
		$("#Synopsis").fadeIn();
		$('html,body').animate({
			scrollTop: $("#Synopsis").offset().top},
			'slow');
    });
});

$(document).ready(function(){
    $("#Poster4").on('click', function(){
		$.post("http://titan.csit.rmit.edu.au/~e54061/wp/movie-service.php", function(movies){
		$("#Title").text(movies.FO.title);
		$("#Description").text(movies.FO.description);
		$(".Ticketing").attr("id","AF");
		$(".Ticketing").attr("title",movies.FO.title);
	}, 'json');
		$("#Synopsis").fadeIn();
		$('html,body').animate({
			scrollTop: $("#Synopsis").offset().top},
			'slow');
    });
});

//Functions to change subtotal text based on number of tickets selected.
$(document).ready(function(){
	$("#SA").on('change', function(){
		$("#SAsub").text($("#SA").val());
		$("#SAsub").val($("#SA").val());
	});
});

$(document).ready(function(){
	$("#SP").on('change', function(){
		$("#SPsub").text($("#SP").val());
		$("#SPsub").val($("#SP").val());
	});
});

$(document).ready(function(){
	$("#SC").on('change', function(){
		$("#SCsub").text($("#SC").val());
		$("#SCsub").val($("#SC").val());
	});
});

$(document).ready(function(){
	$("#FA").on('change', function(){
		$("#FAsub").text($("#FA").val());
		$("#FAsub").val($("#FA").val());
	});
});

$(document).ready(function(){
	$("#FC").on('change', function(){
		$("#FCsub").text($("#FC").val());
		$("#FCsub").val($("#FC").val());
	});
});

$(document).ready(function(){
	$("#B1").on('change', function(){
		$("#B1sub").text($("#B1").val());
		$("#B1sub").val($("#B1").val());
	});
});

$(document).ready(function(){
	$("#B2").on('change', function(){
		$("#B2sub").text($("#B2").val());
		$("#B2sub").val($("#B2").val());
	});
});

$(document).ready(function(){
	$("#B3").on('change', function(){
		$("#B3sub").text($("#B3").val());
		$("#B3sub").val($("#B3").val());
	});
});

//Function to calculate total price.
$(document).ready(function(){
	$("#SA,#SP,#SC,#FA,#FC,#B1,#B2,#B3").on('change', function(){
		$("#SAquantity").val($("#SA option:selected").text());
		$("#SPquantity").val($("#SP option:selected").text());
		$("#SCquantity").val($("#SC option:selected").text());
		$("#FAquantity").val($("#FA option:selected").text());
		$("#FCquantity").val($("#FC option:selected").text());
		$("#B1quantity").val($("#B1 option:selected").text());
		$("#B2quantity").val($("#B2 option:selected").text());
		$("#B3quantity").val($("#B3 option:selected").text());
		
		var sum = parseFloat($("#SAsub").val())
		+ parseFloat($("#SP").val())
		+ parseFloat($("#SC").val())
		+ parseFloat($("#FA").val())
		+ parseFloat($("#FC").val())
		+ parseFloat($("#B1").val())
		+ parseFloat($("#B2").val())
		+ parseFloat($("#B3").val());
		$("#TotalPrice").text(sum);
		$("#TotalPrice").val(sum);
		var deci = ".00";
		$("#price").val(sum+deci);
	});
});

//Based on value of the "Buy tickets" button, determines film name and available days.
$(document).ready(function(){
	$(".Ticketing").on('click', function(){
		$("#FilmName").val($(this).attr('id'));
		var title = $(this).attr('title');
		
		if($("#FilmName").val()=="RC" || $("#FilmName").val()=="CH"){
			$("#FilmName").html(title);
			$(".SessionDay").find('option').remove().end();
			$(".SessionDay").append('<option value="">Select</option>');
			$(".SessionDay").append('<option value="Monday">Monday</option>');
			$(".SessionDay").append('<option value="Tuesday">Tuesday</option>');
			$(".SessionDay").append('<option value="Wednesday">Wednesday</option>');
			$(".SessionDay").append('<option value="Thursday">Thursday</option>');
			$(".SessionDay").append('<option value="Friday">Friday</option>');
			$(".SessionDay").append('<option value="Saturday">Saturday</option>');
			$(".SessionDay").append('<option value="Sunday">Sunday</option>');
		}
		if($("#FilmName").val()=="AF"){
			$("#FilmName").html(title);
			$(".SessionDay").find('option').remove().end();
			$(".SessionDay").append('<option value="">Select</option>');
			$(".SessionDay").append('<option value="Monday">Monday</option>');
			$(".SessionDay").append('<option value="Tuesday">Tuesday</option>');
			$(".SessionDay").append('<option value="Saturday">Saturday</option>');
			$(".SessionDay").append('<option value="Sunday">Sunday</option>');
		}
		if($("#FilmName").val()=="AC"){
			$("#FilmName").html(title);
			$(".SessionDay").find('option').remove().end();
			$(".SessionDay").append('<option value="">Select</option>');
			$(".SessionDay").append('<option value="Wednesday">Wednesday</option>');
			$(".SessionDay").append('<option value="Thursday">Thursday</option>');
			$(".SessionDay").append('<option value="Friday">Friday</option>');
			$(".SessionDay").append('<option value="Saturday">Saturday</option>');
			$(".SessionDay").append('<option value="Sunday">Sunday</option>');
		}
	});
});

//Function used to determine form calculations.
$(document).ready(function(){
	$(".SessionDay").on('change', function(){
		$(".SubCost").val("0");
		$(".SubCost").text("0");
		
		$(this).val();
		//Determine session times based on day selected.
		if($("#FilmName").val()=="AC"){
			if($(this).val()=="Wednesday" || $(this).val()=="Thursday" || $(this).val()=="Friday"){
				$(".SessionTime").val("9pm");
				$("#TimeDisplay").text("9pm");
			}
			if($(this).val()=="Saturday" || $(this).val()=="Sunday"){
				$(".SessionTime").val("9pm");
				$("#TimeDisplay").text("9pm");
			}
		}
		if($("#FilmName").val()=="CH"){
			if($(this).val()=="Monday" || $(this).val()=="Tuesday"){
				$(".SessionTime").val("1pm");
				$("#TimeDisplay").text("1pm");
			}
			if($(this).val()=="Wednesday" || $(this).val()=="Thursday" || $(this).val()=="Friday"){
				$(".SessionTime").val("6pm");
				$("#TimeDisplay").text("6pm");
			}
			if($(this).val()=="Saturday" || $(this).val()=="Sunday"){
				$(".SessionTime").val("12pm");
				$("#TimeDisplay").text("12pm");
			}
		}
		if($("#FilmName").val()=="AF"){
			if($(this).val()=="Monday" || $(this).val()=="Tuesday"){
				$(".SessionTime").val("6pm");
				$("#TimeDisplay").text("6pm");
			}
			if($(this).val()=="Saturday" || $(this).val()=="Sunday"){
				$(".SessionTime").val("3pm");
				$("#TimeDisplay").text("3pm");
			}
		}
		if($("#FilmName").val()=="RC"){
			if($(this).val()=="Monday" || $(this).val()=="Tuesday"){
				$(".SessionTime").val("9pm");
				$("#TimeDisplay").text("9pm");
			}
			if($(this).val()=="Wednesday" || $(this).val()=="Thursday" || $(this).val()=="Friday"){
				$(".SessionTime").val("1pm");
				$("#TimeDisplay").text("1pm");
			}
			if($(this).val()=="Saturday" || $(this).val()=="Sunday"){
				$(".SessionTime").val("6pm");
				$("#TimeDisplay").text("6pm");
			}
		}
		//Price calculations - if else function to determine whether price falls under cheap or expensive category.
		if($(this).val()=="Monday" || $(this).val()=="Tuesday" || $(".SessionTime").val()=="1pm"){
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
		}
		else{
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
//Close form function
$(document).ready(function(){
	$(".close").on('click', function(){
		window.history.back();
	});
});
//Movie page AJAX
$(document).ready(function(){
	$.post("http://titan.csit.rmit.edu.au/~e54061/wp/movie-service.php", function(movies){
		$("#Poster1").attr("src",movies.RC.poster);
		$("#Poster2").attr("src",movies.AC.poster);
		$("#Poster3").attr("src",movies.CH.poster);
		$("#Poster4").attr("src",movies.AF.poster);
	}, 'json');
});

