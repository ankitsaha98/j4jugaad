<?php
    session_start();
    $error = "";    
    if (array_key_exists("logout", $_GET))
    {

        setcookie("id", "", time() - 60*60);
        $_COOKIE["id"] = "";  
        
    }
    include 'conn.php';
    // $query = "SELECT * FROM `basic data`";
    //if($result = mysqli_query($link, $query))
    //{
    //  $row = mysqli_fetch_array($result);
    //  print_r($row);
    //}

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $mail=mysqli_real_escape_string($link, $_POST['mail']);
        $pass=mysqli_real_escape_string($link, $_POST['pass']);
        
        
        $query = "SELECT * FROM `STUDENTS` WHERE email = '".$mail."'";

        $result = mysqli_query($link, $query);
                
                    $row = mysqli_fetch_array($result);
                    
                    if (isset($row)) { 

                    $hashedPassword = md5($pass);
                        
                        if ($hashedPassword == $row['password']) {
                            $id=$row['handle'];
                            setcookie("id", $id, time() + 60*60, "", "","", true);
                            //echo $_COOKIE["id"];
                    
                    header("Location: dashboard.php");   
                }
                else
                {
                    echo "Username or password invalid";
                }
        }
   
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ADMIN</title>
    <link rel="stylesheet" type="text/css" href="css/adacc.css">
    
  </head>
  <body>
    <div class="container">
        <form method="POST" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Enter your registered email</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>






