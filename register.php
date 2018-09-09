<!DOCTYPE html>
<html>
<style>
.city {
  background-color: MediumSeaGreen  ;
  color: black;
  padding: 10px;
} 
</style>

<body style="background-color:powderblue;">
<h2><a href="url">Home</a></h2>

<center><canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas></center>


<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.font = "30px Arial";
ctx.strokeText("Run for ตุ๊ดตู่",10,50);
</script>
 
<center><h1 style="background-color:rgb(240, 100, 50);">Register</h1></center>
<form method="post" action="result.php"> 

     <center>         First name:<br>
    <input type="text" name="Firstname" value="">
  <br>
               Last name:<br>
  <input type="text" name="Lastname" value="">
  <br>
               E-mail:<br>
  <input type="text" name="Email" value="">
  <br>
               Number:<br>
  <input type="text" name="Number" value="">
  <br>
               Age:<br>
  <input type="text" name="Age" value="">
  <br>
               Address:<br>
  <input type="text" name="address" value="">
  <br>
                           Disease:<br>
  <input type="text" name="Disease" value="">
  <br>
  
   
</center> 


<center><h2>Gender</h2></center>

  <center><input type="radio" name="gender" value="male" checked> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          <input type="radio" name="gender" value="other"> Other <br><br>
</center> 
 
 
<center><h3>เคยวิ่งมาราธอนไหม</h3>


<input type="checkbox" name="" value="Yes">Yes
<br>
<input type="checkbox" name="" value="No">No
<br><br>
<input type="submit" name="submit" value="submit">
 </center>
</form>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid tomato;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: MediumSeaGreen;
}
</style>
</head>
<body>



<h2 style="background-color:MediumSeaGreen;">รายละเอียด</h2>

<table>
  <tr>
    <th>Marathon</th>
    <th>Half Marathon</th>
    <th>Mini Marathon</th>
  </tr>
  <tr>
    <td>ระยะทาง   :   50     Km.</td>
    <td>ระยะทาง   :   25     Km.</td>
    <td>ระยะทาง   :   10     Km.</td>
  </tr>
  <tr>
    <td>ราคา  500  บาท</td>
    <td>ราคา  250  บาท</td>
    <td>ราคา  150  บาท</td>
  </tr>
  <tr>
    <td>รางวัล</td>
    <td>รางวัล</td>
    <td>รางวัล</td>
  </tr>
  <tr>
    <td>ถ้วยรางวัล อันดับ 1-5 ทุกกลุ่มอายุ</td>
    <td>ถ้วยรางวัล อันดับ 1-5 ทุกกลุ่มอายุ</td>
    <td>ถ้วยรางวัล อันดับ 1-5 ทุกกลุ่มอายุ</td>
  </tr>
  
</table>



<h2 style="color:blue;">สถานที่</h2>
<h2 class="city">นครปฐม >>      มหาวิทยาลัยศิลปากร (วิทยาเขตพระราชวังสนามจันทร์) </h2><br><br>
<h2 style="color:blue;">แผนที่</h2><br>

<img src="http://www.chem.sc.su.ac.th/tcho13/campus_map.png" alt="Italian Trulli" wide="600" height="500">







</body>
</html>
