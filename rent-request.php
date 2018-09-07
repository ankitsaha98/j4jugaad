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
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name=mysqli_real_escape_string($link, $_POST['bookn']);
    $auth=mysqli_real_escape_string($link, $_POST['auth']);
    $pubs=mysqli_real_escape_string($link, $_POST['pubs']);
    $price=mysqli_real_escape_string($link, $_POST['price']);
    $time=mysqli_real_escape_string($link, $_POST['time']);
    $today = date("Y-m-d H:i:s");
    $query = "insert into `REQUESTS` (`requester`,`book_name`,`author`,`publisher`,`price`,`time_span`,`time`) VALUES ('$pcreate', '$name', '$auth','$pubs','$price','$time','$today')";
    if(!mysqli_query($link, $query))
        {
            echo "Error".mysqli_error($link)."<br>";

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
    <form method="POST" action="rent-request.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          
    <div class="form-group col-md-6">
      <label for="inputbookname">Book Name</label>
      <input type="text" class="form-control" id="inputbookname" placeholder="Huckleberry Finn" name="bookn" required="required">
  </div>
  <div class="form-group col-md-6">
      <label for="inputauthor">Author</label>
      <input type="text" class="form-control" id="inputAuthor" placeholder="Charles Dickens" name="auth" required="required">
  </div>
  <div class="form-group col-md-6">
      <label for="inputPublisher">Publisher</label>
      <input type="text" class="form-control" id="inputPublisher" placeholder="Penguin" name="pubs" required="required">
  </div>
  <div class="form-group col-md-6">
      <label for="inputPrice">Price(Optional)</label>
      <input type="text" class="form-control" id="inputPrice4" placeholder="200" name="price">
  </div>
   <div class="form-group col-md-6">
      <label for="inputTime">Time Span(in days)(optional)</label>
      <input type="number" class="form-control" id="inputTime" name="time">
  </div>
 

   


   

<button type="submit" class="btn btn-primary">Post Request</button>
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