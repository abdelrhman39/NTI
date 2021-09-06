<?php
function checkChar($char){
    $chars = ['a','b','z'];
    $result = array_search($char,$chars);
    $leChar =count($chars);
    
    
    if($result == (--$leChar)){
        echo $chars[0];
    }else{
        echo $chars[++$result];
    }
}
checkChar('z');



echo '<br>';





function getFileName($path){
    echo basename($path);
}

getFileName('www.example.com/public_html/index.php');





?>