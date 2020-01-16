<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    $to = 'rauniyarbind@gmail.com';
    $subject = 'Response from websites';
    $message="Name : ".$name."\n"."phone :".$phone."\n"."wrote the following :"."\n\n".$msg;

$headers = "From:".$email;


if(mail($to,$subject,$message,$headers)){
 echo "<h1> Sent Successfully "."".$name.",we will contact you shortly</h1>";
}
else {
 "sorry, could not process submittion";
}

}
?>