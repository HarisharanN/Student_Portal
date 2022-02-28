<html>
<head>
<title>Mechanical Engineering</title>
</head>
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
</style>
<body>
<form method="POST" action="display.php">
<div class="container">
<form>
<h2>List of Mechanical Engineering</h2>
<table style="width:75%">
 <tr>
    <th>Sr.No</th>
    <th>College Name</th>
    <th>Address</th> 
    <th>Fees (Dummy)</th> 
    <th>Minimum Passing Marks (12th)</th>
    <th>Entrance Exam </th>
    <th> Contact</th>
    <th>Website</th>
    <th>Rating</th>
  
  </tr>
 
  <tr>
    <td>11</td>
    <td>COLLEGE OF ENGINEERING-[COEP],PUNE</td>
    <td>SHIVAJI NAGAR</td>
    <td>40,500</td>
    <td>75%</td>
    <td>MHT-CET</td>
    <td>020-25507000</td>
    <td><a href="https://www.coep.org.in">https://www.coep.org.in/</a></td>
    <td>8.6/10</td>
  </tr>
   <tr>
    <td>12</td>
    <td>ARMY INSITUTE OF TECHNOLOGY-[AIT],PUNE</td>
    <td>ALANDI</td>
    <td>1,80,197</td>
    <td>75%</td>
    <td>JEE-MAIN</td>
    <td>7249250184</td>  
    <td><a href="https://www.aitpune.com/">https://www.aitpune.com/</td>
    <td>8.3/10</td>
  </tr>
  <tr>
    <td>13</td>
    <td>VISHWAKARMA UNIVERSITY [VU],PUNE</td>
    <td>KONDHWA</td>
    <td>2,00,000</td>
    <td>75%</td>
    <td>MHT-CET</td>
    <td>9067002223</td>
    <td><a href="https://www.vupune.ac.in/">https://www.vupune.ac.in/</td>
    <td> 8.4/10</td>
  </tr>
  <tr>
    <td>14</td>
    <td>ZEAL COLLEGE OF ENGINEERING & RESEARCH [ZCOER],PUNE</td>
    <td>NARHE</td>
    <td>98,900</td>
    <td>80%</td>
    <td>JEE-MAIN</td>
    <td>020-67206000</td>  
    <td><a href="https://zcoer.in/">https://zcoer.in/</A></td>
    <td>8.5/10</td>
  </tr>
  <tr>
    <td>15</td>
    <td>BHARATI VIDYAPEETH DEEMED UNIVERSITY[BVDU],PUNE</td>
    <td>DHANKAWADI</td>
    <td>1,20,000</td>
    <td>80%</td>
    <td>MHT-CET</td>
    <td>020-24107390</td>
    <td><a href="https://bvucoepune.edu.in/">https://bvucoepune.edu.in/</a></td>
    <td> 7.8/10</td>
  </tr>
   <tr>
    <td>16</td>
    <td>VISHWAKARMA INSITUTE OF TECHNOLOGY [VIT],PUNE</td>
    <td>BIBEWADI </td>
    <td>1,79,895</td>
    <td>75%</td>
    <td>MHT-CET</td>
    <td>020-24202180</td>  
    <td><a href="https://www.vit.edu/">https://www.vit.edu/</a></td>
    <td>7.5/10</td>
  </tr>
   <tr>
    <td>17</td>
    <td>MKSSS'S CUMMINS COLLEGE OF ENINEERINGFOR WOMEN,PUNE</td>
    <td>KOTHURD</td>
    <td>1,80,836</td>
    <td>70%</td>
    <td>JEE MAIN</td>
    <td>020 25311000</td>  
    <td><a href="https://www.cumminscollege.org/">https://www.cumminscollege.org/</td>
    <td>8.3/10</td>
  </tr> 
  <tr>
    <td>18</td>
    <td>VISHWAKARMA INSITUTE OF INDIAN TECHNOLOGY[VIIT],PUNE</td>
    <td>KONDHWA</td>
    <td>1,64,000</td>
    <td>70%</td>
    <td>JEE-MAIN</td>
    <td>020-26950451</td>
    <td><a href="https://www.viit.ac.in/">https://www.viit.ac.in/</a></td>
    <td>7.8/10</td>
  </tr>
  <tr>
    <td>19</td>
    <td>SYMBIOSIS INSTITUTE OF TECHONOLOGY [SIT],PUNE</td>
    <td>MULSHI</td>
    <td>2,80,000</td>
    <td>70%</td>
    <td>SET</td>
    <td>9881200296</td>  
    <td><a href="https://www.sitpune.edu.in/">https://www.sitpune.edu.in/</a></td>
    <td>8.5/10</td>
  </tr>
  <tr>
    <td>20</td>
    <td>NUTAN MAHARASHTRA INSITUTE OF ENGINEERING & TECHNOLOGY[NMIET]TALEGAON,PUNE</td>
    <td>TALEGAONRD</td>
    <td>97,000</td>
    <td>60%</td>
    <td>JEE-MAIN</td>
    <td>02114 228 175</td>
    <td><a href="https://www.ncerpune.in/">https://www.ncerpune.in/</a></td>
    <td>7.1/10</td>
  </tr>  
 
<input type=text placeholder="Enter SR.NO for interested college" name="cid"><br>
<input type="submit" value="Submit"><br> 
</table>
</form>
</body>
</html>
