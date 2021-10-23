<?php include("backend.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vending Machine</title>
</head>
<body>
    <fieldset>
        <legend>Cuda Vending</legend>
        <table>
            <form action="index.php" method="POST">
                <tr>
                    <td><b>Price: </b></td>
                    <td>
                        <input type="number" name="price" id="price" value="<?php echo $price ?>" />
                        <div><?php echo $errors['price'] ?></div>
                </td>
                </tr>

                <tr>
                    <td><b>Money Given: </b></td>
                    <td>
                        <input type="text" name="moneyGiven" id="moneyGiven" value="<?php echo $moneyGiven ?>" />
                        <div><?php echo $errors['moneyGiven'] ?></div>
                    </td>
                </tr>
                
                <tr><td><button type="submit" name="submit" id="submit">Submit</button></td></tr>
            </form>
        </table>
    </fieldset>
    
</body>
</html>