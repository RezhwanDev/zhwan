<?php
function addCat(){
  global $conn;
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['submit'])) {
    $cat_titles =$_POST['cat_titles'];
    if ($cat_titles =="" || empty($cat_titles)) {
      echo "Must not Leave Fild Blank";
    }
    else {
      $querys ="INSERT INTO categores (cat_title) VALUES ('$cat_titles')";
      $query_run=mysqli_query($conn, $querys);
      if (!$query_run) {
      die("INSERT Catagories fail".mysqli_error($conn));
  }
  }
    header('Location: catagoires.php');
  }
  }
}// End OF Add Cat Function
/* End Of Add Cat*/
function showCat(){
  global $conn;
  $query = "SELECT * FROM categores";
  $query_title=mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($query_title)) {
  $cat_title = $row['cat_title'];
  $cat_id = $row['cat_id'];
  echo "<tr>";
  echo "<td>{$cat_id}</td>";
  echo "<td>{$cat_title}</td>";
  echo "<td><a href='./catagoires.php?delete={$cat_id}' class='btn btn-danger'>Delete</a></td>";
  echo "<td><a href='./catagoires.php?update={$cat_id}' class='btn btn-warning'>Update</a></td>";
  echo "</tr>";
  }
}// End Of Showcat
/* End Of Show Cat*/
function deleteCat(){
  if (isset($_GET['delete'])) {
  global $conn;
  $deletecat=$_GET['delete'];
  $dquery="DELETE FROM categores WHERE cat_id={$deletecat}";
  $dquery_run=mysqli_query($conn,$dquery);
  if (!$dquery_run) {
    echo "<h1>Delte Query Problrm</h1>";
  }
  header("Location: catagoires.php");
  }
 }
/* End Of delete Cat*/

?>
