<html>
<head>
<title>LLB</title>
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
.th {
  text-align: left;
}
</style>
<body>
<form method="POST" action="display.php">
<div class="container">
<form>
<h2>List of LLB</h2>
<table style="width:75%">
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
    <td>80</td>
    <td>SYMBIOSIS LAW SCHOOL[SLS],PUNE</td>
    <td>VIMAN NAGAR</td>
    <td>1,65,000</td>
    <td>75%</td>
    <td>020-26551100</td>  
    <td><a href="https://www.symlaw.ac.in/">https://www.symlaw.ac.in/</td>
    <td>8.4/10</td>
  </tr>
  <tr>
    <td>81</td>
    <td>ILS LAW COLLEGE[ILS],Pune</td>
    <td>SHIVAJI NAGAR</td>
    <td>40,015</td>
    <td>75%</td>
    <td>020-25656775</td>
    <td><a href="https://ilslaw.edu/">https://ilslaw.edu/</td>
    <td>7.3/10</td>
  </tr>
  <tr>
    <td>82</td>
    <td>PES'S MODERN LAW COLLEGE,Pune</td>
    <td>PASHAN ,RD</td>
    <td>22,000</td>
    <td>80%</td>
    <td>020-29523487</td>
    <td><a href="http://modernlawcollege.org/">http://modernlawcollege.org/</td>
    <td>6.4/10</td>
  </tr>
 <tr>
  <tr>
    <td>83</td>
    <td>AJEENKYA DY PATIL UNIVERSITY [ADYPU],Pune</td>
    <td>LOHAGAON</td>
    <td>1,00,000</td>
    <td>75%</td>
    <td>8686868686</td>
    <td><a href="https://adypu.edu.in/?utm_source=GMBListing&utm_medium=organic">https://adypu.edu.in/</td>
    <td>7.7/10</td>
  </tr>
   <tr>
    <td>84</td>
    <td>BHARATI VIDYAPEETH NEW LAW COLLEGE-[NLC],PUNE</td>
    <td>KOTHRUD</td>
    <td>36,750</td>
    <td>70%</td>
    <td>020-25444616</td>
    <td><a href="https://bvpnlcpune.org/">https://bvpnlcpune.org/</td>
    <td>7/10</td>
  </tr>
  <tr>
    <td>85</td>
    <td>SINHGAD LAW COLLEGE,Pune</td>
    <td>WADGAON</td>
    <td>32,167</td>
    <td>85%</td>
    <td>020-224350595</td>
    <td><a href="http://www.sinhgad.edu/SINHGAD-LAW-COLLEGE/">http://www.sinhgad.edu/</td>
    <td>7.4/10</td>
  </tr>
 <tr>
<tr>
    <td>86</td>
    <td>D.E.S'S SHRI. NAVALMAL FIRODIA LAW COLLEGE [DESSNFLC],Pune</td>
    <td>F.C ROAD</td>
    <td>27,000</td>
    <td>60%</td>
    <td>020-30866401</td>
    <td><a href="http://www.deslaw.edu.in/">http://www.deslaw.edu.in/</td>
    <td>8.2/10</td>
  </tr>
 <tr>
                                   
<input type=text placeholder="Enter SR.NO for interested college" name="cid"><br>
<div class="th">
<input type="submit" value="Submit"><br>
</div>
</table>
</form>

</body>
</html>