<!DOCTYPE html>
<?php require_once "connect.php"?>
<html>
  <head>
  <link rel="stylesheet" href="homepagestyle.css">

    <title>home page</title>
  </head>
  <body>
    <header>
        <div class="container">
            <div class="row">

<nav>
    <ul>
        <li><a href="home.php" class="active">Home</a></li>
      <li> <div class="dropdown">
  <span class="gallary">Gallary</span>
  <div class="dropdown-content">
    <a href="photos.php">photos</a>
    <a href="rooms.php">rooms</a>
  </div>
</div></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contactus.php">contact us</a></li>
    </ul>
</nav>
           </div>
        </div>
    </header>

    <div class="content-box">
      <ul>
  <li class="img"><h2>Classic<span>Hotel</span></h2>
<p>We believe in the satisfaction of our customers!!</p><br>
<p>enjoy a momerable days with our Hotel.we provide the best services for you and your family.
thank you for visiting us!!</p>
  </li>
      </ul>
      <div class="btncontainer">
        <div >
            <button class="login"onclick="document.getElementById('id02').style.display='block'" style="width:auto; ;">Login</button>
        </div>
  <div class="btn">
    <button class="register"onclick="document.getElementById('id01').style.display='block'" style="width:auto; ">register</button>
  </div>
  </div>
      </div>
  
      <div id="id02" class="modal">
  
        <form class="modal-content animate"  method="POST" name="loginForm">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="1486564400-account_81513.ico" alt="Avatar" class="avatar">
          </div>
      
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username"  name="uname" required autocomplete="off">
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password"  name="psw" required autocomplete="off">
              
            <button type="submit" onclick="loginCheck(loginForm)" name="login">Login</button>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
          <?php require_once 'login.php'?>
        </form>
      </div>
<div id="id01" class="modal">
  <form class="modal-content animate" name="signInForm" method="post" action="registeration.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label for="fname"><b>first name</b></label>
      <input type="text" placeholder="Enter firstname" name="fname" required autocomplete="off">

      <label for="lname"><b>last name</b></label>
      <input type="text" placeholder="Enter Lastname" name="lname" required autocomplete="off">

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required autocomplete="off">

      <label for="sex"><b>sex</b></label> <br> <br>
      <input type="radio" name="male" id="boy" value="male">   male
            <input type="radio" name="male" id="girl" value="female">   female <br> <br>
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address" required autocomplete="off">

      <label for="phone_number"><b>Phone number</b></label>
      <input type="text" placeholder="Enter phone_number" min="10" name="pnumber" id="phone" required autocomplete="off">

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required autocomplete="off">

      <label for="psw"><b>Password</b></label>
      <input type="password" min="8" placeholder="Enter Password" name="psw" id="pass" required autocomplete="off">
      <label for="psw"><b>Confirm Password</b></label>
      <input type="password" min="8" placeholder="Re-Type Password" name="psw2" id="pass2" required autocomplete="off">
      <button type="submit" onclick="signInCheck(signInForm)">submit</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<script type="text/javascript">

var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var lmodal = document.getElementById('id02');
window.onclick = function(event) {
    if (event.target == lmodal) {
        modal.style.display = "none";
    }
}

function loginCheck(loginForm){
if(loginForm.uname.value==""||loginForm.psw.value=="")
alert("invalid form")
else alert("form valid")
}

function signInCheck(signInForm)
{
if(signInForm.fname.value==""||signInForm.lname.value==""||
signInForm.uname.value==""||
(document.getElementById("boy").value.checked==false&&document.getElementById("girl").value.checked==false)||
signInForm.address.value==""||signInForm.pnumber.value==""||
signInForm.email.value==""||signInForm.email.value.indexOf('@', 0) == -1||
signInForm.psw.value!=signInForm.psw2.value){
  alert("invalid form")
}
else alert("form is valid")
}

</script>

<footer>
<div class="cpy">
  <p>copy right  all rights reserved 2019</p>
</div>
<div class="icons">
<ul>
<li><a href="www.gmail.com"> <img src="email_socialnetwork_20049.ico" alt=""> </a></li>
<li><a href="www.facebook.com"> <img src="facebook_socialnetwork_20047.ico" alt=""> </a></li>
<li><a href="www.instagram.com"> <img src="instagram_socialnetwork_20033.ico" alt=""> </a></li>
<li><a href="www.twitter.com"> <img src="social_Twitter_38.ico" alt=""> </a></li>
</ul>
</div>
</footer>
</body>
</html>
