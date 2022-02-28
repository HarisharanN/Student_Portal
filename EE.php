<html>
<head>
<title>Electrical Engineering</title>
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
<h2>List of Electrical Engineering</h2>
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
    <td>51</td>
    <td>DY PATIL INSTITUTE OF TECHNOLOGY[DYPIT],PUNE</td>
    <td>PIMPRI</td>
    <td>1,15,000</td>
    <td>80%</td>
    <td>JEE-MAIN</td>
    <td>020 27805298</td>  
     <td><a href="https://engg.dypvp.edu.in/">https://engg.dypvp.edu.in/</td>
    <td>7.7/10</td>
  </tr>
  <td>52</td>
    <td>MIT ACADEMY OF ENGINEERING [MITAOE],PUNE</td>
    <td>ALANDI</td>
    <td>1,75,73</td>
    <td>75%</td>
    <td>JEE-MAIN</td>
    <td>020 30253500</td>  
    <td><a href="https://mitaoe.ac.in/">https://mitaoe.ac.in/</td>
    <td>7.5/10</td>
  </tr>
  <tr>
    <td>53</td>
    <td>JAYAWANTRAO SAWANT COLLEGE OF COLLEGE OF ENGINEERING [JSCOE] ,PUNE</td>
    <td>HADAPSAR</td>
    <td>1,12,500</td>
    <td>60%</td>
    <td>-- --</td>
    <td>-- --</td>
    <td><a href="https://jspmjscoe.edu.in/">https://jspmjscoe.edu.in/</td>
    <td>6.5/10</td>
  </tr>  
    <tr>
    <td>54</td>
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
    <td>55</td>
    <td>MAHARASHTRA INSITUTE OF TECHNOLOGY[MIT-WPU],PUNE</td>
    <td>KOTHURD,PAUD RD</td>
    <td>3,10,000</td>
    <td>75%</td>
    <td>JEE-MAIN</td>
    <td>020-71177104</td>
    <td><a href="https://mitwpu.edu.in/">https://mitwpu.edu.in/</a></td>
    <td>8.1/10</td>
  </tr>
    <tr>
    <td>56</td>
    <td>AISSMS,PUNE</td>
    <td>SHIVAJI NAGAR</td>
    <td>1,40,000</td>
    <td>70%</td>
    <td>JEE MAIN</td>
    <td>020 26058342</td>  
    <td><a href="https://aissmscoe.com/">https://aissmscoe.com/</td>
    <td>7.7/10</td>
  </tr> 
 <tr>
    <td>57</td>
    <td>KJ COLLEGE OF ENGINEERING & MANAGEMENT RESEARCH-[KJCOEMR],PUNE</td>
    <td>YEWALEWADI</td>
    <td>75,000</td>
    <td>65%</td>
    <td>JEE MAIN</td>
    <td>8446021199</td>  
    <td><a href="http://www.dypcoeambi.com/">http://www.dypcoeambi.com/</td>
    <td>8.1/10</td>
  </tr>
  <tr>
    <td>58</td>
    <td>SINHGAD INSTITUTE OF TECHNOLOGY[SIT],PUNE</td>
    <td>LONAVALA</td>
    <td>75,000</td>
    <td>55%</td>
    <td>MHT-CET</td>
    <td>+91-2114–673257</td>  
    <td><a href="http://cms.sinhgad.edu/sinhgad_engineering_institutes/sit_lonavala/about_institute.aspx">http://cms.sinhgad.edu</td>
    <td>7.2/10</td>
  </tr>
  <tr>
    <td>59</td>
    <td>D.Y PATIL COLLEGE OF ENGINEERING-[DYCOE],PUNE</td>
    <td>TALEGAON</td>
    <td>1,35,000</td>
    <td>75%</td>
    <td>MHT CET</td>
    <td>02114 306 228</td>  
    <td><a href="https://www.kjei.edu.in/kjcoemr/">https://www.kjei.edu.in/kjcoemr/</td>
    <td>7.8/10</td>
  </tr>
<input type=text placeholder="Enter SR.NO for interested college" name="cid"><br>
<input type="submit" value="Submit"><br> 
  
</table>
</form>
</body>
</html>
