<?php

session_start();

$author = $_REQUEST['author'];
$title = $_REQUEST['title'];
$details = $_REQUEST['details'];
$errors = [];

if(empty($author)){
    $errors['author_error'] = 'Enter your name'; // echo "author koi?";
} else if(strlen($author) > 25){
    $errors['author_error'] = 'Invalid author';
}

if(empty($title)){
    $errors['title_error'] = 'Enter post tilte';
}else if(strlen($author) > 50){
    $errors['title_error'] = 'Invalid title';
}

if(empty($details)){
    $errors['details_error'] = 'Enter post details';
}else if(strlen($author) > 50){
    $errors['details_error'] = 'Invalid details';
}

if(count($errors) > 0){
    // backward(redirect) header function= transfer one page to another page
    // request data save
    $_SESSION['old'] = $_REQUEST;
   
   //error data save
   $_SESSION['form_errors'] = $errors; 
   header("location: ../index.php ");

} else{
    echo "Your post successfully uploaded";
}