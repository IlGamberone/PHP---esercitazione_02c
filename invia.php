<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = $_POST["numero"];
        $i = $numero;
        $somma = 0;
        $n = 2;

        if ($i % 2 == 0) {
            while ($i > 0) {
            $somma += $i;
            $i -= 2;
            }
        } else {
            $i -= 1;
            while ($i > 0) {
            $somma += $i;
            $i -= 2;
            }
        }
  

        echo '<h1>' . $somma . '</h1>' 
    
    ?>
</body>
</html>