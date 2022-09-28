<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Form</title>
    <style>

        h1 {
            font-style: italic;
            color: slategray;
        }
        label {
            color: palevioletred;
        }

    </style>
</head>
<body>
    <h1>Log Form - PHP.</h1>

    <form method="post" action="test-post.php">
        <label for="name">Username:</label>
        <input type="text" name="user"> 
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email">
        <br>

        <label for="pass">Password:</label>
        <input type="password" name="pass1">
        <br>
        <input type="submit" value="send">


    </form>

</body>
</html>