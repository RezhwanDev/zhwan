<?php

function validate($data){
global $conn;
return mysqli_real_escape_string ($conn, trim($data));
}


 ?>
