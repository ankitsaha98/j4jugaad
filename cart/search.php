<?php
$hostname="localhost";
$username="root";
$password="123456";                                      
$database="j4j";
$conn=mysqli_connect($hostname,$username,$password,$database);
if (!$conn) {
	die("connection failed:".mysqli_connect_error());
}
	//mysqli_connect("localhost", "root", "123456") or die("Error connecting to database: ".mysql_error());
	// mysql_select_db("j4j") or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<title>search results</title>
</head>
<body>
	<?php
	$query = $_GET['query'];
	$min_length = 2;
	if (strlen($query) >= $min_length){
		$query = htmlspecialchars($query);
			//$query = mysql_real_escape_string($query);
		$sql= " SELECT * FROM Products WHERE name LIKE '%$query%' ";
		$rawres = mysqli_query($conn, $sql);
		if(!$rawres){
			die(mysqli_error($conn));
		}
					//if($rawres){
				//$count = mysqli_num_rows($rawres);
		if (mysqli_num_rows($rawres) >= 1) {
			
			while($fetch = mysqli_fetch_assoc($rawres)){
				$name = $fetch['name'];
				
				echo "<p><h3>".$name."</h3></p>"/*.$results['author'].$results['genre'].*/;
			}
		}

		else{
			echo "No results found\n";
			echo "\nBut don't worry the necessary jugaad for the book would be done in 2-3 working days";

		}
	}
	mysqli_close($conn);
	?>
</body>
</html>
