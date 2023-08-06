<?php 
include("connection.php");

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $email = $_POST['Email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];

    $sql_username = "SELECT * FROM `sign up` WHERE username = '$username'";
    $result_username = mysqli_query($conn, $sql_username);
    $count_username = mysqli_num_rows($result_username);

    $sql_email = "SELECT * FROM `sign up` WHERE email = '$email'";
    $result_email = mysqli_query($conn, $sql_email);
    $count_email = mysqli_num_rows($result_email);

    if ($count_username == 0 && $count_email == 0) {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO `sign up` (username, email, password) VALUES ('$username', '$email', '$hash')"; 

            $result_insert = mysqli_query($conn, $sql_insert);
            if ($result_insert) {
                header("location: welcome.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "<script> 
            alert('Passwords do not match');
            window.location.href= 'index.php';
            </script>";
        }
    } else {
        if ($count_username > 0) {
            echo "<script>
            alert('Username already exists!');
            </script>";
        }
        if ($count_email > 0) {
            echo "<script>
            alert('Email already exists!');
            </script>";
        }
    }
}
?>

