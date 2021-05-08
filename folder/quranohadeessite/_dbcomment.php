<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    // $gender = $_POST['gender'];
    // $age = $_POST['age'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    // $desc = $_POST['desc'];
    $sql = "INSERT INTO `comments`.`comments` (`name`,`email`, `comment`, `dt`) VALUES ('$name', '$email', '$comment', current_timestamp());";
    // echo $sql;
    // INSERT INTO `comments` (`sno`, `name`, `email`, `comment`, `dt`) VALUES ('1', 'hameed', 'example@gmail.com', 'this is the comment', current_timestamp());
    // INSERT INTO `comments` (`sno`, `name`, `email`, `comment`, `dt`) VALUES ('1', 'hameed', 'example@gmail.com', 'this is the comment', current_timestamp());
    // INSERT INTO `` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'testname', '23', 'male', 'example@gmail.com', '9999999999', 'this is a good value', current_timestamp());

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>