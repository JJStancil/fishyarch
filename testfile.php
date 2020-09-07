<?php

if(isset($_POST["Submit"])) {
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];

    if ($Username=="Jason" && $Password=="Tester123") {
        echo "<h2>Welcome : {$_POST["Username"]}</h2>";
    }
    else {
        echo "<h2>Account Does't Exists | Please Try Again</h2>";

    }
}
else {
    echo "<h2>Login Required</h2>";
}
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Form Learning</title>

</head>

<body>
<?php ?>
<fieldset>
    <legend>Test Login Form</legend>
    <form action="testfile.php" method="POST">
        <label for="Username">Username:</label>
        <input id="Username" type="text" name="Username"><br><br>
        <label for="Password">Password:</label>
        &nbsp;
        <input id="Password" type="Password" name="Password"><br><br>
        <input type="Submit" name="Submit" value="Submitted">
    </form>
</fieldset>
</body>
</html>