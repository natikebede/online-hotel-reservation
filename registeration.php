<?php
$servername = "localhost";
$username = "prime";
$password = "123456";
$dbname = "hotel";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "connection successful <br>";
}
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $uname=$_POST["uname"];
    $sex=$_POST["male"];
    $adress=$_POST["address"];
    $pno=$_POST["pnumber"];
    $email=$_POST["email"];
    $passwords=$_POST["psw2"];
    $sql = "INSERT INTO registration (first_name, last_name,user_name,sex,address,phone_number,email,password)
    VALUES ('$fname','$lname','$uname','$sex','$adress','$pno','$email','$passwords')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert(New record created successfully);</script><br>";
    } else {
        echo "Error: " . " " . "<br>" . "<script>alert('please retry!!');</script>";
    }

    $sqll = "INSERT INTO login (user_name,password)
    VALUES ('$uname','$passwords')";
    if ($conn->query($sqll) === TRUE) {
        echo "<script>alert(New record created successfully);</script><br>";
    } else {
        echo "Error: " . " " . "<br>" . "<script>alert('please retry!!');</script>";
    }
    header('location:home.php');
    ?>
