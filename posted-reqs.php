<?php
session_start();
if (array_key_exists("id", $_COOKIE))
{
  $pcreate=$_COOKIE['id'];
}
else
{
  header("Location: adminacc.php");
}

include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/vpsts.css">
  <title></title>
  
  
</head>
<body>
  <h1 class="display-1">Posted Requests</h1>
  <div class="container">
    <div class="row">
      <?php
      $query = "SELECT * FROM `REQUESTS` where requester!='$pcreate' ORDER BY Time DESC";
      $result = mysqli_query($link, $query);
      if (mysqli_num_rows($result)) 
      {

        while($row = mysqli_fetch_assoc($result))
        {
          echo '<div class="card" style="width: 18rem; margin:20px;">
          <div class="card-body">
          <h5 class="card-title">'.$row["book_name"].'</h5>
          <h6 class="card-subtitle mb-2 text-muted">'.$row["author"].'</h6>
          <h6 class="card-subtitle mb-2 text-muted">'.$row["publisher"].'</h6>
          <h6 class="card-subtitle mb-2 text-muted">Price '.$row["price"].'</h6>
          <h6 class="card-subtitle mb-2 text-muted">Time Span '.$row["time_span"].'</h6>
          <h6 class="card-subtitle mb-2 text-muted">Posted By '.$row["requester"].'</h6>
          <h6 class="card-subtitle mb-2 text-muted">Posted on '.$row["time"].'</h6>
          
          <a href="respond.php?book='.$row["book_name"].'&auth='.$row["author"].'&price='.$row["price"].'&time='.$row["time_span"].'&requester='.$row["requester"].'" class="card-link">Respond</a>
          
          </div>
          </div>';
          /*echo "<div class='row' id='post'>";
          echo "<div class='row'>";
          echo "<div class='col'>".$row["Post"]."<br></div>";
          echo "</div>";
          echo "<div class='w-100'>";
          echo "</div>";
          echo "<div class='col'><small class='form-text text-muted'>".$row["Postby"]."<br></small></div>";

          echo "<div class='w-100'>";
          echo "</div>";
          echo "<div class='col'><small class='form-text text-muted'>" . $row["Time"]."<br></small></div>";
          echo "<div class='w-100'>";
          echo "</div>";
          echo "<div class='col'><a href='del.php?del=".$row["Time"]."'>Delete</a></div>";

          echo "<div class='col'><a href='edit.php?edt=".$row["id"]."'>Edit</a></div>";
          echo "<div class='col'><a href='".$row["File Url"]."' download='".$row["File Url"]."'>Download</a></div>";
          echo "<div class='col'><a href='".$row["File Url"]."'>View</a></div>";

          echo "</div> ";
          echo "</br>";*/
        }
      } 
      else
      {
        echo "0 results";

      }
      ?>
      </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
      </html>