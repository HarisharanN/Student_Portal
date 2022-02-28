<html>
<style>
.stable {
    margin: 50px 0;
    min-width: 400px;
    border=3;
    padding: 30px; 
    box-shadow: 12 12 20px rgba(0, 0, 0, 0.15);
}
.thead {
    background-color: #009879;
    color: #ffffff;
    text-align: center;

}
.str{
    text-align: center;	   
 background-color: #f3f9f3;
    border-bottom: 2px solid #009879;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
th {
  text-align: left;
}
body {
  background-color: lightgray;
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
.time{
padding-down: 150%;
padding-left: 50%;
font-size: 20px;
color: white;
}
</style>

<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

session_start();
$fname=$_SESSION['userem'];

$coll="0";
$strm="0";
$cou="0";
$cidd="0";
$deg="0";
$add="0";
$fee="0";
$pass="0"; 
$name="0" ;
$lname="0";
$dob="0";
$nat="0";

$cid=$_POST['cid'];
   if (!empty($fname) && !empty($cid))
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
$getb=mysqli_query($conn,"SELECT * FROM admission where name='$fname'");
if($rows=mysqli_fetch_array($getb))
	{
	$name=$rows['name'];	
               $lname=$rows['lastname']; 
                      
                         $nat=$rows['nationality'];
                    
                   
	}
$req=mysqli_query($conn,"SELECT * FROM colleges where id='$cid'");
	if($row=mysqli_fetch_array($req))
	{
	$coll=$row['college'];
	$cidd=$row['id'];
        $strm=$row['stream'];
        $cou=$row['course'];
        $deg=$row['degree'];
        $add=$row['address'];
        $fee=$row['fees'];
        $pass=$row['passing'];
	}
echo '<table class="stable"> 
      <tr class="thead"> 
          <td> Name </td> 
          <td>Last Name</td> 
          <td>Nationality</td>
          <td>Id</td>
          <td>Degree</td>
          <td>Stream</td>
          <td>Course</td> 
          <td>College</td>
          <td>Address</td>
          <td>Fees (Dummy)</td>
          <td>Passing marks(in 12th)</td>
  </tr>';
echo '<tr class="str"> 
                  <td>'.$name.'</td> 
                  <td>'.$lname.'</td> 
                  <td>'.$nat.'</td>  
                  <td>'.$cidd.'</td> 
                  <td>'.$deg.'</td>
                  <td>'.$strm.'</td> 
                  <td>'.$cou.'</td>
                  <td>'.$coll.'</td>   
                  <td>'.$add.'</td>
                  <td>'.$fee.'</td>
                  <td>'.$pass.'%'.'</td>
              </tr>';

}
}
?>
<hr>

<a href="new.php"><input type="button" value="LOGIN OUT"></a></form>
<hr>
<h3>Thank You !!! 
For showing your interest in the below college. The college will be alerted about the same. </h3>
<hr>
</html>