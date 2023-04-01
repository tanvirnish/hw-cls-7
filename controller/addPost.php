<?php

session_start();

// *input collect
$title = $_REQUEST['title']; 
$detail = $_REQUEST['detail'];
$author = $_REQUEST['author'];


$errors = [];

if( empty($title)){
    $errors ['title_error'] = "plase submit your title";
}
else if(strlen ($title) >=50){
    $errors ['title_error'] = "Sorry you wrote more than 5o words!!";
}
if (empty($detail) ){
    $errors ['detail_error'] = "plase submit your deatils";
   
}

if (count($errors) > 0){
    // * REDIRECT BACK
    $_SESSION['form_errors'] = $errors;
    $_SESSION ['old']= $_REQUEST;
    header("Location: ../index.php");
}
else{

}