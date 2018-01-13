<?php

  if (isset($_POST['create_post'])) {

  $post_title =$_POST['tilte'];
  $post_author =$_POST['author'];
  $post_cat =$_POST['post_catagory_id'];
  $post_stat =$_POST['post_state'];

  $post_image     =$_FILES['image']['name'];
  $post_image_temp=$_FILES['image']['name'];

  $post_tage =$_POST['tage'];
  $post_content =$_POST['post_content'];
  $post_date =date('d-m-y');
  $post_comment_count =4;

  move_uploaded_file($post_image_temp,"../images/$post_image");

  $sql="INSERT INTO posts (post_title, post_author, post_tage,post_state,post_content,post_date,post_image)
  VALUES ('$post_title', '$post_author', '$post_tage','$post_stat','$post_content',now(),'$post_image')";
  echo "<div class='alert alert-success' role='alert'>One Recoed Added</div>";

  if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($conn));
  }
  mysqli_close($conn);
  } 

?>


 <form   action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
         <div class="form-group">
           <label for="tilte">Add title</label>
           <input type="text" class="form-control" name="tilte" id="" placeholder="">
         </div>
         <div class="form-group">
           <label for="tilte">Add Catagoires</label>
           <input  type="text" class="form-control" name="post_catagory_id" id="" placeholder="">
         </div>
         <div class="form-group">
           <label for="author">Add Author</label>
           <input  type="text" class="form-control" name="author" id="" placeholder="">
         </div>
         <div class="form-group">
           <label for="state">Add State</label>
           <input  type="text" class="form-control" name="post_state" id="" placeholder="">
         </div>
         <div class="form-group">
           <label for="post_image">Add Image</label>
           <input  type="file"  name="image"  id="" placeholder="">
         </div>
         <div class="form-group">
           <label for="tage">Add Tage</label>
           <input  type="text" class="form-control" name="tage" id="" placeholder="">
         </div>
         <div class="form-group">
           <label for="content">Add Content</label>
           <textarea  class="form-control" name="post_content" rows="10" cols="30"></textarea>
         </div>

         <input class="btn btn-primary"type="submit" name="create_post" value="Publish">
</form>


<?php
  if (isset($_GET['delete'])) {
  $deletepost=$_GET['delete'];
  $dquery="DELETE FROM posts WHERE post_id={$deletepost}";
  $dquery_run=mysqli_query($conn,$dquery);
  if (!$dquery_run) {
  echo "<h1>Delte Query Problrm</h1>";
  }
  header("Location: posts.php");
  }
?>
