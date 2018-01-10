<table class="table table-hover">
  <thead>
    <tr>
      <th>id</th>
      <th>Author</th>
      <th>Title</th>
      <th>catagories</th>
      <th>state</th>
      <th>Image</th>
      <th>tage</th>
      <th>Comment</th>
      <th>Date</th>
      <th>Delete</th>
      <th>Update</th>
    </tr>
  </thead>
  <tbody>
    <?php
    /*
      $query = "SELECT * FROM posts";
      $query_Run=mysqli_query($conn, $query);
      while ($row = mysqli_fetch_assoc($query_Run)) {
      $post_id = $row['post_id'];
      $post_author = $row['post_author'];
      $post_title = $row['post_title'];
      $post_catagories = $row['post_catagory_id'];
      $post_state = $row['post_state'];
      $post_image = $row['post_image'];
      $post_tage = $row['post_tage'];
      $post_comment_count = $row['post_comment_count'];
      $post_date = $row['post_date'];
      echo "<tr>";
      echo "<td>$post_id</td>";
      echo "<td>{$post_author}</td>";
      echo "<td>{$post_title}</td>";
      echo "<td>{$post_catagories}</td>";
      echo "<td>{$post_state}</td>";
      echo "<td><img width='100px' src='../images/{$post_image}' alt=''></td>";
      echo "<td>{$post_tage}</td>";
      echo "<td>{$post_comment_count}</td>";
      echo "<td>{$post_date}</td>";
      echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}' class='btn btn-warning'>Edit</a></td>";
      echo "<td><a href='posts.php?delete={$post_id}' class='btn btn-danger'>Delete</a></td>";
      echo "</tr>";
    }*/
    ?>
              </tbody>
            </table>
