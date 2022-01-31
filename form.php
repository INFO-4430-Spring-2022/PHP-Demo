<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Forms</title>
</head>
<body>
    <h1>This is a form</h1>
    <form action="answer.php" method="post">
        <input id="name" name="txtName" type="text" />
        <input type="submit" value="Click me" />
    </form>

    <?php 
        echo "<h2>Request</h2>";
        print_r($_REQUEST);
        echo "<h2>Post</h2>";
        print_r($_POST);
        echo "<h2>Get</h2>";
        print_r($_GET);
    ?>

</body>
</html>