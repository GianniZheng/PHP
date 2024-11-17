<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es2</title>
</head>
<body>
    <?php
    $string;
    $hour = date("G");
    if ($hour >= 8 && $hour < 12){
        $string = "Buongiorno ";
    } elseif ($hour >= 12 && $hour < 20) {
        $string = "Buonasera ";
    } elseif ($hour >= 20 || $hour < 8) {
        $string = "Buonanotte ";
    }
    $string = $string . "Paolo, benvenuta nella mia prima pagina PHP";
    echo $string
    ?>
    <br>
    <button> <a href="index.html" style="text-decoration: none;"> Home </a> </button>
</body>
</html>