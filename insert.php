<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>

<form method="POST">
    <label for="first_name">First name:</label>
    <input type="text" name="first_name">
    <br>
    <label for="last_name">Last name:</label>
    <input type="text" name="last_name">
    <br>
    <label for="username">Username:</label>
    <input type="text" name="username">
    <br>
    <label for="gender">Gender:</label>
    <input type="text" name="gender">
    <br>
    <label for="linkedin">LinkedIn:</label>
    <input type="text" name="linkedin">
    <br>
    <label for="github">Github:</label>
    <input type="text" name="github">
    <br>
    <label for="email">Email:</label>
    <input type="text" name="email">
    <br>
    <label for="preferred_language">Preferred language:</label>
    <input type="text" name="preferred_language">
    <br>
    <label for="avatar">Avatar:</label>
    <input type="text" name="avatar">
    <br>
    <label for="video">Video:</label>
    <input type="text" name="video">
    <br>
    <label for="quote">Quote:</label>
    <input type="text" name="quote">
    <br>
    <label for="quote_author">Quote author:</label>
    <input type="text" name="quote_author">
    <br>
    <button>submit</button>
</form>

<table style="width: 90%">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Pref. Lang.</th>
        <th>Pers. Page</th>
    </tr>
    <tr>
        <td>fetch id</td>
        <td><?php $statement = $pdo->query('SELECT first_name FROM student');
            foreach ($statement as $row)
            {
                echo $row['first_name'] . "\n";
            } ?></td>
        <td><?php $statement = $pdo->query('SELECT last_name FROM student');
            foreach ($statement as $row)
            {
                echo $row['last_name'] . "\n";
            } ?></td>
        <td><?php $statement = $pdo->query('SELECT email FROM student');
            foreach ($statement as $row)
            {
                echo $row['email'] . "\n";
            } ?></td>
        <td><?php $statement = $pdo->query('SELECT preferred_language FROM student');
            foreach ($statement as $row)
            {
                echo $row['preferred_languages'] . "\n";
            } ?></td>
        <td><?php $statement = $pdo->query('SELECT linkedin FROM student');
            foreach ($statement as $row)
            {
                echo $row['linkedin'] . "\n";
            } ?></td>
    </tr>
</table>



</body>
</html>
