<?php
$messenger_name = trim($_POST['Name']);
$messenger_email = trim($_POST['Email']);
$messenge = trim($_POST['Message']);

//echo $messenger_name . ' ' . $messenger_email . ' ' . $messenge;

if(!$_POST['Name'] || !$_POST['Email'] || !$_POST['Message']){
    require_once '../Model/Error.php';
    $missing_error = new Error();
    return $missing_error->MissingFormInfo($_POST['Name'], $_POST['Email'], $_POST['Message']);
}else{
    //mail("anthony@anthonykroberts.com",$messenger_email . ' ' . $messenger_name ,$messenge);
    require_once '../Controllers/EmailsController.php';
    $email = new EmailsController();
    $email->ContactEmailsToDatabase($messenger_name, $messenger_email, $messenge);
    echo 'Your Message Has Been Successfully Sent!!';
}
