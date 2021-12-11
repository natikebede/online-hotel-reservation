<!DOCTYPE html>

<html>
  <head>
    <title>Admin Page</title>
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
.gallary {
    background-color: none;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-content {
    background-color: darkturquoise;
    display: none;
    position: absolute;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: white;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
      display: inline;
     
}

.dropdown:hover .gallary {
    background-color: white;
    color: brown;
}
footer{
    background-color: darkturquoise;
    height: 80px;
    line-height: 80px;
margin-top: 240px;
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
  margin-right: 100px;
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
      
    </ul>
</nav>
           </div>
        </div>
    </header>

    <div class="container" style="width:500px;  margin-left:400px;">
    <form class="modal-content animate"  method="POST" name="loginForm">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username"  name="uname" required autocomplete="off">
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password"  name="psw" required autocomplete="off">
              
            <button type="submit" name="login">Login</button>
            </form>
          </div>
          <?php 
          $conn = new mysqli("localhost", "prime", "123456", "hotel") or die(mysqli_error());
          if(ISSET ($_POST['login'])){
            $username = $_POST['uname'];
            $password = $_POST['psw'];
            $query = $conn->query("SELECT * FROM `admin` WHERE `user_name` = '$username' && `password` = '$password'") or die(mysqli_error());
            $fetch = $query->fetch_array();
            $row = $query->num_rows;
            
            if($row > 0){
              session_start();
              $_SESSION['admin_id'] = $fetch['admin_id'];
              header('location:reserve.php');
            }else{
              echo "<center><labe style = 'color:red;'>Invalid username or password</label></center>";
            }
          }
          $conn->close();
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
