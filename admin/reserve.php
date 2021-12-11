<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
	$conn = new mysqli("localhost", "prime", "123456", "hotel") or die(mysqli_error());
?>
<html>
  <head>
    <title>HOME</title>
    <style>
    *,html,body{
    padding: 0%;
    margin: 0%;
}
header{
    background-color: darkturquoise;
    height: 120px;
    line-height: 120px;
    margin-bottom: 10px;
}
ul{
    list-style-type: none;
    margin-right:30px;
}
ul li{
    display: inline-block;
    padding: 10px;
}
nav{  
    float: right;
}
.logo img{
    height: 120px;
}
header nav ul li a{
    font-weight: bold;
    color: white;
    text-decoration: none;
    transition: all 0.6s ease-in;
    padding: 5px 20px;
    border: 1px solid transparent;
}
header nav ul li a:hover{
  background-color: aliceblue;
  color:brown;
}
header nav ul li .active{
  background-color: aliceblue;
  color:brown;
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
}

.dropdown:hover .dropdown-content {
    display: block;
}
footer{
    background-color: darkturquoise;
    height: 80px;
    line-height: 80px;
margin-top: 20px;
display: flex;
justify-content: space-between;
bottom: 0px;
}
footer p{
  margin-left: 15px;
}
footer ul{
    float: right;
}
footer ul li{
  display: inline-block;
  padding-left: 10px;
  list-style-type: none;
}
footer img{
    height: 50px;
    width: 50px;
}
.container2{
  width:500px;
  margin-left:120px;
}
input[type=text],
input[type=password],
input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 200px;
}
table tr td:last-child a{
  margin-right 15px;
}
    </style>
  </head>
<body>
    <header>
        <div class="container">
           <div class="row">
<a href="#" class="logo"><img src="C:\Users\SPIKENARD\Desktop\doc\new\eiffel.ico" alt=""></a>
<nav>
    <ul>   
    <li><a href="reserve.php" class="active">ACCOUNT</a></li>
      <li><a href="rooms.php" >ROOMS</a></li>
      <li> 
      <a href="adminlogout.php" >Logout</a>
      </li>
    </ul>
</nav>
           </div>
        </div>
    </header>

    <div class="container2">
    <form name="form1" method="post" action="">
    <label for="fname"><b>FILTER</b></label>
      <input type="text" placeholder="Enter FILTER NUMBER" name="num"  autocomplete="off">
      <label for="fname"><b>first name</b></label>
      <input type="text" placeholder="Enter firstname" name="fname"  autocomplete="off">

      <label for="lname"><b>last name</b></label>
      <input type="text" placeholder="Enter Lastname" name="lname"  autocomplete="off">

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname"  autocomplete="off">

      <label for="sex"><b>sex</b></label> <br> <br>
      <input type="radio" name="male" id="boy" value="male" >   male
            <input type="radio" name="male" id="girl" value="female" >   female <br> <br>
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address"  autocomplete="off">

      <label for="phone_number"><b>Phone number</b></label>
      <input type="text" placeholder="Enter phone_number" min="10" name="pnumber" id="phone"  autocomplete="off">

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email"   autocomplete="off">

      <label for="psw"><b>Password</b></label>
      <input type="password" min="8" placeholder="Enter Password" name="psw" id="pass"  autocomplete="off">
      <button type="submit" name="submit1">ADD USER</button>
      <button type="submit" name="submit2" onclick="return confirm('are you sure?');">DELETE</button>
      <button type="submit" name="submit3">UPDATE</button>
      <button type="submit" name="submit4">DISPLAY</button>
      <button type="submit" name="submit5">SEARCH</button>
  </form>
</div>

