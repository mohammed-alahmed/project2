<?php
$firstName =  mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName =   mysqli_real_escape_string($conn, $_POST['lastName']);
$email =      mysqli_real_escape_string($conn, $_POST['email']);

$errors =[
    'firstName'=>'',
    'lastName'=>'',
    'email'=>'',
];

if(isset($_POST['submit'])){
    //echo $firstName . ' ' . $lastName . ' ' . $email;

    if(empty($firstName)){
        $errors['firstNameError'] = 'ادخل الاسم';
        echo 'First name is empty';
    }
    if(empty($lastName)){
        $errors['lastNameError'] = 'ادخل الاسم الاخير';
        echo 'Last name is empty';
    }
    if(empty($email)){
        $errors['emailError'] = 'ادخل الايميل';

        echo 'Email is empty';
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'ادخل صحيح';  
        echo 'Invalid email format';

    }
    else{
        $sql = "INSERT INTO users (firstName, lastName, email) 
                VALUES ('$firstName', '$lastName', '$email')";

        if(mysqli_query($conn, $sql)){
            header('Location: ' . $_SERVER['php_self']);
            exit;
        }
        else{
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}