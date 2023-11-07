<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);







function validateForm($_post) {

if (isset($_POST['submit'])) {
    
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $country = htmlspecialchars($_POST['country']);
    $subject = $_POST['subject'];
    $message = htmlspecialchars($_POST['message']);
    
    $filterFirstname = filter_var($first_name);
    $filterLastname = filter_var($last_name);
    $filterGender = filter_var($gender);
    $filterEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $filterCountry = filter_var($country,);
    $filterMessage = filter_var($message);
    
    
    $errors = [];
    
    if (empty($filterFirstname)) {
        $errors[] = 'Firstname is required';
    }
    if (empty($filterLastname)) {
        $errors[] = 'Lastname is required';
    }
    if ($gender = 0) {
        $errors[] = 'Gender is required';
    }
    if (empty($filterEmail)) {
        $errors[] = 'Email is required';
    }
    if (empty($filterCountry)) {
        $errors[] = 'Country is required';
    }
    if ($subject = 0) {
        $errors[] = 'Subject is required';
    }
    if (empty($filterMessage)) {
        $errors[] = 'Message is required';
    }
    
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<span class="error">' . $error . '</span>';
        }
    } else {
        
        
        
        echo "<h2>Thank you for your message!  $filterEmail</h2>";
        // header('Location: index.php');
    
    }}
    }
    
    ?>