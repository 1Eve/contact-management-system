<?php
//  database config file
    include 'config.php';
    // Getting the id
    $id=$_GET['updateid'];
    if (isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        

        $sql = "update `contact` set name='$name', email='$email', phone='$phone' where id=$id";
        $result = mysqli_query($con, $sql);
        if($result){
            // send user back to home contact page
            header('location:view_contacts.php');
            // echo "Data updated successfully";
        }else{
            die(mysqli_error ($con));
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Contact Management System</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
    

</head>

<body>
    <h1>Contact Management System</h1>
    <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required placeholder="Enter Your Name">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter Your Email">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required placeholder="Enter Your Phonenumber">
            <input type="submit" name="submit" value="Update Contact">
        </form>
</body>

</html>