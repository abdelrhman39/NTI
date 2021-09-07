<?php
echo '<link rel="stylesheet" href="css/bootstrap.min.css" />';
$errorMs=[];

function checkInput($input){
    $input = trim($input);
    $input = htmlspecialchars($input);
    $input = stripslashes($input);

    return $input;
}



if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name        = $_POST['name'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];
    $address     = $_POST['address'];
    $gender      = $_POST['gender'];
    $linkedinUrl = $_POST['linkedinUrl'];

    

    if(empty($name)){
        array_push($errorMs,'* Name Empty');
    }else{
        if(filter_var($name , FILTER_VALIDATE_INT)== true){
            array_push($errorMs,'* The name is not in character');
        }
    }

    if(empty($email)){
        array_push($errorMs,'* Email Empty');
    }else{
        if(filter_var($email , FILTER_VALIDATE_EMAIL)== false){
            array_push($errorMs,'* The Email is Not Valid');
        }
    }

    if(empty($password)){
        array_push($errorMs,'* Password Empty');
    }else{
        if(strlen($password) < 6){
            array_push($errorMs,'* Password is less than 6 characters');
        }
    }
    if(empty($address)){
        array_push($errorMs,'* Address Empty');
    }else{
        if(strlen($address) > 10){
            array_push($errorMs,'* Address is Greater than 10 characters');
        }
    }
    if(empty($gender)){
        array_push($errorMs,'* Gender Empty');
    }
    if(empty($linkedinUrl)){
        array_push($errorMs,'* Linkedin URL Empty');
    }else{
        if(filter_var($linkedinUrl , FILTER_VALIDATE_URL)== false){
            array_push($errorMs,'* The URL is Not Valid');
        }
    }
    



    if(!empty($errorMs)){
        foreach($errorMs as $value){
            echo '<div class="alert alert-danger" role="alert">'.$value.'</div>';
        }
    }else{
        
       $name  = checkInput($name);
       $address  = checkInput($address);
       $gender  = checkInput($gender);
       $linkedinUrl  = filter_var(checkInput($linkedinUrl),FILTER_SANITIZE_URL);
    

       ?>
<div class='container-fluid'>
    <table class="table table-striped table-dark mt-4">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Password</th>
            <th scope="col">address</th>
            <th scope="col">gender</th>
            <th scope="col">Linkedin URL</th>
        </tr>
    </thead>
    <tbody>
        <?php
        echo '<tr>
            <td>'.$name.'</td>
            <td>'.$password.'</td>
            <td>'.$address.'</td>
            <td>'.$gender.'</td>
            <td><a href="'.$linkedinUrl.'">'.$linkedinUrl.'</a></td>
        </tr>';
        ?>
       
    </tbody>
    </table>
</div>
       <?php
        
    }

}








?>