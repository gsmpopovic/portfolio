<?php 
function submit_msg(){

// Connect to DB
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'contacts';
    $connection = mysqli_connect($host, $username, $password, $database);

    if (!$connection) {
        echo "Error: ".mysqli_error($connection);
    } else {

    //Form inputs

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        // MYSQL query
        $sql="INSERT INTO `info`(`id`, `firstName`, `lastName`, `email`, `msg`) 
        VALUES ('$firstName',
        '$lastName', 
        '$email',
        '$msg')";
    }

    if (mysqli_query($connection, $sql)) {
        echo "Form sent!";
    }
    else{
    echo "Error: " .mysqli_errno($connection);
    }
    mysqli_close($connection);
    header('Location: contact.php');

}

if (isset($_POST['submit'])){
    submit_msg();
}
?>