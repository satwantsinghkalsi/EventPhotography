<?php

session_start();
$username="";
$password="";
$front=$_POST["front"];
if(!empty($_POST["username"])){
    $username=$_POST["username"];

}
if(!empty($_POST["password"])){
    $password=$_POST["password"];

}
$flag='';
if ($username=="" || $password=="") {
    $flag= 'false';
}
else{
    $connection=mysqli_connect('localhost','root','root','event_photography');
    if(!$connection){
        die('Could not connect'.mysqli_error($connection));
    }
    $sql="select firstname,lastname,password,auth_type from customer where email='$username'";
    // echo $sql;
    $result=mysqli_query($connection,$sql);
    mysqli_close($connection);

    if(is_null($result)){
        $flag= 'false';
    }
    else{
        $row=mysqli_fetch_array($result);
        //  echo $row['password'].'  '.password_hash($password,PASSWORD_DEFAULT);
        if($password==$row['password'] && $row['auth_type']=='1'){
            session_regenerate_id(true);
            $_SESSION["email"]=$username;
            $_SESSION["name"]=$row['firstname'];
            session_write_close();
            header('Location: ../Admin/orders.html');

        }
        else if(password_verify($password,$row['password']) && $row['auth_type']=='0'){
            session_regenerate_id(true);
            $_SESSION["email"]=$username;
            $_SESSION["name"]=$row['firstname'];
            session_write_close();
            $flag= 'true';
        }
        else if(password_verify($password,$row['password']) && $row['auth_type']=='0' && $front=="yes"){
            session_regenerate_id(true);
            $_SESSION["email"]=$username;
            $_SESSION["name"]=$row['firstname'];
            session_write_close();
            header('Location: ../Admin/customer_home.html');
        }
        else if ($front=="yes") {
            header('Location: mainlogin.php');
        }
        else{
            $flag='false';
        }


    }


}
echo $flag;
