<!DOCTYPE html>
<?php
	require_once 'validate.php';
  require 'name.php';
  
?>
<html>
  <head>
  <link rel="stylesheet" href="bookingstyle.css">
    <title>Booking </title>
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
      <li><a href="booking.php" class="active">reserve</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="contactus.php">contact us</a></li> 
    </ul>
</nav>
           </div>
        </div>
    </header>
    
     <div class="show">
       <div class="image">
         <img src="markus-spiske-g5ZIXjzRGds-unsplash.jpg" alt="" width="400px" height="300px">
         <p> <h1>premium room</h1> <br>
         <ul>
         <li>with tv</li>
         <li>multi bedroom</li>
         <li>multi persons</li>
         <li><h2>1400/a night</h2></li>
         </ul>
         </p>
       </div>
       <div class="image">
         <img src="morgan-lane-iMnSqmT2RGE-unsplash.jpg" alt="" width="400px" height="300px">
         <p> <h1>double bedroom</h1> <br>
         <ul>
         <li>with  tv</li>
         <li>two bedrooms</li>
         <li>2 persons</li>
         <li><h2>800/a night</h2></li>
         </ul>
         </p>
       </div>
       <div class="image">
         <img src="olexandr-ignatov-w72a24brINI-unsplash.jpg" alt="" width="400px" height="300px">
         <p> <h1>regular room</h1> <br>
<ul>
  <li>with out tv</li>
  <li>single bedroom</li>
  <li>1 person</li>
  <li><h2>500/a night</h2></li>
</ul>
         </p>
       </div>
     </div>

     <div class="fo">
      <form action="reserve.php" method="post">
        <label >checkin Date</label>
        <input type="date" id="cindate" name="checkin" required><br>
        <label >checkout Date</label>
        <input type="date" id="coutdate" name="checkout" required><br>
        <label >persons</label>
        <input type="number" id="person" name="occupant" required><br>
       <!-- <label >room type</label> -->
        <input type="hidden" id="hd" name="hd" required><br>
        <label >Accomodation</label>
        <select id="Accomodatation" name="Accomodation" onchange="validate();" required>
          <option value="1400">premium</option>
          <option value="500">Regular</option>
          <option value="800">double</option>
        </select><br>
        <label >price</label>
        <input type="text" id="price" name="price" required><br>
        <input type="submit" value="book now" name="book" onclick="validation(this.form)"><br>
      </form>
      <button  style="width: 100px; background-color: red; color: white; padding: 14px 20px;
  margin: 8px 0;
  border: none;
  margin-left: 200px;
  border-radius: 4px;"><a style="text-decoration:none; color:white;" href="logout.php"> Logout</a></button>
    </div>
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
               function validation(form){
                var e=document.getElementById("cindate").checkValidity();
                var d=document.getElementById("coutdate").checkValidity();
                if(e==false||d==false||
                form.occupant.value==""||
                form.price.value==""||
                form.hd.value==""||
                document.form.accomodatation.selectedIndex==0)
                alert("form invalid")
                else alert("form valid")
               }
        
        </script>
     <footer>
       <div class="cpy">
         <p>copy right  all rights reserved 2019</p>
       </div>
   <div class="icons">
   <ul>
       <li><a href="#"> <img src="email_socialnetwork_20049.ico" alt=""> </a></li>
       <li><a href="#"> <img src="facebook_socialnetwork_20047.ico" alt=""> </a></li>
       <li><a href="#"> <img src="instagram_socialnetwork_20033.ico" alt=""> </a></li>
       <li><a href="#"> <img src="social_Twitter_38.ico" alt=""> </a></li>
   </ul>
   </div>
     </footer>
   </body>
 </html>
