

$(document).ready(function(){
  // save comment to database
  $(document).on('click', '#submit_btn', function(){
    var name = $('#name').val();
    var place = $('#place').val();
    var date1 = $('#date1').val();
    var comment = $('#comment').val();

    if(name== "" || place=="" || date1== "" || comment== "" )
    {
      $('#msg').html('Please fill in the Blanks...!');  
    }

    else
    {
      $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'name': name,
        'place':place,
        'date1':date1,
        'comment': comment,
      },
      success: function(response){
        $('#name').val('');
        $('#place').val('');
        $('#date1').val('');
        $('#comment').val('');
        $('#display_area').append(response);
      }
    });
    
    }
  });



  // delete from database
  $(document).on('click', '.delete', function(){
  	var id = $(this).data('id');
  	$clicked_btn = $(this);
  	$.ajax({
  	  url: 'server.php',
  	  type: 'GET',
  	  data: {
    	'delete': 1,
    	'id': id,
      },
      success: function(response){
        // remove the deleted comment
        $clicked_btn.parent().remove();
        $('#name').val('');
        $('#place').val('');
        $('#date1').val('');
        $('#comment').val('');


      }
  	});
  });


  var edit_id;
  var $edit_comment;
  $(document).on('click', '.edit', function(){
  	edit_id = $(this).data('id');
  	$edit_comment = $(this).parent();
  	// grab the comment to be editted
  	var name = $(this).siblings('.display_name').text();
    var place = $(this).siblings('.display_place').text();
    var date1 = $(this).siblings('.display_date1').text();
  	var comment = $(this).siblings('.comment_text').text();
  	// place comment in form
  	$('#name').val(name);
    $('#place').val(place);
    $('#date1').val(date1);
  	$('#comment').val(comment);
  	$('#submit_btn').hide();
  	$('#update_btn').show();
  });
  
  $(document).on('click', '#update_btn', function(){
  	var id = edit_id;
  	var name = $('#name').val();
    var place = $('#place').val();
    var date1 = $('#date1').val();
  	var comment = $('#comment').val();
    if(name== "" || place=="" || date1== "" || comment== "" )
    {
      $('#msg').html('Please fill in the Blanks...!');  
    }
    else
    {
      $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'update': 1,
        'id': id,
        'name': name,
        'place': place,
        'date1': date1,
        'comment': comment,
      },
      success: function(response){
        $('#name').val('');
        $('#place').val('');
        $('#date1').val('');
        $('#comment').val('');
        $('#submit_btn').show();
        $('#update_btn').hide();
        $edit_comment.replaceWith(response);
      }
    });   
    }
  });
});

