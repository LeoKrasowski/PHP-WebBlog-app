<?php
    // print_r($_POST); provide ability to check items in array wiyh name POST
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if (trim($email) == '') {
    $error = 'Provide your Email';
        } elseif (trim($message) == '') {  
            $error = 'Provide your message';
        } elseif (strlen($message) < 5) {
            $error = 'Message must have more than 5 characters';  
        }

    if ($error != '') {
        echo $error;
        exit;
    }

    $subject = "=?utf-8?B?" . base64_encode("Test message") . "?="; //"=?utf-8?B?": This indicates that the encoding used is UTF-8 and that the content is Base64-encoded (B stands for Base64).
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=utf-8\r\n";
    mail('leokrasowski@gmail.com', $subject, $message, $headers);

    header('Location: /about.php');

?>