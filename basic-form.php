<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="basic-form.css">
    <title>Basic Form</title>
</head>

<body>
    <h1>Register Form - PHP.</h1>

    <form action="db-table.php" id="basicForm" method="post">

        <label for="id">id:</label> <br>
        <input type="text" name="id"> 
        <br>

        <label for="user">Username:</label><br>
        <input type="text" name="user" id="user"> 
        <br>

        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email">
        <br>

        <label for="pass">Password:</label><br>
        <input type="password" name="pass1" id="pass1">
        <br>

        <input type="submit" value="send" id="button"> 
        <p id="warning"></p>



    </form>

</body>

<script src="basicform.js"></script>

</html>
