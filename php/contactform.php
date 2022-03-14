<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['fullName'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "gisssellepetty@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from".$name.".\n\n".$message;

    mail($mailTo,$subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
?>