<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="user_data.php" method="POST">
        <label for="name">
            Name: <input type="text" name="name">
        </label><br>
        <label for="email">
            Email <input type="email" name="email">
        </label><br>
        <label for="dob">
            Date of Birth <input type="date" name="dob">
        </label><br>
        <label for="gender">
            Gender <input type="text" name="gender">
        </label><br>
        <label for="Country">
            Country <input type="text" name="country">
        </label><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>