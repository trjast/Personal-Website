<?php
if ($_POST) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $text  = $_POST['text'];
    
    //send email   
    mail("trevor@sociallytied.in", "website enquiry", $text, "From:" . $email);
}

?>