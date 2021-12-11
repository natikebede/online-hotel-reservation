
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
$type=$_POST["hd"];
    $checkin=$_POST["checkin"];
    $checkout=$_POST["checkout"];
    $person=$_POST["occupant"];
$price=$_POST["price"];

    $sqlroom = "INSERT INTO room (room_type,room_occupants,price)
    VALUES ('$type','$person','$price')";
    if ($conn->query($sqlroom) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sqlreserv = "INSERT INTO reservation (arrival_date,departure_date)
    VALUES ('$checkin','$checkout')";
    if ($conn->query($sqlreserv) === TRUE) {
        echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
header('location:home.php');
    ?>
