<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/main.css">
        <title>Contact Form</title>
    </head>

    <header>
        <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
</nav>
    </header>
    <section>
        <h1>
            Contact Form
        </h1>
    </section>



<section class="form">


<form method="POST" action="">
    
<input type="text" name ="first_name" placeholder="First name" id="first_name" autocomplete="off" required>

<input type="text" name="last_name" placeholder="Last name" id="last_name" autocomplete="off" required>
<select name="gender" id="gender" required>
<option value=0>...</option>
    <option value="M">Male</option>
    <option value="F">Female</option>
    <option value="X">Others</option>
</select>

<input type="email" name="email" placeholder="Email" id="email" autocomplete="off" required>


<input type="text" name="country" placeholder="Country" id="country" autocomplete="off" required>

<select name="subject" id="subject" required>
<option value=0>...</option>
    <option value="hardware">Hardware</option>
    <option value="software">Software</option>
    <option value="others">Others</option>
</select>
<textarea type="text" name="message" placeholder="Message" id="message" autocomplete="off" required ></textarea>

<input input name="submit" value="Submit" type="submit" class="form__button" >
</form>
<?php
include './phpscripts/formValidate.php';

validateForm($_POST);


// MAGIC IT WORKS (BUT ONLY IN UR TINY HEAD)
?>

    
    </section>
    </html>
