<?php
$emails = array("hello@yahoo.com","world@php.com","student@guc.edu.eg","hossam.meligy@guc.edu.egu.eg");
$passwords= array("123","000","101","hallo");
$email = $_POST['email'];
$password = $_POST['password'];

for($i=0; $i <= count($emails); $i++){ 
    
    if ($i+1>count($emails)) {
        echo "please registr first";
    break;
    }
    elseif($email == $emails[$i] && $password == $passwords[$i]){
        echo "<3 Welcome <3";
        $i = count($emails);
        }
}
?>
