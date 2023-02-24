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
        echo "Page Load:";
        print_r($_SERVER['REQUEST_METHOD']); 
    ?>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') :  ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div>
                    <label for="catName">Item Name:</label>
                    <input type="text" name="catName" />
                </div>
                <div>
                    <label for="descr">Description:</label>
                    <input type="text" name="descr" />
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="text" name="price" />
                </div>
                <button type="submit">Add Item</button>
    </form>

    <?php else: ?>
        <?php 
            if (isset($_POST['catName'], $_POST['descr'], $_POST['price'])) {
                $catName = htmlspecialchars(strip_tags($_POST['catName']));
                $descr = htmlspecialchars(strip_tags($_POST['descr']));
                $price = htmlspecialchars(strip_tags($_POST['price'])); 

                echo "$catName $descr $price<br>"; 
            }
            else {
                echo "You did not complete all fields<br>";
            }
        ?>

    <?php endif ?>
</body>
</html>