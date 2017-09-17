$(document).ready(function() {

  // Hide search area

  $('#hide-button').on('click', function() {
    if ($(this).hasClass('btn-danger')) {
      $('#search-left-column').hide(200);
      $('#search-middle-column').hide(200);
      $('#search-right-column').hide(200);
      $('#search-section').css({'background-color': '#fff', 'border': 'none'});
      $(this).removeClass('btn-danger');
      $(this).addClass('btn-success');
      $(this).html('Show');
    } else {
      $('#search-left-column').show(200);
      $('#search-middle-column').show(200);
      $('#search-right-column').show(200);
      $('#search-section').css({'background-color': '#f2f2f2', 'border': '1px solid rgba(0,0,0,.15)'});
      $(this).removeClass('btn-success');
      $(this).addClass('btn-danger');
      $(this).html('Hide');
    }

  });


// Input from search field finds matches from DB

$('#search').on('keyup', function() {

  $value=$(this).val();
  $.ajax({
    type : 'get',
    url : 'search',
    data : {'input':$value},
    success : function(data){
      $('#search-results').html(data);
    }
  })
});


// Clicking on song affects info fields and displays related audio files

$('#search-results').on('click', '.search-result', function() {
  $('.search-result').removeClass('selected');
  $(this).addClass('selected');
  var id = (this.dataset.id);
  var song = (this.dataset.song);
  var album = (this.dataset.album);
  var track = (this.dataset.track);
  var image = (this.dataset.image);

  $('#info-song').html(song);
  $('#info-album').html(album);
  $('#info-track').html('#'+track);
  $('#info-image').attr('src', 'images/'+image);

  $song_id = id;
  $.ajax({
    type : 'get',
    url : 'audio-file',
    data : {'song':$song_id},
    success : function(data){
      $('#media-results').html(data);
    }
  })
});


// Filter with checkboxes

/// FIX THIS TO MAKE SURE THAT IF NO CHECKBOXES ARE CHECKED, IT DISPLAYS ALL AUDIO

  $('#checkbox-row').on('click', '.filter-checkbox', function() {
    if (!$('.filter-checkbox').is(':checked')) {
      $('.audio-file').show();
    }
    var type = $('.filter-checkbox:checked').map(function() { return $(this).val() }).get();
    $type = type;
    var length = type.length;
    $('.audio-file').hide();
    for (i = 0; i < type.length; i++) {
    $('.audio-file[data-type='+type[i]+']').show();
    }
  });


  // Reset button shows all audio files

  $('#show-all').on('click', function() {
    $('.search-result').removeClass('selected');
    $.ajax({
      type : 'get',
      url : 'show-all',
      data : {},
      success : function(data){
        $('#media-results').html(data);
      }
    })
  });


});
