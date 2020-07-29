<?php 
function submit_msg(){

// Connect to DB
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "contacts";
    $table="info";
    $connection = mysqli_connect($host, $username, $password, $database);

    if (!$connection) {
        echo "Error: ".mysqli_error($connection);
        die();
    } else {

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

    if (mysqli_query($connection, $sql)) {
        echo "<div> Form sent! </div>";
    }
    else{
    echo "Error: " .mysqli_errno($connection);
    }
    
    mysqli_close($connection);

    header("location: contact.php");

}

if (isset($_POST['submit'])){
    submit_msg();
}
?>