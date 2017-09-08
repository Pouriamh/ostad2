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

});
