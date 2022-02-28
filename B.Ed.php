<html>
<head>
<title>IT Engineering</title>
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
<h2>List of Information & Technology Engineering</h2>
<table style="width:75%">
 
<tr>
    <th>Sr.No</th>
    <th>College Name</th>
    <th>Address</th> 
    <th>Fees</th> 
    <th>Minimum Passing Marks (12th)</th>
    <th>Entrance Exam </th>
    <th> Contact</th>
    <th>Website</th>
    <th>Rating</th>
  </tr>
  <tr>
    <td>121</td>
    <td>DR.D.Y PATIL VIDYA PRATISHTHAN SOCIETY'S, PUNE</td>
    <td>PIMPRI</td>
    <td>46,112</td>
    <td>60%</td>
    <td>MAH-B.Ed</td>
    <td>0202-27805893</td>
    <td><a href="https://www.coed.dypvp.edu.in/">https://www.coed.dypvp.edu.in/</td>
    <td>7.6/10</td>
  </tr>
   <tr>
    <td>122</td>
    <td>BHARATI VIDYAPEETH DEEMED UNIVERSITY-[BVDU],PUNE</td>
    <td>SADASHIV PETH</td>
    <td>25,000</td>
    <td>75%</td>
    <td>MAH-B.Ed</td>
    <td>020-24407114</td>
    <td><a href="https://bvuniversity.edu.in/">https://bvuniversity.edu.in/</td>
    <td>7.8/10</td>
  </tr>
   <tr>
    <td>123</td>
    <td>MIT WORLD PEACE UNIVERSITY[MITWPU],PUNE</td>
    <td>KOTHRUD</td>
    <td>45,000</td>
    <td>80%</td>
    <td>MAH-B.Ed</td>
    <td>020-71177104</td>
    <td><a href="https://mitwpu.edu.in/">https://mitwpu.edu.in/</td>
    <td>8.1/10</td>
  </tr>
   <tr>
    <td>124</td>
    <td>SPICER MEMORIAL COLLEGE-[SMC],PUNE</td>
    <td>AUNDH</td>
    <td>50,225</td>
    <td>70%</td>
    <td>MAH-B.Ed</td>
    <td>020-25807000</td>
    <td><a href="https://sau.edu.in/">https://sau.edu.in/</td>
    <td>9.3/10</td>
  </tr>
   <tr>
    <td>125</td>
    <td>PRATIBHA COLLEGE OF EDUCATION ,PUNE</td>
    <td>PRABHAT RD</td>
    <td>25,000</td>
    <td>70%</td>
    <td>MAH-B.Ed</td>
    <td>--</td>
    <td><a href="https://pcoedu.org.in/">https://pcoedu.org.in/</td>
    <td>8.5/10</td>
  </tr>
<input type=text placeholder="Enter SR.NO for interested college" name="cid"><br>
<input type="submit" value="Submit"><br> 
  
</table>
</form>
</body>
</html>
