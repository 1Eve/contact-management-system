<?php
include 'config.php';
// get the id
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `contact` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: view_contacts.php');
        // echo "Deleted successfully";
    }else {
        die(mysqli_error ($con));
    }
}
?>