<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/forms.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_contact</title>
</head>

<body>

    <div class="container">
    <a class="add-user" href="index.php">Add User</a>
<!-- Table containing conatct info -->
        <table>
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from contact";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        $name = $row["name"];
                        $email = $row["email"];
                        $phone = $row["phone"];
                        echo '
                        <tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $phone . '</td>
                    <td>
                    <button class="btn btn-primary"><a href="update_contact.php? updateid='.$id.'" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete_contact.php? deleteid='.$id.'"class="text-light">Delete</a></button>
                    </td>
                    </tr>';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>
</body>

</html>