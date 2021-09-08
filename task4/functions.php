<?php

function cleanEr($input)
{
    $input = trim($input);
    $input = htmlspecialchars($input);
    $input = stripslashes($input);

    return $input;
}
function validateInput($input,$flag){
    $status = true;
    
     switch ($flag) {
        case 'empty':
             if(empty($input)){
               $status = false;
             }
             break;
    
        case 'string': 
            if(!preg_match('/^[a-zA-Z\s]*$/',$input)){
                $status = false;
            }
           break;
    
        case 'validataEmail': 
            if(!preg_match('/^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/',$input)){
                $status = false;
            } 
            break; 
    
    
        case 'password': 
            if(!preg_match('/^[0-9A-Za-z!@#$%]{6,15}$/',$input)){
                $status = false;
            }
            break;

        case 'address': 
            if(!preg_match('/^[0-9A-Za-z_\s]{10,20}$/',$input)){
                $status = false;
            }
            break;

            case 'linkedinUrl': 
                if(!preg_match("/^(http|https|ftp):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+.(com|org|net|dk|at|us|tv|info|uk|co.uk|biz|se)$)(:(\d+))?\/?/i",$input)){
                    $status = false;
                }
                break;
       }
        return $status;
    }


    function uploadImg($img){
    
        $imge_profile = $img;
        $imgName     = $imge_profile['name'];
        $imgTemp      = $imge_profile['tmp_name'];
        $imgType      = $imge_profile['type'];
        
        $Ext = ['png','jpg','jpeg'];
        $extarctArr = explode('/', $imgType);
     
        if (in_array($extarctArr[1], $Ext)) {
            $finalPath =   rand().time().'.'.$Ext[1];
            $imgPath = './uploads/'.$finalPath;
             
            if (move_uploaded_file($imgTemp, $imgPath)) {
                
                return  $imgPath;
                
            } else {
                echo 'Error In Uploading Try Again';
            }
        }else{
            echo '<div class="alert alert-danger" role="alert">This is not a picture, please patch a picture</div>';
            sleep(4);
            header('location:index.php');
        }

    }







?>