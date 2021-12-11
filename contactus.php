<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactusstyle.css">
  </head>
  <body>
    <header>
        <div class="container">
           <div class="row">
<a href="#" class="logo"><img src="C:\Users\SPIKENARD\Desktop\doc\new\eiffel.ico" alt=""></a>
<nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li> <div class="dropdown">
  <span class="gallary">Gallary</span>
  <div class="dropdown-content">
    <a href="photos.php">photos</a>
    <a href="rooms.php">rooms</a>
  </div>
</div></li>
   
      <li><a href="about.php">About Us</a></li>
      <li><a href="contactus.php" class="active">contactus</a></li>
     
    </ul>
</nav>
           </div>
        </div>
    </header>
<div class="container-box">
  <div class="form">
    <h1 style="text-align:center;">contact us</h1>
  <form >
    <label for="fname">First Name</label> <br>
    <input type="text" id="fname" name="firstname" autocomplete="off"> <br>

    <label for="lname">Last Name</label> <br>
    <input type="text" id="lname" name="lastname" autocomplete="off"> <br>

    <label for="lname">Email</label> <br>
    <input type="email" id="email" name="email" autocomplete="off"> <br>

    <label for="comment">comment</label><br>
    <textarea name="comment" rows="8" cols="60"></textarea> <br>
    <input type="submit" value="Submit" onclick="check(this.form)">
  </form>
</div>

    <div class="icon">
      <img src="note-task-comment-message-edit-write_108613.ico" alt="" width="550px" height="550px">
    </div>
</div>
<script type="text/javascript">
function check(form)
{
if (form.firstname.value == ""||form.lastname.value == ""||
form.email.value == "" || form.email.value.indexOf('@', 0) == -1||form.comment.value=="")
  alert("invalid form!")
else
alert("form filled correctly !!");
}
</script>
<div class="location" >
<div>
  <dl>
      <dt><img src="Whatsapp_icon-icons.com_60504.ico" alt="" width="60px" height="60px"> </dt><dd>+2557896543</dd>
    <dt> <img src="email_socialnetwork_20049.ico" alt="" width="60px" height="60px"></dt><dd><a href="www.classichotel@gmail.com">www.classichotel@gmail.com</a></dd>
    <dt><img src="facebook_socialnetwork_20047.ico" alt="" width="60px" height="60px"> </dt><dd><a href="www.classichotel@gmail.com">www.facebook.com/classichotel</a></dd>
    <dt><img src="instagram_socialnetwork_20033.ico" alt="" width="60px" height="60px"> </dt><dd><a href="www.instagram.com/classichotel">www.instagram.com/classichotel</a></dd>
    <dt><img src="social_Twitter_38.ico" alt="" width="60px" height="60px"> </dt><dd><a href="www.twitter.com/classichotel">www.twitter.com/classichotel </a></dd>
  </dl>
</div>
<div>
    <iframe width="700" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7919.207736454356!2d38.490192197684095!3d7.055745138786302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17b14f8d4201a3cd%3A0x91ececf933e7c24f!2z4Yuo4YiA4YuL4YizIOGLqeGKkuGJqOGIreGIsuGJsiDhiIbhibThiI0!5e0!3m2!1sam!2set!4v1576326496472!5m2!1sam!2set" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

</div>
  <footer>
    <div class="cpy">
      <p>copy right  all rights reserved 2019</p>
    </div>
 <div class="icons">
 <ul>
    <li><a href="#"> <img src="email_socialnetwork_20049.ico" alt="" > </a></li>
    <li><a href="#"> <img src="facebook_socialnetwork_20047.ico" alt=""> </a></li>
    <li><a href="#"> <img src="instagram_socialnetwork_20033.ico" alt=""> </a></li>
    <li><a href="#"> <img src="social_Twitter_38.ico" alt=""> </a></li>
 </ul>
 </div>
  </footer>
  </body>
</html>
