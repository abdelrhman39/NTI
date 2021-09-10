<?php
session_start();
require 'header.php';
require 'functions.php';


$errorMs=[];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name        = cleanEr($_POST['name']);
    $email       = cleanEr($_POST['email']);
    $password    = cleanEr($_POST['password']);
    $address     = cleanEr($_POST['address']);
    $gender      = @cleanEr($_POST['gender']);
    $linkedinUrl = cleanEr($_POST['linkedinUrl']);
    $imgProfile  = $_FILES['image'];

    //Start Validate Name
    if(!validateInput($name,'empty')){
        $errorMs['name']=' Name is Required , Please enter your Name';
    } elseif (!validateInput($name,'string')){
        $errorMs['name']= 'Name is NOT Characters , Please enter the name correctly';
    }
    // End Validate Name 

    //Start Validate Email 
    if(!validateInput($email,'empty')){
        $errorMs['email']=' Email is Required , Please enter your Email';
    }elseif(!validateInput($email,'validateEmail')){
        $errorMs['email']= 'Email is NOT Valid , Please enter the Email correctly';
    }
    // End Validate Email

    //Start Validate Password 
    if(!validateInput($password,'empty')){
        $errorMs['password']=' Password is Required , Please enter your password';
    }elseif(!validateInput($password,'password')){
        $errorMs['password']= 'Please enter the password correctly , Enter more than 8 letters and numbers';
    }
    // End Validate Password

    //Start Validate Address 
    if(!validateInput($address,'empty')){
        $errorMs['address']=' address is Required , Please enter your address';
    }elseif(!validateInput($address,'address')){
        $errorMs['address']= 'Please enter the address correctly , Enter more than 10 Characters';
    }
    // End Validate Address
    

    //Start Validate Gender 
    if(!validateInput($gender,'empty')){
        $errorMs['gender']=' Gender is Required , Please enter your Gender';
    }
    // End Validate Email


    //Start Validate linkedin Url 
    if(!validateInput($linkedinUrl,'empty')){
        $errorMs['linkedinUrl']=' linkedin Url is Required , Please enter your linkedin Url';
    }elseif(!validateInput($linkedinUrl,'linkedinUrl')){
        $errorMs['linkedinUrl']= 'Please enter the linkedin Url correctly ';
    }
    // End Validate linkedin Url


    if(!validateInput($imgProfile['name'],'empty')){
        $errorMs['img']=' Image is Required , Please enter your Image Profile';
    }



    if(!empty($errorMs)){
        foreach($errorMs as $value){
            echo '<div class="alert alert-danger" role="alert">'.$value.'</div>';
        }
    }else{
        $imgProfile=uploadImg($imgProfile);
         if($imgProfile){
            
            $_SESSION['userData'] = [
                'name'        =>  $name ,
                'email'       =>  $email,
                'password'    =>  $password,
                'address'     =>  $address,
                'gender'      =>  $gender,
                'linkedinUrl' => $linkedinUrl,
                'Image'       => $imgProfile
            ];
            header('location:profile.php');
         }

    }
}
    








require 'footer.php';

?>