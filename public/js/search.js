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
// *******************************************************************
// *******************************************************************
// *******************************************************************
// ************************** TESTING BELOW **************************




// // Click on song
// $('#search-results').on('click', '.search-result', function() {
//
//   var id = (this.dataset.id);
//   var song = (this.dataset.song);
//   var album = (this.dataset.album);
//   var track = (this.dataset.track);
//   var image = (this.dataset.image);
//
//   $('#info-song').html(song);
//   $('#info-album').html(album);
//   $('#info-track').html('#'+track);
//   $('#info-image').attr('src', 'images/'+image);
//
//   $song_id = id;
//
//   if (!$(this).hasClass('selected')) {
//     $('.search-result').removeClass('selected');
//     $(this).addClass('selected');
//   }
//
// // If no checkboxes are checked
//   if (!$('.filter-checkbox').is(':checked')) {
//     console.log("no boxes checked");
// // Make ajax call for all of the song's audio files
//     $.ajax({
//       type : 'get',
//       url : 'audio-file',
//       data : {'song':$song_id},
//       success : function(data){
//         $('#media-results').html(data);
//       }
//     })
// // Otherwise, if there were checkboxes checked before you clicked on a song
//   } else {
//
//
// // WORKING:
// //     $('.filter-checkbox:checked').each(function() {
// //       var type = $(this).val();
//
//     var type = $('.filter-checkbox:checked').map(function() { return $(this).val() }).get();
//
//       $type = type;
//       console.log($type);
// // Make ajax call for song's audio files crossed with any checked filters
//       $.ajax({
//         type : 'get',
//         url : 'filter',
//         data : {'song':$song_id,'type':$type},
//         success : function(data){
//           $('#media-results').html(data);
//         }
//       })
//     }
//   });
//
//
// /////////////////////////////////
// /////////////////////////////////
//
//
// Filter via .show and .hide
// When you click a checkbox
  $('#checkbox-row').on('click', '.filter-checkbox', function() {
// If there are no checkboxes checked, show all available audio files
    if (!$('.filter-checkbox').is(':checked')) {
      $('.audio-file').show();
    }
// Get the value of any checkbox that's checked
    var type = $('.filter-checkbox:checked').map(function() { return $(this).val() }).get();

    $type = type;

    var length = type.length;
    // console.log(length);
    // console.log(type[0]);
    // console.log(type[1]);
    $('.audio-file').hide();
    for (i = 0; i < type.length; i++) {
    $('.audio-file[data-type='+type[i]+']').show();
    }
    // $('.audio-file[data-type!='+type+']').hide();
    // $('.audio-file[data-type='+type+']').show();





  //   $('.filter-checkbox:checked').each(function() {
  //      var type = $(this).val();
  //   if (type == 'phrase') {
  //     console.log(type);
  //      $('.audio-file[data-type="phrase"],.audio-file[data-type="sentence"]').hide();
  //    }
  //  });




    // $('.filter-checkbox:checked').each(function() {
    //   var type = $(this).val();
    //   console.log(type);
    //   $('.audio-file[data-type!=type]').hide();
    //   $('.audio-file[data-type=type]').show();
// If it's phrase, hide all others, then show phrase
      // if (type == 'phrase') {
      //   $('.audio-file[data-type!="phrase"]').hide();
      //   $('.audio-file[data-type="phrase"]').show();
      // }
      // if (type == 'sentence') {
      //
      // // }
      //
      //
      // });
    });








//
//
// // When you click on a filter checkbox
// $('#checkbox-row').on('click', '.filter-checkbox', function() {
//
// // Array of checkbox values stored in "type" variable
//   var type = $('.filter-checkbox:checked').map(function() { return $(this).val() }).get();
// // If there's no box checked
//   if ((type.length) == 0) {
// // The variable includes all options
//     type = ['paragraph', 'sentence', 'phrase', 'motif', 'plucking', 'etc'];
// // Else, variable includes only currently selected boxes
//   } else {
//     type = $('.filter-checkbox:checked').map(function() { return $(this).val() }).get();
//   }
//   $type = type;
//   console.log(type);
//
// // If no songs are selected
//   if (!$('.search-result').hasClass('selected')) {
// // Make ajax call for all of the checkbox's audio files
//     $.ajax({
//       type : 'get',
//       url : 'audio-file',
//       data : {'type':$type},
//       success : function(data){
//         $('#media-results').html(data);
//       }
//     })
// // Otherwise, if there were songs selected before you checked a box
//   } else if ($('.search-result').hasClass('selected')) {
// // Get the selected song's dataset id
//     var song_id = $('.search-result.selected').data('id');
//     console.log(song_id);
//     $song_id = song_id;
// // Make ajax call for checkbox's audio files crossed with selected song
//     $.ajax({
//       type : 'get',
//       url : 'filter2',
//       data : {'song_id':$song_id, 'type':$type},
//       success : function(data){
//         $('#media-results').html(data);
//       }
//     })
//   }
// });
//
//






});
