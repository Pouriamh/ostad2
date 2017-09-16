$(document).ready(function() {

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
/*
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
*/

// Filter checkboxes
/*
$('#phrase-box').on('click', function() {
  var status = document.getElementById('phrase-box').checked;
  var type = (this.dataset.type);

  if (status == true) {

    $type = type;
    $.ajax({
      type : 'get',
      url : 'filter',
      data : {'type':$type},
      success : function(data){
        $('#media-results').html(data);
      }
    })
  } else {

  }
});
*/

// Reset button shows all audio files
$('#show-all').on('click', function() {

  $.ajax({
    type : 'get',
    url : 'show-all',
    data : {},
    success : function(data){
      $('#media-results').html(data);
    }
  })
});

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

// **************** FROM HERE UP IS WORKING PROPERLY *****************

// ************************** TESTING BELOW **************************

// Click on song
$('#search-results').on('click', '.search-result', function() {
// Define variables
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

  $('.search-result').removeClass('selected');
  $(this).addClass('selected');

// If no checkboxes are checked
  if (!$('.filter-checkbox').is(':checked')) {
    var checked = "nope";
    console.log(checked);
// Make ajax call for all of the song's audio files
    $.ajax({
      type : 'get',
      url : 'audio-file',
      data : {'song':$song_id},
      success : function(data){
        $('#media-results').html(data);
      }
    })
// Otherwise, if there are checkboxes checked before you clicked on a song
  } else {


// WORKING:
//     $('.filter-checkbox:checked').each(function() {
//       var type = $(this).val();
//    var type = $('.filter-checkbox:checked').map(function() { return $(this).val() }).get();
    var type = $('.filter-checkbox:checked').map(function() { return $(this).val() }).get();

      $type = type;
      console.log($type);
// Make ajax call for song's audio files crossed with any checked filters
      $.ajax({
        type : 'get',
        url : 'filter',
        data : {'song':$song_id,'type':$type},
        success : function(data){
          $('#media-results').html(data);
        }
      })
    }
  });







});
