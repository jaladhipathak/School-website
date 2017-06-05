<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>principal</title>
<?php
	
$db = mysqli_connect('localhost','root','');
if(!$db){
	echo("error");
}
$dbname = 'daxinamurti';
$btest = mysqli_select_db($db,$dbname);
	if(isset($_POST['uname']) && !empty($_POST['uname']) AND isset($_POST['psw']) && !empty($_POST['psw'])){
                $username = mysqli_real_escape_string($db,$_POST['uname']);
                $password = mysqli_real_escape_string($db,$_POST['psw']);

                $search = mysqli_query($db,"SELECT username, password FROM principal WHERE username='$username' AND password='$password'") or die(mysql_error()); 
                $match  = mysqli_num_rows($search);
                if($match > 0){
					$_SESSION['username'] = "username";
    				$_SESSION['password'] = "password"; 
				header("Location: insertnews.html");
			 	}
			 	else{
					
					die(header("location:login.php?loginFailed=true&reason=password"));
					
					exit;
				}
            }


	
?>
</head>


<body>
</body>
</html>