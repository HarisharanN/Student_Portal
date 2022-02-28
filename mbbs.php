<html>
<head>
<title>MBBS</title>
</head>
<stlye>
<style>
body{
   font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}
/* Add padding to containers */
.container {
  padding: 16px;
  background-color: gainsboro;
background-size: cover;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 25%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
h3 {
  word-spacing: 10px;
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
</style>
<body>
<form method="POST" action="display.php">
<div class="container">
<form>
<h2>List for Bachelor of Medicine, Bachelor of Surgery (MBBS)</h2>
<table style="width:75%">
  <tr>
    <th>Sr.No</th>
    <th>College Name</th>
    <th>Address</th> 
    <th>Fees</th> 
    <th>Passing Marks (12th)</th>
    <th>Contact</th>
  </tr>
  <tr>
    <td>202</td>
    <td>B.J MEDICAL GOVERMENT COLLEGE </td>
    <td>near RAILWAY SATAION</td>
    <td>1,05,000</td>
    <td>80%</td>
    <td>9898989898</td>
  </tr>
  <tr>
    <td>203</td>
    <td>AFMC</td>
    <td>CAMP</td>
    <td>90,000</td>
    <td>85%</td>
    <td>8383838383</td>
  </tr>
  <tr>
    <td>204</td>
    <td>BHARATI VIDYA PEETH</td>
    <td>KARTAJ</td>
    <td>1,95,000</td>
    <td>82%</td>
    <td>7272727272</td>  
  </tr>
   <tr>
    <td>205</td>
    <td>D.Y PATIL MEDICAL COLLEGE</td>
    <td>BIBEWADI</td>
    <td>2,00,000</td>
    <td>90%</td>
    <td>9354693456</td>  
  </tr>
<input type=text placeholder="Enter SR.NO for interested college" name="cid"><br>
<input type="submit" value="Submit"><br> 
</table>
</form>
</body>
</html>
