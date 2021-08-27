<?php

session_start();

if(isset($_POST['username']) && isset($_POST['password'])) {

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "win_macbook";

  $db = mysqli_connect($servername, $username, $password, $dbname)
          or die('could not connect to database');

  $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
  $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));

  if ($username == "") {

    echo '<script>alert("Please fill User Name Box")</script>';
    echo '<script>location.href = "/win a macbook project/administrator/admin.php"</script>';
    
  } else {

    if ($password == "") {

      echo '<script>alert("Please fill Password Box")</script>';
      echo '<script>location.href = "/win a macbook project/administrator/admin.php"</script>';

    } else {
      $sql = "SELECT count(*) FROM admin WHERE username='".$username."' AND password='".$password."'";

      $exec_request = mysqli_query($db,$sql);

      $reponse = mysqli_fetch_array($exec_request);

      $count = $reponse['count(*)'];

      if ( $count != 0 ) {

        $_SESSION['status'] = "trueSignin";
        echo '<script>location.href = "/win a macbook project/administrator/dashboard.php"</script>';

      } else {

        echo '<script>alert("Password or Username is incorrect");</script>';
        echo '<script>location.href = "/win a macbook project/administrator/admin.php"</script>';
      }
    }      
  }
}

mysqli_close($db);
?>