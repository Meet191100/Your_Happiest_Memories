<?php 
session_start();
  $conn = mysqli_connect('localhost', 'root', '', 'login1');
  if (!$conn) {
    die('Connection failed ' . mysqli_error($conn));
  }
  $user = $_SESSION['id'];
  
	$query = mysqli_query($conn,"select * from signin where username='$user' ");
	$row = mysqli_fetch_array($query);
	$idd=$row["id"];

  if (isset($_POST['save'])) {
     echo"<script>alert('Your Data has been Saved...! If You Want to change the data then press edit button and Scroll Down to form.')</script>";
	$name = $_POST['name'];
    $place = $_POST['place']; 
    $date1 = $_POST['date1'];
  	$comment = $_POST['comment'];
  	$sql = "INSERT INTO post (name, place, date1, comment ,user_id ) VALUES ('{$name}', '{$place}', '{$date1}', '{$comment}' ,'{$idd}'   )";
  	if (mysqli_query($conn, $sql)) {
  	  $id = mysqli_insert_id($conn);
      $saved_comment = '<div class="comment_box">
      		<span class="delete" data-id="' . $id . '" >delete</span>
      		<span class="edit" data-id="' . $id . '">edit</span>
      		<div class="display_name">'. $name .'</div>
          <div class="display_place">'. $place .'</div>
          <div class="display_date1">'. $date1 .'</div>
      		<div class="comment_text">'. $comment .'</div>
      	</div>';
  	  echo $saved_comment;
  	}else {
  	  echo "Error: ". mysqli_error($conn);
  	}
  	exit();
  }
  // delete comment fromd database
  if (isset($_GET['delete'])) {
  	$id = $_GET['id'];
  	$sql = "DELETE FROM post WHERE id=" . $id;
  	mysqli_query($conn, $sql);
  	exit();
  }
  if (isset($_POST['update'])) {
     echo"<script>alert('Your Data has been Updated...!')</script>";
  	$id = $_POST['id'];
  	$name = $_POST['name'];
    $place = $_POST['place'];
    $date1 = $_POST['date1'];
  	$comment = $_POST['comment'];
  	$sql = "UPDATE post SET name='{$name}', place='{$place}', date1='{$date1}', comment='{$comment}' WHERE id=".$id;
  	if (mysqli_query($conn, $sql)) {
  		$id = mysqli_insert_id($conn);
  		$saved_comment = '<div class="comment_box">
  		  <span class="delete" data-id="' . $id . '" >delete</span>
  		  <span class="edit" data-id="' . $id . '">edit</span>
  		  <div class="display_name">'. $name .'</div>
        <div class="display_place">'. $place .'</div>
        <div class="display_date1">'. $date1 .'</div>
  		  <div class="comment_text">'. $comment .'</div>
  	  </div>';
  	  echo $saved_comment;
  	}else {
  	  echo "Error: ". mysqli_error($conn);
  	}
  	exit();
  }

  // Retrieve comments from database
  $sql = "SELECT * FROM post where user_id=".$idd;
  $result = mysqli_query($conn, $sql);
  $comments = '<div id="display_area">'; 
  while ($row = mysqli_fetch_array($result)) {
  	$comments .= '<div class="comment_box">
  		  <span class="delete" data-id="' . $row['id'] . '" >delete</span>
  		  <span class="edit"  data-id="' . $row['id'] . '">edit</span>
  		  <div class="display_name">'. $row['name'] .'</div>
        <div class="display_place">'. $row['place'] .'</div>
        <div class="display_date1">'. $row['date1'] .'</div>
  		  <div class="comment_text">'. $row['comment'] .'</div>
  	  </div>';
  }
  $comments .= '</div>';
?>