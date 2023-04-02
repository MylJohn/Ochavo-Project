<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // 1. Prints the first name and last name entered from the form.
    echo "Name: $firstname $lastname<br>";

    // 2. Prints the <email> entered from the form.
    echo "Email: $email<br>";

    // 3. Counts the number of characters from the password and displays it.
    echo "Password length: " . strlen($password) . "<br>";

    // 4. Checks if the password and confirm password is equal.
    if ($password === $confirm_password) {
        echo "Password and Confirm Password match<br>";
    } else {
        echo "Password and Confirm Password do not match<br>";
    }
} else {
    echo "Invalid request method";
}
?>
