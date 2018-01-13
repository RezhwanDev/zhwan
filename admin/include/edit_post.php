<?php
if (isset($_GET['p_id'])) {
$edit_post_id=$_GET['p_id'];
    $query = "SELECT * FROM posts WHERE post_id={$edit_post_id}";
    $edit_post_by_id=mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($edit_post_by_id)) {
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title = $row['post_title'];
    $post_catagories = $row['post_catagory_id'];
    $post_state = $row['post_state'];
    $post_image = $row['post_image'];
    $post_tage = $row['post_tage'];
    $post_comment_count = $row['post_comment_count'];
    $post_date = $row['post_date'];
    $post_content = $row['post_content'];
  }
  }
  if (isset($_POST['update_post'])) {

  }
?>

 <form class="" action="addPost.php" method="post" enctype="multipart/form-data">
         <div class="form-group">
           <label for="tilte">Add title</label>
           <input value="<?php echo $post_title; ?>"type="text" class="form-control" name="tilte" id="" placeholder="">
         </div>
         <div class="form-group">
           <label for="tilte">Add Catagoires</label>
           <input value="<?php echo $post_catagories; ?>" type="text" class="form-control" name="post_catagory_id" id="" placeholder="">
         </div>
         <div class="form-group">
           <label for="author">Add Author</label>
           <input value="<?php echo $post_author; ?>" type="text" class="form-control" name="author" id="" placeholder="">
         </div>
         <div class="form-group">
           <label for="state">Add State</label>
           <input value="<?php echo $post_state; ?>" type="text" class="form-control" name="post_state" id="" placeholder="">
         </div>
         <img src="../images/<?php echo $post_image; ?>" width="120px" alt="">
         <div class="form-group">

          <label for="">Images</label>
           <input class="btn btn-warning" type="file"  name="image"  id="" placeholder="">
         </div>
         <div class="form-group">
           <label for="tage">Add Tage</label>
           <input value="<?php echo $post_tage; ?>" type="text" class="form-control" name="tage" id="" placeholder="">
         </div>
         <div class="form-group">
           <label for="content">Add Content</label>
           <textarea value="<?php echo $post_content; ?>" class="form-control" name="post_content" rows="10" cols="30"></textarea>
         </div>

         <input class="btn btn-primary"type="submit" name="update_post" value="Publish">
</form>
