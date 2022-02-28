<html>
<head>
<title>Home Page</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
   font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}
body {
  margin: 0;
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
  height: 155%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
}
.center{
  position: absolute;
  top: 65%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;
}
.center .title{
  color: #fff;
  font-size: 15px;
  font-weight: 600;
}
.center .sub_title{
  color: #fff;
  font-size: 25px;
  font-weight: 300;
 
}
.center .content{
  color: #fff;
  padding-top:400;
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
.navbar {
  overflow: hidden;
  background-color: 1b1b1b;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  padding: 14px 16px;
  background: black;
  color: white;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 75%;
  left: 275;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content .header {
  background: #36454F;
  padding: 5px;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  background-color: #ccc;
  height: 500px;
}
.column a {
  float: none;
  color: black;
  padding: 10px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.column a:hover {
  background-color: #ddd;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}

</style>
<nav>
    <div class="menu">
      <div class="logo">
        <a href="new.php">Student Portal</a>
      </div>
     <div class="navbar">
      <ul>
        <li><a href="new.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li><div class="dropdown">
    <button class="dropbtn">Courses 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h3>Select Course (Regional- Pune)</h3>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Engineering</h3>
          <a href="CS.php">Computer Science</a>
          <a href="ME.php">Mechanical Engineering</a>
          <a href="IT.php">Information & Technology Engineering</a>
          <a href="CE.php">Civil Engineering</a>
          <a href="EE.php">Electrical Engineering</a>
          <a href="ENTC">Electronic & Communication</a>
          <h3>Commerce</h3>
          <a href="Bcom.php">B.com (Bachelor of Commerce)</a> 
          <h3>Law</h3>
          <a href="BBALLB.php">BBA-LLB</a>
          <a href="LLB.php">LLB</a>
          <h3>Economics</h3>
          <a href="BSCE.php">B.Sc. Economics</a>
        </div>
        <div class="column">
          <h3>Science</h3>
          <a href="B.Sc-CS.php">B.Sc.(Computer Science)</a>
          <a href="B.Sc-stats">B.Sc-Statistics</a>
          <a href="#">B.Sc Computational Mathematics & Statistics</a>
          <h3>Arts</h3>
          <a href="#">B.A(Hons) English</a>
          <a href="#">B.A(Hons) Psychology</a>
          <a href="#">B.A Liberal Arts</a>
          <h3>Medical</h3>
          <a href="mbbs.php">MBBS</a>
          <a href="pharma.php">Pharmacy</a>
          <a href="BDS.php">Dentistry</a>
          <a href="bhms.php">BHMS</a>
        </div>
        <div class="column">
          <h3>Business Management</h3>
          <a href="bba.php">BBA</a>
          <a href="bba-ib.php">BBA-IB </a>
          <a href="BBA-BA.php">BBA-Business Analytics</a>
          <h3>Education</h3>
          <a href="B.Ed.php">Bachelor of Education (B.Ed)</a>
          <h3>Mass Media</h3>
           <a href="Massmedia.php"> BMM</a>
          <h3>Architecture</h3>
           <a href="Arch.php">B.Arch</a>
          <h3>Design</h3>
           <a href="B.DES.php">B.Des. Fashion & Apparel</a>
           <a href="B.DES GP">B.Des. Graphic Design</a>
        </div>
      </div>
    </div>
  </div> 
</div>
        
   
</ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
<body>
<form method="POST">

<div class="content">Admission Form</div>

  <div class="Sub_title">Please fill in this form to create an account.
<hr>
 <label for="name"><b>Name</b></label><br>
  <input type="text" placeholder="Enter Name" name="fname" >
  <br>
  <label for=" lastname"><b>Last Name</b></label><br>
  <input type="text" placeholder="Enter Last Name" name="lname" >
  <br>
 
  <label for="nationality"><b>Nationality</b></label><br>
  <input type="text" placeholder="Enter Nationality" name="nationty" >
  
</div>
<hr>
<input type="submit" value="Submit">
<br>
<br>
<hr>
<div class="title">
<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php
session_start();
$_SESSION['userem'] = $_POST['fname']; 
$firstname=$_POST['fname'];
$userlname=$_POST['lname'];
$nationality=$_POST['nationty'];

if (!empty($firstname) && !empty($userlname))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "register1";
	$conn = mysqli_connect($servername, $username, $password,$dbname);
    
	if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}    
	
	
	$sql = "INSERT INTO admission (name, lastname, nationality)VALUES ('$firstname','$userlname','$nationality')";
	
       if(mysqli_query($conn,$sql))
	{
	echo 'New record created successfully'.'<br/>';
	}	
	else
	{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	//die();
	}
	mysqli_close($conn);
		}

?>

</div>
</form>
</body>
</html>