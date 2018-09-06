<?php
/**
 * Created by PhpStorm.
 * User: blackbeard
 * Date: 5/9/18
 * Time: 1:27 AM
 */
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name=mysqli_real_escape_string($link, $_POST['name']);
    $gender=mysqli_real_escape_string($link, $_POST['gender']);
    $email=mysqli_real_escape_string($link, $_POST['email']);
    $handle=mysqli_real_escape_string($link, $_POST['handle']);
    $pass=md5(mysqli_real_escape_string($link, $_POST['pass']));
    $addr=mysqli_real_escape_string($link, $_POST['addr']);
    $mob=mysqli_real_escape_string($link, $_POST['mob']);
    $coll=mysqli_real_escape_string($link, $_POST['coll']);
    $stream=mysqli_real_escape_string($link, $_POST['stream']);
    $today = date("Y-m-d H:i:s");
    $query = "insert into `STUDENTS` (`id`,`name`,`gender`,`email`,`password`,`mobile`,`handle`,`college`,`stream`,`address`,`time`) VALUES ('0000','$name', '$gender', '$email','$pass','$mob','$handle','$coll','$stream','$addr','$today')";
    if(!mysqli_query($link, $query))
        {
            echo "Error".mysqli_error($link)."<br>";

        }
}

?>
<!doctype html>
<html lang="en">
<head>
  <title>Sign Up!!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <form method="POST" action="new-user.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputName" name="name" placeholder="Bruce Wayne">
      </div>
      <div class="form-group col-md-4">
          <label for="inputGender">Gender</label>
          <select id="inputGender" class="form-control" name="gender" required="required">
            <option selected>Choose...</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="abc@bc.a" name="email" required="required">
  </div>
  <div class="form-group col-md-6">
      <label for="inputMobile">Mobile</label>
      <input type="text" class="form-control" id="inputMobile" placeholder="9876543210" name="mob" required="required">
  </div>
  <div class="form-group col-md-6">
      <label for="inputHandle">Enter a handle to own :</label>
      <input type="text" class="form-control" id="inputHandle" placeholder="Blacksheep" name="handle" required="required">
  </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="********">
  </div>
  <div class="form-group col-md-6">
      <label for="inputCPassword4">Confirm Password</label>
      <input type="password" class="form-control" id="inputCPassword4" placeholder="********" name="pass" required="required">
  </div>
   <div class="form-group col-md-6">
      <label for="inputCollege">College</label>
      <input type="text" class="form-control" id="inputCity" name="coll" required="required">
  </div>
   <div class="form-group col-md-6">
      <label for="inputStream">Stream</label>
      <input type="text" class="form-control" id="inputStream" name="stream" required="required">
  </div>
</div>
<div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="addr" required="required">
</div>

   


   

<button type="submit" class="btn btn-primary">Sign in</button>
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