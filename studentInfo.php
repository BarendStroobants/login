<?php
require 'connection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Info</title>
</head>
<body>

<h1>Student Info</h1>

<table style="width: 90%">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Pref. Lang.</th>
        <th>Pers. Page</th>
    </tr>
    <?php
    $sqlTable = 'SELECT id, first_name, last_name, email, preferred_language, linkedin FROM student ORDER BY ID';
    $con = openConnection();
    foreach ($con->query($sqlTable) as $row): ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['last_name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['preferred_language'] ?></td>
            <td><a href="profile.php?user=<?php echo $row['id']?>"><button>Visit Page</button></a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="insert.php"><button>Go Back To Form</button></a>

</body>
</html>
