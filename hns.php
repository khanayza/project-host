<?php
if (isset($message)){
    foreach($message as $message){
        echo '<p class="message">' .$message. '</p>';
    }
}

$host = "localhost";
$user = "root";
$password = "";
$database = "coffeeshop";

// Connect to database
$conn = new mysqli($host, $user, $password, $database) or die ('Connection Field');

if(isset($_POST['submit'])){
    $n = $_POST['name'];
    $e = $_POST['email'];
    $n = $_POST['number'];
    $z = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO orderdetails (name, email, number, date) VALUES ('$n','$e','$n','$z')") or die ('field'); 

    if ($insert) {
        $message "Message submitted successfully!";
    } else {
        $message "Error: " ;
    }
}

$conn->close();
?>