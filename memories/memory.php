<?php 

include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Your Memories</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="hole">

    <div class="btnt" >
         <a href="#from" style="text-decoration: none; color:white; " class="meet">ADD MEMORY</a>
    </div>
  <div class="wrapper" id="form">
  	<?php echo $comments; ?>
    <div class="meet" id="from">
  	<form class="comment_form" >
      <div>
        <p id="msg" class="text-dark" style="color: red; font-weight: bold;"></p>
        
          <label for="name" class="tytl" >Name Of Your Memory:</label>
        <input type="text" name="name" id="name" required>
        </div>     

       <div>
        <label for="place" class="tytl" >Place:</label>
        <input type="text" name="place" id="place" required>
        </div>    

        <div>
        <label for="date" class="tytl" >Date:</label required>
        <input type="date" name="date1" id="date1">
        </div>     

      <div>
      	<label for="comment" class="tytl">Description Of Your Memory:</label required>
      	<textarea name="comment" id="comment" cols="30" rows="5" placeholder="eg 1. Description enter 2. Description"></textarea>
      </div>
      <button type="button" name="submit" id="submit_btn">ADD NOW</button>
      <button type="button" id="update_btn" style="display: none;">UPDATE</button>
  	</form>
    
  </div>
</div>
</body>
</html>
<!-- Add JQuery -->
<script src="jquery.js"></script>
<script src="scripts.js"></script>