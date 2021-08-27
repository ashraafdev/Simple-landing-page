<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <link rel='stylesheet' type='text/css' href='./files/CSS/admin.css'>
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
  
<div id="content" class="flex">
    <div class="">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><strong>ADMINISTRATOR</strong></div>
                            <div class="card-body">
                                <form action="files/iframes/checkAdmin.php" method="POST">
                                    <div class="form-group"><label class="text-muted" for="exampleInputEmail1">User Name</label><input type="text" class="form-control" name="username" placeholder="Enter User Name"></div>
                                    <div class="form-group" style="margin-top: 7.5px;"><label class="text-muted" for="exampleInputPassword1">Password</label><input type="password" class="form-control" name="password" placeholder="Enter Password"></div>
                                    <div class="form-group" style="margin-top: 10px;"></div> 
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>