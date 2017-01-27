<?php
/**
 * Created by PhpStorm.
 * User: satwa
 * Date: 12/1/2016
 * Time: 12:00 AM
 */
/*username:satwant
password:12345
rpassword:12345
email:satwantsingh22@gmail.com
fullname:Satwant Singh
phone:9726038564
gender:M
address:7777 McCallum Blvd, Apt 106
city:Dallas
country:AI
remarks:
card_name:878197832
card_number:1830298913880876
card_cvc:798
card_expiry_date:8139827
payment[]:1*/
session_start();
$username ="";
$password = "";
$rpassword = "";
$email = "";
$fullname = "";
$phone="";
$gender="";
$address= "";
$city="";
$country="";
$error=[];
$errorFlag=true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    if(empty($username)){
        $error["username"]="Please enter a correct username";
        $errorFlag=false;
    }
    $password = test_input($_POST["password"]);
    if(empty($password)){
        $error["password"]="Please enter a correct password";
        $errorFlag=false;
    }
    $rpassword = test_input($_POST["rpassword"]);
    if(empty($rpassword)){
        $error["rpassword"]="Should match the password";
        $errorFlag=false;
    }
    $email = test_input($_POST["email"]);
    if(empty($email)){
        $error["email"]="Please enter a correct email";
        $errorFlag=false;
    }
    $fullname = test_input($_POST["fullname"]);
    if(empty($fullname)){
        $error["fullname"]="Please enter your full name";
        $errorFlag=false;
    }
    $phone=test_input($_POST["phone"]);
    if(empty($phone)){
        $error["phone"]="Please enter your phone number";
        $errorFlag=false;
    }
    $gender=test_input($_POST["gender"]);
    if(empty($gender)){
        $error["gender"]="select a gender";
        $errorFlag=false;
    }
    $address= test_input($_POST["address"]);
    if(empty($address)){
        $error["address"]="Please enter your address";
        $errorFlag=false;
    }
    $city=test_input($_POST["city"]);
    if(empty($city)){
        $error["city"]="Please enter your city";
        $errorFlag=false;
    }
    $country=test_input($_POST["country"]);
    if(empty($country)){
        $error["country"]="Please select your country";
        $errorFlag=false;
    }
    $card_name=test_input($_POST["card_name"]);
    if(empty($card_name)){
        $error["card_name"]="Please enter name on the card";
        $errorFlag=false;
    }
    $card_number=test_input($_POST["card_number"]);
    if(empty($card_number)){
        $error["card_number"]="Please enter the card number";
        $errorFlag=false;
    }
    $card_cvc=test_input($_POST["card_cvc"]);
    if(empty($card_number)){
        $error["card_cvc"]="Please enter the cvc number";
        $errorFlag=false;
    }
    $card_expiry=test_input($_POST["card_expiry"]);
    /*if(empty($card_expiry)){
        $error["card_expiry"]="Please enter the expiration date";
        $errorFlag=false;
    }*/
    if ($errorFlag) {
        $con = mysqli_connect("localhost", "root", "root", "event_photography");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $firstname=explode(' ',$fullname)[0];
        $lastname=explode(' ',$fullname)[1];
        $query='insert into customer (email, password, firstname, lastname, gender, phone, address,auth_type) values("'.$email.'","'.password_hash($password,PASSWORD_DEFAULT).'","'.$firstname.'","'.$lastname.'","'.$gender.'","'.$phone.'","'.$address.'",0)';
        if ($con->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo $query;

        }
       $con->close();
    }
    echo json_encode($error);
}else{
    echo 'not post';
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}