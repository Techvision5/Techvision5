<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// Database Connection
    $conn = new mysqli('localhost','root','','techvision');
    if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into userinfodb(name, email, subject, message)values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$name, $email, $subject, $message);
        $stmt->execute();
        echo "Message Sent Successfully....";
        $stmt->close();
        
    }
?>

