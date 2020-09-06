<?php 
function submit_msg(){

// Connect to DB
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "contacts";
    $table="info";
    $connection = new mysqli($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    else {

    //Form inputs with sanitization 

    $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $msg = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);

        // MYSQL query
        $sql="INSERT INTO $table(firstName, lastName, email, msg) 
        VALUES ('$firstName',
        '$lastName', 
        '$email',
        '$msg')"; 
    }

    if ($connection->query($sql)) {
        echo "Form sent!";
    }
    else{
    echo "Error: " .$connection->errno();
    }
    
    $connection->close();

    header("location: contact.php");

}

if (isset($_POST['submit'])){
    submit_msg();
}
?>