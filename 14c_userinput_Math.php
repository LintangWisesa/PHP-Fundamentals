<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    
    <form action="14c_userinput_Math.php" method="post">
        Angka 1 : <input type="number" name="x">
        Angka 2 : <input type="number" name="y">
        <input type="submit" value="x Kali">
    </form>
    <br>
    
    <?php
        echo "Hasil a x b = " . $_POST['x'] * $_POST['y'];
    ?>
    
</body>
</html>