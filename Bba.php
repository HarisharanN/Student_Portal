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
    <th>Fees (Dummy)</th> 
    <th>Minimum Passing Marks (12th)</th>
    <th>Entrance Exams</th>
    <th>Contact</th>
    <th>Website</th>
    <th>Rating</th>
  </tr>
  <tr>
    <td>135</td>
    <td>BHARATI VIDYAPEETH UNIVERSITY, INSTITUTE OF MANAGEENT AND ENTREPRENEURSHIP DEVELOPMENT-[IMED], PUNE</td>
    <td>RAMBAUG COLONY, KOTHRUD</td>
    <td>1,00,000</td>
    <td>75%</td>
    <td>BUMAT</td>
    <td>020-25425517</td>
    <td><a href="https://imed.bharatividyapeeth.edu/">https://imed.bharatividyapeeth.edu/</td>
    <td>8.1/10</td>
  </tr>
   <tr>
    <td>136</td>
    <td>MIT COLLEGE OF MANAGEMENT-[MITCOM] LONI KALBHOR, PUNE</td>
    <td>LONI KALBHOR</td>
    <td>1,65,00</td>
    <td>80%</td>
    <td> - </td>
    <td>8308406363</td>
    <td><a href="https://www.mituniversity.edu.in/">https://www.mituniversity.edu.in/</td>
    <td>7.4/10</td>
  </tr>
   <tr>
    <td>137</td>
    <td>KIRLOSKAR INSTITUTE OF ADVANCED MANAGEMENT STUDIES-[KIAMS], PUNE</td>
    <td>DHAMANE, TALUKA MAVAL,PUNE</td>
    <td>90,000</td>
    <td>80%</td>
    <td> - </td>
    <td>020-65296181</td>
    <td><a href="https://www.kiams.ac.in/">https://www.kiams.ac.in/</td>
    <td>8.5/10</td>
  </tr>
   <tr>
    <td>138</td>
    <td>SYMBIOSIS OF INSTITUTE OF COMPUTER OF STUDIES AND RESEARCH-[SICSR], PUNE</td>
    <td>MODEL COLONY, SHIVAJINAGAR</td>
    <td>1,80,000</td>
    <td>75%</td>
    <td>SET</td>
    <td>020-25675601</td>
    <td><a href="https://www.sicsr.ac.in/">https://www.sicsr.ac.in/</td>
    <td>6.9/10</td>
  </tr>
   <tr>
    <td>139</td>
    <td>FLAME UNIVERSITY,PUNE</td>
    <td>LAVALE</td>
    <td>6,95,000</td>
    <td>75%</td>
    <td> - </td>
    <td>1800 209 4567</td>
    <td><a href="https://www.flame.edu.in/">https://www.flame.edu.in/</td>
    <td>8.2/10</td>
  </tr>
  <tr>
    <td>140</td>
    <td>INDIRA INSTITUTE OF MANAGEMENT -[IIMP], PUNE</td>
    <td>TATHAWADE, PUNE</td>
    <td>50,000</td>
    <td>60%</td>
    <td> - </td>
    <td>020-66168262</td>
    <td><a href="https://indiraiimp.edu.in/">https://indiraiimp.edu.in/</td>
    <td>7.8/10</td>
  </tr>
  <tr>
    <td>141</td>
    <td>MIT WORLD PEACE UNIVERSITY-[MITWPU], PUNE -[IIMP], PUNE</td>
    <td>KOTHRUD</td>
    <td>1,60,000</td>
    <td>65%</td>
    <td> - </td>
    <td>020-71177104</td>
    <td><a href="https://mitwpu.edu.in/">https://mitwpu.edu.in/</td>
    <td>8.1/10</td>
  </tr>
  <tr>
    <td>142</td>
    <td>NESS WADIA COLLEGE OF COMMERCE, PUNE -[IIMP], PUNE</td>
    <td>BUND GARDEN,RD</td>
    <td>50,000</td>
    <td>55%</td>
    <td> - </td>
    <td>020-26167024</td>
    <td><a href="https://nesswadiacollege.edu.in/">https://nesswadiacollege.edu.in/</td>
    <td>8.1/10</td>
  </tr>
  <tr>
    <td>143</td>
    <td>CHRIST INSTITUTE OF MANAGEMENT-[CIM] LAVASA, PUNE</td>
    <td>LAVASA</td>
    <td>1,91,000</td>
    <td>75%</td>
    <td> - </td>
    <td>1800 123 2009</td>
    <td><a href="http://lavasa.christuniversity.in/">http://lavasa.christuniversity.in/</td>
    <td>8.5/10</td>
  </tr>
<input type=text placeholder="Enter SR.NO for interested college" name="cid"><br>
<input type="submit" value="Submit"><br> 
  
</table>
</form>
</body>
</html>
