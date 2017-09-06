$(document).ready(function () {

$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

$('#down-arrow-container').mouseenter(function () {
  $('#down-arrow > circle').addClass('arrow-circle-fade');
  $('#down-arrow > polyline').addClass('arrow-fade');
  $('#down-arrow-container').mouseleave(function () {
    $('#down-arrow > circle').removeClass('arrow-circle-fade');
    $('#down-arrow > polyline').removeClass('arrow-fade');
  });
});



});
