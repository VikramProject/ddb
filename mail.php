<?php

$query="Select Email from student where UID='$record'";
$result=mysqli_query($db_var,$query) or die(mysqli_error());
$res=$result->fetch_object();
    $email = $res->Email;

    require 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'onlinegrocerystores@gmail.com'; // SMTP username
    $mail->Password = 'nahibatanaja'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to
    $mail->setFrom('onlinegrocerystores@gmail.com', 'Online Grocery Stores');
    $mail->addAddress($email); // Add a recipient
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = "Form Approval";
    $mail->Body = "Form has been Approved You can collect";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if (!$mail->send())
    {
        echo "Sorry. The Mail could not be sent to $email Due to some network Issues. Please Try Again From The SignUp Process";
    }
    else
    {
        echo "Message has been sent to $email";
    }

?>
