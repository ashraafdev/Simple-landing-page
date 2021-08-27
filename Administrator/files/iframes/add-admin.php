<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
  <style type="text/css">
    body {
        font-family: 'IBM Plex Mono', monospace;
    }
  </style>
</head>
<body>
  <form action="" method="POST" style="margin-left: 10px;">
    <div class="form-group row" style="margin-top: 25px;">
      <label for="staticEmail" class="col-sm-2 col-form-label" style="margin-left: 10px;">User Name</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="staticEmail" name="UsrName" placeholder="User Name">
      </div>
    </div>
    <div class="form-group row" style="margin-top: 10px;">
      <label for="inputPassword" class="col-sm-2 col-form-label" style="margin-left: 10px;">Password</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" id="inputPassword" name="Password" placeholder="Password">
      </div>
    </div>
    <div class="form-group" style="display:flex; justify-content: center; margin-top: 10px;">
      <button class="btn btn-primary">Save</button>
    </div>
  </form>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "win_macbook";

      $db = mysqli_connect($servername, $username, $password, $dbname);

      // Check connection
      if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

      if(isset($_POST['UsrName']) && isset($_POST['Password'])) { 

        $usrname = $_POST['UsrName'];
        $password = $_POST['Password'];

        if ($username == "" && $password !== "") {

            echo '<script>alert("Please fill User Name Box")</script>';

        } else if ($username === "" && $password === "" ) {

            echo '<script>alert("Please fill all The Boxes")</script>';

        } else if ($username !== "" && $password === "" ) {

          echo '<script>alert("Please fill Password Box")</script>';

        } else {

          $sql = "INSERT INTO admin (username, password) VALUES ('$usrname', '$password')";
          mysqli_query($db,$sql);
          echo '<script>alert("Done");</script>';

        }

      }
    ?>
</body>
</html>