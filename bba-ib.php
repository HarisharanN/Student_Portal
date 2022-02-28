<html>
<head>
<title>BBA-IB</title>
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
<table style="width:100%">
 
<tr>
    <th>Sr.No</th>
    <th>College Name</th>
    <th>Address</th> 
    <th>Fees (Dummy)</th> 
    <th>Minimum Passing Marks (12th)</th>
    <th> Contact</th>
    <th>Website</th>
    <th>Rating</th>
  </tr>
  <tr>
    <td>160</td>
    <td>SYMBIOSIS CENTER FOR MANAGAEMENT STUDIES-[SCMS], PUNE</td>
    <td>VIMAN NAGAR</td>
    <td>3,10,000</td>
    <td>75%</td>
    <td>020-26557100</td>
    <td><a href="https://www.scmspune.ac.in/">https://www.scmspune.ac.in/</td>
    <td>8.4/10</td>
  </tr>
   <tr>
    <td>161</td>
    <td>SYMBIOSISI INTERNATIONAL UNIVERSITY-[SIU], PUNE</td>
    <td>MODEL COLONY, SHIVAJINAGAR</td>
    <td>2,90,000</td>
    <td>75%</td>
    <td>020-25675601</td>
    <td><a href="https://www.sicsr.ac.in/">https://www.sicsr.ac.in/</td>
    <td>8.1/10</td>
  </tr>
   <tr>
    <td>162</td>
    <td>VISHWAKARMA INSTITUTE OF MANAGEMENT-[VIM],PUNE</td>
    <td>LAXMI NAGAR, KONDHWA</td>
    <td>1,00,000</td>
    <td>70%</td>
    <td>9067002223</td>
    <td><a href="https://www.vupune.ac.in/">https://www.vupune.ac.in/</td>
    <td>8.3/10</td>
  </tr>
   <tr>
    <td>163</td>
    <td>MITSOM COLLEGE, PUNE</td>
    <td>RAMBAUG COLONY, KOTHRUD</td>
    <td>67,500</td>
    <td>75%</td>
    <td>9403865490</td>
    <td><a href="http://www.mitsomcollege.edu.in/">http://www.mitsomcollege.edu.in/</td>
    <td>8/10</td>
  </tr>
   <tr>
    <td>164</td>
    <td>SINHGAD COLLEGE OF SCIENCE-[SCOS], PUNE</td>
    <td>AMBEGAON</td>
    <td>37,000</td>
    <td>55%</td>
    <td>020-24341730</td>
    <td><a href="http://www.sinhgad.edu/">http://www.sinhgad.edu/</td>
    <td>7.5/10</td>
  </tr>
<tr>
    <td>165</td>
    <td>AJEENKYA DY PATIL UNIVERSITY</td>
    <td>CHARHOLI BUDRUK</td>
    <td>2,00,000</td>
    <td>70%</td>
    <td>8686868686</td>
    <td><a href="https://adypu.edu.in/">https://adypu.edu.in/</td>
    <td>7.7/10</td>
  </tr>
<tr>
    <td>166</td>
    <td>VISHWAKARMA COLLEGE OF ARTS, COMMERCE & SCIENCE-[VCACS], PUNE</td>
    <td>BETAL NAGAR, KONDHWA</td>
    <td>75,000</td>
    <td>55%</td>
    <td>7888076565</td>
    <td><a href="http://www.vcacs.ac.in/">http://www.vcacs.ac.in/</td>
    <td>7.5/10</td>
  </tr>
<input type=text placeholder="Enter SR.NO for interested college" name="cid"><br>
<input type="submit" value="Submit"><br> 
  
</table>
</form>
</body>
</html>