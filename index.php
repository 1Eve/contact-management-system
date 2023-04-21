<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management System</title>
</head>

<body>
    <h1>Contact Management System</h1>
    <div class="container">
        <div class="p">
            <p>Hey there, fancy sharing your digits with us? Don't worry, we promise we won't be clingy! In all seriousness though, we'd love to stay in touch and keep you updated on all the cool stuff we're up to. And if you ever want to break up (delete your contact details), we totally get it and won't hold it against you. Your privacy is important to us, so we'll make sure to keep your information safe and secure. So go ahead, slide into our DMs and let's get this party started!</p>
        </div>
        <div class="form">
            <form action="index.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter Your Name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter Your Email">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required placeholder="Enter Your Phonenumber">
                <!-- <button name="submit">Add Contact</button> -->
                <input type="submit" name="submit" value="Add Contact">
            </form>
        </div>
    </div>
</body>

</html>
<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $sql = "insert into contact (name, email, phone) 
        values('$name', '$email', '$phone')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:view_contacts.php');
        // echo "Data inserted successfully";
    } else {
        die(mysqli_error($con));
    }
}
?>
