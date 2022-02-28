<html>
<head>
<title>Sign Up</title>
</head>
<style>
body {
   font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}
/* Add padding to containers */
.container {
  padding: 16px;
  background-color: none;
}

/* Full-width input fields */
input[type=email], input[type=password], input[type=text] {
  width: 25%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
::selection{
  color: #000;
  background: #fff;
}
nav{
  position: fixed;
  background: #1b1b1b;
  width: 100%;
  padding: 10px 0;
  z-index: 12;
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
}
.menu .logo a{
  text-decoration: none;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li:first-child{
  margin-left: 0px;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}
.img{
  background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');
  width: 100%;
  height: 150%;
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-size: cover;
}
.img::before{
  content: '';
  position: absolute;
  height: 150%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
}
.center{
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;
}
.center .title{
  color: #fff;
  font-size: 55px;
  font-weight: 600;
}
.center .sub_title{
  color: #fff;
  font-size: 25px;
  font-weight: 300;
 
}
.center .content{
  color: #fff;
  font-size: 45px;
  font-weight: 500;
}
.center .btns{
  margin-top: 20px;
}
.center .btns button{
  height: 55px;
  width: 170px;
  border-radius: 5px;
  border: none;
  margin: 0 10px;
  border: 2px solid white;
  font-size: 20px;
  font-weight: 500;
  padding: 0 10px;
  cursor: pointer;
  outline: none;
  transition: all 0.3s ease;
}
.center .btns button:first-child{
  color: #fff;
  background: none;
}
.btns button:first-child:hover{
  background: white;
  color: black;
}
.center .btns button:last-child{
  background: white;
  color: black;
}
/*login selection*/
.login{  
        width: 350px;  
        overflow: hidden; 
        margin: auto;    
        padding: 10px;
        border-radius: 5px ;  
}
/*submit button*/
input[type=button], input[type=submit], input[type=reset] {
  background-color: #fff;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}
.time{
padding-left: 75%;
font-size: 20px;
color: white;
}

</style>
<nav>
    <div class="menu">
      <div class="logo">
        <a href="new.php">Student Portal</a>
      </div>
      <ul>
        <li><a href="new.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
       
     
</ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
  
<body>
<form method="POST" action="">

    <div class="content">Welcome, Please Register</div>
   
    <hr>
<div class="time">
<?php
 echo "Today is " . date("d/m/y")  ;
 echo "<br>" .date("l")

  
?>
</div>
<br>
<br> 
<div class="sub_title">
  <label for="email"><b>Email-id</b></label><br>
  <input type="email" placeholder="Enter Email" name="useremail" required>
  <br> 
  <label for="username"><b>Username</b></label><br>
  <input type="text" class="container" placeholder="Enter Username" name="username" required>
  <br>
  <label for="password"><b>Password</b></label><br>
  <input type="password" class="container" placeholder="Enter Password" name="userpassword" required>
  
<h5> * NOTE- Password must contain Uppercase, Lowercase, Digits & Special Characters</h5>  
</div>
<br>
 <input type="submit" value="SIGN UP"><br>

 
<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php
$useremail=$_POST['useremail'];
$passwords=$_POST['userpassword'];
$usernames=$_POST['username'];
if (!empty($useremail) && !empty($passwords))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = new mysqli($servername, $username, $password,"register1");
	if(mysqli_connect_error())
	{
		die('Connect Error ('. msqli_connect_errno().')'.mysqli_connect_error());
	}
	else
{
$number = preg_match('@[0-9]@', $passwords);
$uppercase = preg_match('@[A-Z]@', $passwords);
$lowercase = preg_match('@[a-z]@', $passwords);
$specialChars = preg_match('@[^\w]@', $passwords);
$uspecialChars = preg_match('@[^\w]@', $usernames);
$unumber = preg_match('@[0-9]@', $usernames);
if($unumber || $uspecialChars)
{    
echo '<script>alert("Name should contain only letters.")</script>';
 die();
 }
else if(strlen($passwords) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) 
{
  echo '<script>alert("Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.")</script>';
 die();
} 
else 

{
echo"";
}
        $hashed= hash('sha512', $passwords);
         
	$sql="INSERT INTO regis (username, emailid, password) values ('$usernames','$useremail','$hashed')";

	if($conn->query($sql))
	{
	echo '<script>alert("Account Made")</script>';
	}	
	else
	{
	echo '<script>alert("Error Invalid Input")</script>';
	die();
	}
	}
		}

?>


<a href="NewLogin.php"><input type="button" value="LOGIN NOW"></a></form>
</div>
<hr>
</form>
</body>
</html>

