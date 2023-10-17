<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
    <input type="text" name="name" placeholder="Enter Name">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// define a constant as such
// define("NAME", "Philip");
// const FIRST_NAME = 'Philip';
?>

</body>
</html>