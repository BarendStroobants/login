<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>

<h1>Profile Page</h1>

<h2><?php echo $_POST['username'] ?></h2>

<img src="<?php echo $_POST['avatar'] ?>" alt="profile picture">

<p>Welcome to your profile <?php echo $_POST['first_name'] . $_POST['last_name'] ?></p>

<a href="studentInfo.php"><button>Back To Student List</button></a>

</body>
</html>