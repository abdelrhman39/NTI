<?php



$units = 149.990;



////////////////// Start If Condition ////////////////////

if($units <= 99.99){

        $result = $units * 3.50;
        echo $result.'$'.' Unit Less than 50 , 3.50/unit';

}elseif($units >= 100 && $units < 150){

        $result = $units * 4.00;
        echo $result.'$'.' Unit Greater than 100 , 4.00 /unit';

}elseif($units >= 150){

        $result = $units * 4.00;
        echo $result.'$'.' Unit Greater than 150 , 6.50 /unit';
}else{
        echo 'welcome, looks like you forgot to write the units';
}

////////////////// End If Condition ////////////////////


echo '<br>';

////////////////// Start Switch Case Condition ////////////////////

switch( $units ){
        case ($units <= 99.99):
                $result = $units * 3.50;
                echo $result.'$'.' Unit Less than 50 , 3.50/unit';
                break;
        case ($units >= 100 && $units < 150):
                $result = $units * 4.00;
                echo $result.'$'.' Unit Greater than 100 , 4.00 /unit';
                break;
        case ($units >= 150):
                $result = $units * 4.00;
                echo $result.'$'.' Unit Greater than 150 , 6.50 /unit';
                break;
        default:
                echo 'welcome, looks like you forgot to write the units';
        break;
}

////////////////// End Switch Case Condition ////////////////////











?>