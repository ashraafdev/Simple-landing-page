<?php 
  $usrname = $_COOKIE["username"];

  $db=mysqli_connect("localhost","root","","win_macbook");

  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    
  } else {
    
    $sql_request = "DELETE FROM admin WHERE username='$usrname'";

    if(mysqli_query($db, $sql_request)) {
      
      echo "<script>alert('Done');</script>";
      mysqli_close($db);
      echo "<script>location.href='admins-management.php';</script>";

    } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
  }

?>
