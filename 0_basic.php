<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>

    <?php 
        // echo, print, print_r

        echo "Hello World! ";
        echo("Welcome to my php file");
        // ini komentar
        echo "<h1>Ini heading 1</h1>"; // echo html
        echo "<p>Ini paragraf</p>";
        echo "Hai " . " My " . " name " . " is " . " Andy.<br>";
        
        print "OK<br>";
        print_r("Yes<br>");

        // echo vs print vs print_r
        $friends = array('Andi', 'Budi', 'Caca');

        echo $friends; echo "<br>";
        print $friends; echo "<br>";
        print_r($friends); echo "<br>";
        
    ?>
    
</body>
</html>