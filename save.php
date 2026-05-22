<?php

$conn = mysqli_connect("localhost","root","","nitinbhai");

if(!$conn){
    die("Connection Failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO contact(name,email,phone,message)
VALUES('$name','$email','$phone','$message')";

if(mysqli_query($conn,$sql)){

    echo "<script>
    alert('Message Sent Successfully','Thank you so much');
    window.location.href='contact.html';
    </script>";

}else{
    echo 'Data Not Inserted';
}

?>