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
date_default_timezone_set('Asia/Kolkata');

/**
 * Created by PhpStorm.
 * User: blackbeard
 * Date: 5/9/18
 * Time: 1:27 AM
 */
 $name=$_GET["book"];
  $auth=$_GET["auth"];
  $price=$_GET["price"];
  $time=$_GET["time"];
  $req=$_GET["requester"];
include 'conn.php';
$notification="Your post for the book ".$name." has been responded by ".$pcreate;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $price1=mysqli_real_escape_string($link, $_POST['price']);
  $time2=mysqli_real_escape_string($link, $_POST['time']);
  $today = date("Y-m-d H:i:s");
  $name=$_GET["book"];
  $auth=$_GET["auth"];
  $price=$_GET["price"];
  $time=$_GET["time"];
  $req=$_GET["requester"];
  $query = "insert into `RESPONSE` (`requester`,`responder`,`book_name`,`price`,`time_span`,`time`) VALUES ('$req', '$pcreate', '$name','$price1','$time2','$today')";
  if(!mysqli_query($link, $query))
  {
    echo "Error".mysqli_error($link)."<br>";

}
else{
    $query = "insert into `NOTIFICATIONS` (`handle`,`notification`,`time`) VALUES ('$req', '$notification','$today')";
    if(!mysqli_query($link, $query))
    {
      echo "Error".mysqli_error($link)."<br>";

 }
 header("Location: dashboard.php");
}
}

?>
<!doctype html>
<html lang="en">
<head>
  <title>Request to rent</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <form method="POST" action="respond.php?<?php $pr='requester='.$req.'&book='.$name;echo $pr;?>">
      <div class="form-row">
        <div class="form-group col-md-12">
          <h5>Book Name:<?php echo $name;?></h5>
          <br><br>
          <h5>Book Author:<?php echo $auth;?></h5>
          <br><br>
          <h5>Book Author:<?php echo $price;?></h5>
          <br><br>
          <h5>Book Author:<?php echo $time;?></h5>
          <br><br>
     </div>

     <div class="form-group col-md-6">
          <label for="inputPrice">Enter your price. Type the requested price if same.</label>
          <input type="text" class="form-control" id="inputPrice4" placeholder="200" name="price">
     </div>
     <div class="form-group col-md-6">
          <label for="inputTime">Enter your Time Span. Type the requested Time span if same.</label>
          <input type="number" class="form-control" id="inputTime" name="time">
     </div>







     <button type="submit" class="btn btn-primary">Respond</button>
</form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="passconf.js"></script>
</body>
</html>