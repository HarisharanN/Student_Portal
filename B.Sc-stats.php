<html>
<head>
<title>B.Sc-CS</title>
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
<h2>LisT of Bachelors of Science in Computer Science</h2>
<table style="width:100%">
 
<tr>
    <th>Sr.No</th>
    <th>College Name</th>
    <th>Address</th> 
    <th>Fees</th> 
    <th>Minimum Passing Marks (12th)</th>
    <th> Contact</th>
    <th>Website</th>
    <th>Rating</th>
  </tr>
  <tr>
    <td>167</td>
    <td>FERGUSSON COLLEGE,PUNE</td>
    <td>FC COLLEGE,RD SHIVAJI NAGAR</td>
    <td>11,135</td>
    <td>70%</td>
    <td>020-67656000</td>
    <td><a href="https://www.fergusson.edu/">https://www.fergusson.edu/</td>
    <td>8.1/10</td>
  </tr>
   <tr>
    <td>168</td>
    <td>SIR PRARASHURAMBHAU COLLEGE, PUNE</td>
    <td>LOKAMANYA BAL GANGADHAR TILAK Rd</td>
    <td>14,390</td>
    <td>50%</td>
    <td>020-24331978</td>
    <td><a href="https://www.spcollegepune.ac.in/">https://www.spcollegepune.ac.in/</td>
    <td>8.2/10</td>
  </tr>
   <tr>
    <td>169</td>
    <td>PRATIBHA COLLEGE OF COMMERCE & COMPUTER STUDIES-[PCCCS],PUNE</td>
    <td>PIMPRI-CHINCHWAD</td>
    <td>20,300</td>
    <td>60%</td>
    <td>8600100942</td>
    <td><a href="https://kes.org.in/">https://kes.org.in/</td>
    <td>8/10</td>
  </tr>
   <tr>
    <td>170</td>
    <td>ABEDA INAMDAR SENIOR COLLEGE, PUNE</td>
    <td>AZAM CAMPUS, CAMP</td>
    <td>30,815</td>
    <td>55%</td>
    <td>020-26446970</td>
    <td><a href="http://www.abedainamdarcollege.org.in/">http://www.abedainamdarcollege.org.in/</td>
    <td>7.5/10</td>
  </tr>
   <tr>
    <td>171</td>
    <td>HUTATMA RAJGURU MAHAVIDYALAYA, PUNE</td>
    <td>TALKHED, RAJGURUNAGAR</td>
    <td>11,070</td>
    <td>50%</td>
    <td>02135 222 099</td>
    <td><a href="http://www.hrmrajgurunagar.ac.in/">http://www.hrmrajgurunagar.ac.in/</td>
    <td>7.7/10</td>
  </tr>
   <tr>
    <td>172</td>
    <td>DR.D.Y. PATIL ARTS, SCIENCE AND COMMERCE COLLEGE PIMPRI, PUNE</td>
    <td>PIMPRI-CHINCHWAD</td>
    <td>18,985</td>
    <td>70%</td>
    <td>020-27805894</td>
    <td><a href="https://acs.dypvp.edu.in/">https://acs.dypvp.edu.in/</td>
    <td>8/10</td>
  </tr>
   <TR>
    <td>173</td>
    <td>SURYADATTA COLLEGE OF MANAGEMENT, INFORMATION RESEARCH AND TECHNOLOGY-[SCMIRT], PUNE</td>
    <td>PASHAN Rd, BAVDHAN</td>
    <td>1,20,000</td>
    <td>72%</td>
    <td>020-67901300</td>
    <td><a href="https://www.scmirt.org/">https://www.scmirt.org/</td>
    <td>7.6/10</td>
  </tr>

<input type=text placeholder="Enter Sr.No for interested college" name="cid"><br>
<input type="submit" value="Submit"><br> 
  
</table>
</form>
</body>
</html>
