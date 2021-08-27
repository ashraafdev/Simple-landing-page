<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <link rel='stylesheet' type='text/css' href='CSS/form.css'>
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
  <form action="sendData.php" method="POST">
    <div class="container">
      <div class="row">
        <div class="col">First Name</div>
        <div class="col"><input id="frstName_box" name='F_Name' type="text" class="form-control" placeholder="First Name"></div>
      </div>
        <div class="w-50"></div>
      <div class="row">
        <div class="col">Last Name</div>
        <div class="col"><input id="lstName_box" name='L_Name' type="text" class="form-control" placeholder="Last Name"></div>
      </div>
        <div class="w-50"></div>
      <div class="row">
        <div class="col">E-Mail</div>
        <div class="col"><input id="eMail_box" name='EMail' type="text" class="form-control" placeholder="E-Mail"></div>
      </div>
        <div class="w-50"></div>
      <div class="row">
        <div class="col">Phone Number</div>
        <div class="col"><input id="phone_box" name='Phone_Num' type="text" class="form-control" placeholder="Phone Number"></div>
      </div>
        <div class="w-50"></div>
      <div class="row">
        <div class="col centred-div"><input name="sendData" type="submit" class="btn btn-success" value="Done"></div>
        <div class="col centred-div"><button id='reset' type="button" class="btn btn-warning" onclick="resetAllBoxes()">Reset</button></div>
      </div>
    </div>
  </form>
  <script src='JS/form.js'></script>
</body>
</html>