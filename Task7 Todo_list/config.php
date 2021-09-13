<?php


$server   = 'localhost';
$user     = 'root';
$password = '';
$db_Name  = 'NTI_todo_list';


$con = mysqli_connect($server,$user,$password,$db_Name) or die('Erorr Connection'.mysqli_connect_error());

require './helpers.php';

?>