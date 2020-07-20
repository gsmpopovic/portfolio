<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href='./style.css' type='text/css' rel='stylesheet'>
</head>
<body>
    <?php include('nav.php')?>
    <h1>Contact</h1>

    <h2>If you'd like to send me a message,</h2>
    <form action='index.php' method='POST'>
        <label>First name
            <br>
        <input type='text' name='firstName'placeholder='Enter your first name'></label>
        <br>
        <label>Last name
            <br>
        <input type='text' name='lastName'placeholder='Enter your last name'></label>
        <br>
        <label>E-mail
            <br>
        <input type='email'name='email'placeholder='Enter your e-mail'></label>
        <br>
        <label>Message
            <br>
        <textarea col='50' row='50' name='msg'placeholder="What's up?"></textarea></label>
        <br> 
    </form>
 <h2>If you'd like to schedule a call,</h2>
 <h3>Calendy</h3>
</body>
</html>