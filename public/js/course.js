$(document).ready(function() {

  $('.course-link').each(function() {
    if ($(this).hasClass('course-status-0')) {
      $(this).html('Locked');
    } else if ($(this).hasClass('course-status-1')) {
      $(this).html('Continue');
    } else if ($(this).hasClass('course-status-2')) {
      $(this).html('Complete');
    }
  });

});
