<?php
$link = mysqli_connect("localhost", "root", "", "contactform");

if($link == false) {
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
else {
    $sql = 'SELECT * FROM contact_info';
    $result = mysqli_query($link, $sql) or die(mysqli_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/contact_fetch.css">
    <title>Contact Details</title>
</head>
<body class="bg-body-secondary">
    <h2 class="text-center my-4">Contact Details</h2>
    <div class="container-fluid">
    <table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">User ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Message</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($result)>0) {

            while($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                <td>'.$row["user_id"].'</td>
                <td>'.$row["firstName"].'</td>
                <td>'.$row["lastName"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["phoneNumber"].'</td>
                <td>'.$row["messages"].'</td>
                </tr>';
            }
        }
        
        ?>
    </tbody>
    </table>
    </div>
</body>
</html>