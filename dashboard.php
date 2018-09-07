<?php
session_start();
  if (array_key_exists("id", $_COOKIE))
  {
        $pcreate=$_COOKIE['id'];
    }
    else 
    {
        header("Location: login.php");
        
    }
    ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <title>Dashboard</title>
</head>
<body>

 <div class="container" style="padding: 30px;">

  <div class="row float-right">
    <div class="col-md-2">
      <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Log out</a>

    </div>
  </div>
</div>
<div class="container" style="padding: 30px;">

  <div class="row">
    <div class="mx-auto" style="width: 400px;">
      <div class="row">
       
      <div class="col-md-4 options btn-primary font-weight-bold" onclick="window.location.href='rent-request.php'">
        <div class="mx-auto text-center" style="width: inherit;">
          New Rent Request
        </div>
      </div>
       <div class="col-md-4 options btn-primary font-weight-bold" onclick="window.location.href='your-requests.php'">
        <div class="mx-auto text-center" style="width: inherit;">
          Your Requests
        </div>
      </div>
       <div class="col-md-4 options btn-primary font-weight-bold" onclick="window.location.href='posted-reqs.php'">
        <div class="mx-auto text-center" style="width: inherit;">
          Posted Requests
        </div>
      </div>
       <div class="col-md-4 options btn-primary font-weight-bold" onclick="window.location.href='login.php'">
        <div class="mx-auto text-center" style="width: inherit;">
          Notifications
        </div>

      </div>
      <div class="col-md-4 options btn-primary font-weight-bold" onclick="window.location.href='login.php'">
        <div class="mx-auto text-center" style="width: inherit;">
          Buy Books
        </div>
        
      </div>
    
    </div>
  </div>
</div>

</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>