<?php
if(ISSET($_POST["submit1"])){
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $uname=$_POST["uname"];
  $sex=$_POST["male"];
  $adress=$_POST["address"];
  $pno=$_POST["pnumber"];
  $email=$_POST["email"];
  $passwords=$_POST["psw"];
  $sql = "INSERT INTO registration (first_name, last_name,user_name,sex,address,phone_number,email,password)
  VALUES ('$fname','$lname','$uname','$sex','$adress','$pno','$email','$passwords')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
} else {
  echo "Error: " . " " . "<br>" . "<script>alert('please retry!!');</script>";
}
}
if(ISSET($_POST["submit2"])){
  mysqli_query($conn,"DELETE from registration where customer_id='$_POST[num]'");
}
if(ISSET($_POST["submit3"])){
  $id=$_POST["num"];
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $uname=$_POST["uname"];
  $sex=$_POST["male"];
  $adress=$_POST["address"];
  $pno=$_POST["pnumber"];
  $email=$_POST["email"];
  $passwords=$_POST["psw"];
  $sql = "UPDATE registration SET first_name='$fname',last_name='$lname',user_name='$uname',sex='$sex',address='$adress',phone_number='$pno',email='$email',password='$passwords' WHERE customer_id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
if(ISSET($_POST["submit4"])){
  $res=mysqli_query($conn,"SELECT * from registration");
 echo "<table border=1>";
 echo "<tr>";
 echo "<th>"; echo "id"; echo "</th>";
 echo "<th>"; echo "firstname"; echo "</th>";
 echo "<th>"; echo "lastname"; echo "</th>";
 echo "<th>"; echo "username"; echo "</th>";
 echo "<th>"; echo "sex"; echo "</th>";
 echo "<th>"; echo "address"; echo "</th>";
 echo "<th>"; echo "phone"; echo "</th>";
 echo "<th>"; echo "email"; echo "</th>";
 echo "<th>"; echo "password"; echo "</th>";
 echo "</tr>";
 while ($row=mysqli_fetch_array($res)) {
  echo "<tr>";
  echo "<td>"; echo $row["customer_id"]; echo "</td>";
  echo "<td>"; echo  $row["first_name"]; echo "</td>";
  echo "<td>"; echo  $row["last_name"]; echo "</td>";
  echo "<td>"; echo  $row["user_name"]; echo "</td>";
  echo "<td>"; echo  $row["sex"]; echo "</td>";
  echo "<td>"; echo  $row["address"]; echo "</td>";
  echo "<td>"; echo  $row["phone_number"]; echo "</td>";
  echo "<td>"; echo  $row["email"]; echo "</td>";
  echo "<td>"; echo  $row["password"]; echo "</td>";
  echo "</tr>";
 }
 echo "</table>";
}
if(ISSET($_POST["submit5"])){
  $res=mysqli_query($conn,"SELECT * from registration where customer_id='$_POST[num]'");
 echo "<table border=1>";
 echo "<tr>";
 echo "<th>"; echo "id"; echo "</th>";
 echo "<th>"; echo "firstname"; echo "</th>";
 echo "<th>"; echo "lastname"; echo "</th>";
 echo "<th>"; echo "username"; echo "</th>";
 echo "<th>"; echo "sex"; echo "</th>";
 echo "<th>"; echo "address"; echo "</th>";
 echo "<th>"; echo "phone"; echo "</th>";
 echo "<th>"; echo "email"; echo "</th>";
 echo "<th>"; echo "password"; echo "</th>";
 echo "</tr>";
 while ($row=mysqli_fetch_array($res)) {
  echo "<tr>";
  echo "<td>"; echo $row["customer_id"]; echo "</td>";
  echo "<td>"; echo  $row["first_name"]; echo "</td>";
  echo "<td>"; echo  $row["last_name"]; echo "</td>";
  echo "<td>"; echo  $row["user_name"]; echo "</td>";
  echo "<td>"; echo  $row["sex"]; echo "</td>";
  echo "<td>"; echo  $row["address"]; echo "</td>";
  echo "<td>"; echo  $row["phone_number"]; echo "</td>";
  echo "<td>"; echo  $row["email"]; echo "</td>";
  echo "<td>"; echo  $row["password"]; echo "</td>";
  echo "</tr>";
 }
 echo "</table>";
}

?>
    <footer>
      <div class="cpy">
        <p>copy right  all rights reserved 2019</p>
      </div>
  <div class="icons">
  <ul>
      <li><a href="#"> <img src="new\email_socialnetwork_20049.ico" alt=""> </a></li>
      <li><a href="#"> <img src="new\facebook_socialnetwork_20047.ico" alt=""> </a></li>
      <li><a href="#"> <img src="new\instagram_socialnetwork_20033.ico" alt=""> </a></li>
      <li><a href="#"> <img src="new\social_Twitter_38.ico" alt=""> </a></li>
  </ul>
  </div>
    </footer>
    </body>
  </html>
