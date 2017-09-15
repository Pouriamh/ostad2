$(document).ready(function() {

$('#search').on('keyup', function() {
  $value=$(this).val();
  $.ajax({
    type : 'get',
    url : 'search',
    data : {'search':$value},
    success : function(data){
      $('#search-results').html(data);
    }

  })

});

  $('#search-results').on('click', '.search-result', function() {

    var id = (this.dataset.id);
    var song = (this.dataset.song);
    var album = (this.dataset.album);
    var track = (this.dataset.track);
    var image = (this.dataset.image);

    $('#info-song').html(song);
    $('#info-album').html(album);
    $('#info-track').html('#'+track);
    $('#info-image').attr('src', 'images/'+image);



});


});
