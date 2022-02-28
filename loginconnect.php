<html>
<body>
<center>
<style>
/*Background Pictures*/
body
{
  padding: 16px;
  background-color: gainsboro;
  background-size: cover;
}

/*login selection*/
.login{  
        width: 350px;  
        overflow: hidden; 
        margin: auto;    
        padding: 10px;
        background: #f1f1f1 ;  
        border-radius: 5px ;  
}
.txt{
font-size:20px;

}
</style>
<div class="login">
<p class="txt">

<?php
session_start();
$_SESSION['userem'] = $_POST['username']; 
$useremail=$_POST['username'];
$passwords=$_POST['password'];
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
 $hashed= hash('sha512', $passwords);
$chk=mysqli_query($conn,"SELECT * FROM regis where username='$useremail' && password='$hashed'");
if($row=mysqli_fetch_array($chk))
{
header ('location:runtest.php');

}
else
{
echo "wrong input";
}
}
} 

?>
</p>
</div>
</html>
