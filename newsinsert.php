<!Doctype html>
<html>
<?php
$con=mysqli_connect("localhost","root","","daxinamurti");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$NEWS = $_POST['news'];
$Date= $_POST['d'];
	
$sql="INSERT INTO newstable (date, news)
VALUES ('$Date', '$NEWS')";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
?>
<script>
	alert("News added");
	window.history.back();
</script>
</html>