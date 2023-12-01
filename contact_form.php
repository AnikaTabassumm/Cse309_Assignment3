<?php
if(isset($_POST['send'])) {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phoneNumber'];
    $message=$_POST['message'];

    echo $fname;
    echo $lname;
    echo $email;
    echo $phone;
    echo $message;

    $link = mysqli_connect("localhost", "root", "", "contactform");

    if($link == false) {
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }

    $sql = "INSERT INTO contact_info(firstName, lastName, email, phoneNumber, messages) VALUES ('$fname', '$lname', '$email', '$phone', '$message')";
    if(mysqli_query($link, $sql)) {
        echo "Records added successfully.";
    }
    else {
        echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
    }

    mysqli_close($link);
}
?>