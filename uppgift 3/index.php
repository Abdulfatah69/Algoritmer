<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>algoritmer</title>
</head>
<body>
<form action="index.php" method="post">
        <input type="text" name="siffra">
        <input type="submit" value="check">
    </form>
     <?php
/* kollar om sifftran är skickad eller inte om den e skickad så ska den visa annars så kan man inte se något */
        if(isset($_POST["siffra"])){
      ?>
    <!-- Jag gör en function där den e kallad för factorial där den kollan on $n är 0 så blir det 1  annar så multiplaserar talet $n med sig själv efter den e -1 som betyder att jag gjorde en custom function -->
    <?php 
    function factorial($n) {
        if ($n == 0) {
            return 1;
        }else {
        return $n * factorial($n - 1);
        }
    }
    ?>
    <h1>
        <!-- I $n kan man lägga i variablen siffran man vill att det att den ska blir factort  -->
        <?php 
        $n = $_POST["siffra"];
        echo "The factorial of $n is " . factorial($n);
        ?>
    </h1>
    <!-- stänger if(isset) som e där uppe -->

    <?php }
    ?>
</body>
</html>