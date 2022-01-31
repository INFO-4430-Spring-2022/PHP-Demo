<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $listOfThings = ["Thing 1","cat in a hat","ruler","table"];
     $listOfItems = [];
     $listOfItems[0] = "Pencil";
     $listOfItems[] = "Computer";
     $listOfItems[5] = "Mouse";
     $listOfItems["front"] = "Pens";
    ?>
    <ul>
    <?php
        foreach ($listOfThings as $thing){
            echo "<li>".$thing."</li>";
        }
?>
    </ul>
    <ul>
    <?php
        foreach ($listOfItems as $key => $item){
            echo "<li>$key $item</li>";
        }
?>
    </ul>
        <?php
            print_r($listOfItems);
            var_dump($listOfItems);
        ?>

</body>
</html>