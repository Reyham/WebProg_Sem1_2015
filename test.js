//Based on value of the "Buy tickets" button, determines film name and available days.
$(document).ready(function(){
	$(".Ticketing").on('click', functions(){
		$("#FilmName").val($(this).val());
		if($("FilmName").val()=="RC" || $("FilmName").val()=="RC"){
			$("#FilmName").text($(this).val());
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
		if($("FilmName").val()=="AF"){
			$("#FilmName").text($(this).val());
			$(".SessionDay").find('option').remove().end();
			$(".SessionDay").append('<option value="">Select</option>');
			$(".SessionDay").append('<option value="Monday">Monday</option>');
			$(".SessionDay").append('<option value="Tuesday">Tuesday</option>');
			$(".SessionDay").append('<option value="Saturday">Saturday</option>');
			$(".SessionDay").append('<option value="Sunday">Sunday</option>');
		}
		if($("FilmName").val()=="AC"){
			$("#FilmName").text($(this).val());
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