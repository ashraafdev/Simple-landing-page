<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <link rel='stylesheet' type='text/css' href='../CSS/iframes.css'>
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
  <div class="container" style="margin-top:25px">
	  <div class="row">
		  <div class="table-responsive table-bordered movie-table">
          <?php
          session_start();
          if($_SESSION['status'] == "" || $_SESSION['status'] == null) {        
                    
            echo '<script>alert("You Must to SignIn");</script>';
            echo '<script>location.href = "/win a macbook project/administrator/admin.php"</script>';

          } else {
            $num = 1;
            $db=mysqli_connect("localhost","root","","win_macbook");
            // Check connection
            if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            
            $result = mysqli_query($db,"SELECT * FROM admin");
            
            echo '<table class="table movie-table">
            <thead>
            <tr class="movie-table-head">
                <th>User Name</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
            </thead> ';
            
            while($row = mysqli_fetch_array($result))
            {
            if ( $num % 2 == 0) {
              echo '<tr class= "dark-row">';
              echo "<td>" . $row['username'] . "</td>";
              echo "<td>" . $row['password'] . "</td>";
              echo "<td><button type='button' class='btn btn-danger' onclick='addCookie(".'"'.$row['username'].'"'.")'>Delete</button></td>";
              echo "</tr>";
            } else {
              echo '<tr class= "light-row">';
              echo "<td>" . $row['username'] . "</td>";
              echo "<td>" . $row['password'] . "</td>";
              echo "<td><button type='button' class='btn btn-danger' onclick='addCookie(".'"'.$row['username'].'"'.")'>Delete</button></td>";
              echo "</tr>";
            }
              $num = $num + 1;
            }
            echo "</table>";
            
            mysqli_close($db); 
          }
          ?>      
      </div>
    </div>
    <div class="row" style="display:flex; justify-content: center; margin-top: 10px;">
      <button type="button" class="btn btn-primary col-sm-8 addAdmin" onclick='localStorage.setItem("moveToAddAdmin","True")'>Add New Admin</button>
    </div> 
  </div>
  <script src='../JS/admin-management.js'></script>
</body>
</html>