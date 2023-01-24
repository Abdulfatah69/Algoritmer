<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>algoritmer</title>
</head> 
<body>
    <h1> Checka medianen med den här algoritm </h1>
    <form action="index.php" method="post">
    <textarea name="textarea" cols="30" rows="10"></textarea>
    <input type="submit" value="check">
    </form>
    <?php if(isset($_POST["textarea"])){ ?>
    <?php
    $numbers = array_filter(explode(" ",$_POST["textarea"]), 'is_numeric');
    sort($numbers);
    $antal_siffror = count($numbers);
    $median = $antal_siffror / 2;
    $median = floor($median);
    ?>
    <h1> <?php echo $numbers[$median]; ?></h1>
    <?php
     }
    ?>
</body>
</html>