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
select,input[type=button],input[type=number],input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  margin-left: 200px;
  border-radius: 4px;
  cursor: pointer; align-items: center;
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
input[type=submit]:hover {
  background-color: #45a049;

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
      <li><a href="reserve.php" >ACCOUNT</a></li>
      <li><a href="rooms.php" class="active">ROOMS</a></li>
      
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
        <label >persons</label>
        <input type="number" id="person" name="occupant" ><br>
        <label >Accomodation</label>
        <select id="Accomodatation" name="Accomodation" onchange="validate();" >
          <option value="1400">premium</option>
          <option value="500">Regular</option>
          <option value="800">double</option>
        </select><br>
        <label >price</label>
        <input type="text" id="price" name="price" ><br>
       <!-- <label >room type</label> -->
        <input type="hidden" id="hd" name="hd" required><br>
      <button type="submit" name="submit1" class="submit">ADD ROOMS</button>
      <button type="submit" name="submit2" class="submit" onclick="return confirm('are you sure?');">DELETE</button>
      <button type="submit" name="submit3" class="submit">UPDATE</button>
      <button type="submit" name="submit4" class="submit">DISPLAY</button>
      <button type="submit" name="submit5" class="submit">SEARCH</button>
  </form>
</div>

<?php
if(ISSET($_POST["submit1"])){
    $type=$_POST["hd"];
    $person=$_POST["occupant"];
$price=$_POST["price"];

    $sqlroom = "INSERT INTO room (room_type,room_occupants,price)
    VALUES ('$type','$person','$price')";
    if ($conn->query($sqlroom) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if(ISSET($_POST["submit2"])){
  mysqli_query($conn,"DELETE from room where room_no='$_POST[num]'");
}
if(ISSET($_POST["submit3"])){
    $id=$_POST["num"];
    $type=$_POST["hd"];
    $person=$_POST["occupant"];
$price=$_POST["price"];
  $sql = "UPDATE room SET room_type='$type',room_occupants='$person',price='$price' WHERE room_no=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
if(ISSET($_POST["submit4"])){

  $res=mysqli_query($conn,"SELECT * from room");
 echo "<table border=1>";
 echo "<tr>";
 echo "<th>"; echo "room number"; echo "</th>";
 echo "<th>"; echo "room type"; echo "</th>";
 echo "<th>"; echo "room occupant"; echo "</th>";
 echo "<th>"; echo "price"; echo "</th>";
 echo "</tr>";
 while ($row=mysqli_fetch_array($res)) {
  echo "<tr>";
  echo "<td>"; echo $row["room_no"]; echo "</td>";
  echo "<td>"; echo  $row["room_type"]; echo "</td>";
  echo "<td>"; echo  $row["room_occupants"]; echo "</td>";
  echo "<td>"; echo  $row["price"]; echo "</td>";
  echo "</tr>";
 }
 echo "</table>";
}
if(ISSET($_POST["submit5"])){
    $id=$_POST["num"];
    $res=mysqli_query($conn,"SELECT * from room where  room_no=$id");
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>"; echo "room number"; echo "</th>";
    echo "<th>"; echo "room type"; echo "</th>";
    echo "<th>"; echo "room occupant"; echo "</th>";
    echo "<th>"; echo "price"; echo "</th>";
    echo "</tr>";
    while ($row=mysqli_fetch_array($res)) {
     echo "<tr>";
     echo "<td>"; echo $row["room_no"]; echo "</td>";
     echo "<td>"; echo  $row["room_type"]; echo "</td>";
     echo "<td>"; echo  $row["room_occupants"]; echo "</td>";
     echo "<td>"; echo  $row["price"]; echo "</td>";
     echo "</tr>";
    }
    echo "</table>";
}

?>
<script>
        function validate(){
          var x=document.getElementById("Accomodatation");
               var dis=x.options[x.selectedIndex].value;
               document.getElementById("price").value=dis;
               if(dis==1400){
                 document.getElementById("hd").value="premium";
               }
               else if (dis==800) {
                document.getElementById("hd").value="double";
               } else {
                document.getElementById("hd").value="regular";
               } 
        }
        </script>
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
