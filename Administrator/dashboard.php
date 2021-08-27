<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Admin Panel</title>
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

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 20px;">
    <a class="navbar-brand">Administrator</a>
    <div class="collapse navbar-collapse">
      <div class="navbar-nav" style="width:100%">
        <a class="nav-item nav-link active" id='changeToData'>Collected Data</a>
        <a class="nav-item nav-link active" id='changeToUsers'>Users</a>    
        <a class="nav-item nav-link active ms-auto" style="margin-right: 10px;" id='logout'>Log Out</a>    
      </div>
    </div>
  </nav>
  <iframe id="Frame" src="files/iframes/home.php" height="4000px" width="100%" allowtransparency="true" frameborder="0">
    Sorry your browser does not support inline frames.
  </iframe>

  <script src='./files/JS/dashboard.js'></script>

  <?php
        session_start();
          if($_SESSION['status'] == "" || $_SESSION['status'] == null) {        
                    
            echo '<script>alert("You Must to SignIn");</script>';
            echo '<script>location.href = "/win a macbook project/administrator/admin.php"</script>';

          }
  ?>
</body>
</html>