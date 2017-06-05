<!DOCTYPE html>
<html>
<head><title>Principal Login</title></head>
<style>
form {
    border: 3px solid white;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
	height: 125px;
	width: 125px;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
	* {
  margin: 0px;
  padding: 0px;
}
body {
   background: -webkit-linear-gradient(#363437, #121112);
  background: linear-gradient(#363437, #121112);
}
h2
{  
margin-left:65px;
    margin-top:10px;
    font-size:450%;
    color:#ffffff;
	font-family: 'Lobster Two', cursive;	
}
</style>
<link href="https://fonts.googleapis.com/css?family=Lobster+Two|Oswald" rel="stylesheet">
<body>
<div id="back"></div>
<div id="front"></div>


<h2>Principal Login</h2>
<div style="width: 600px;height: 435px;margin: 50px 450px 100px 450px;background-color: white!important;display: block">
<form action="loginvalidate.php" method="post">
  <div class="imgcontainer">
    <img src="data/faculties/bhavnabhatt.jpeg" alt="Bhavna Bhatt" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
       
        <?php $reasons = array("password" => "<font color='red' style='font-size:13px'>*Wrong Username or Password</font>", "blank" => "You have left one or more fields blank."); if (isset($_GET["loginFailed"])) echo $reasons[$_GET["reason"]]; ?>
    <button type="submit">Login</button>
  </div>
</form>
</div>
<script>
if(window.performance.navigation.type == 1)
	{
		document.getElementById("a").innerHTML=" ";
	
	}
	
</script>
</body>
</html>
