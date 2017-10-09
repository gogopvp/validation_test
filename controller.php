<?php


include ("validation.php");

$curentData = new Validation($_POST['email'],$_POST['number']);
//unset($_POST['email'],$_POST['number']);
if($curentData->phoneNumberValidation()===TRUE and $curentData->emailValidation()===TRUE){
    echo "URAAA";
}else{
    $error = $curentData->getError();
    include ("index.php");
}