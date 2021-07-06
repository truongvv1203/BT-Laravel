<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login" method="post">
        @csrf
        <p>Email: </p>
        <input type="text" placeholder="Enter the email"> <br> <br>
        <p>Password: </p>
        <input type="text" placeholder="Enter the password">
        <input type="submit" placeholder="Submit">
    </form>
</body>
</html>