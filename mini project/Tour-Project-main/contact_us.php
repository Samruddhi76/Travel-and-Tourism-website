<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="tour";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];








    $sql = "  CREATE TABLE contact (
        id INT AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(100),
        email VARCHAR(20),
        Phone VARCHAR(20),
        Subject VARCHAR(100),
        Message VARCHAR(100)";

    $sql="Insert into contact(Name,Email,Phone,Subject,Message) values ('$name','$email','$phone','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "We will contact you soon";
    mysqli_close($conn);
 
?>
