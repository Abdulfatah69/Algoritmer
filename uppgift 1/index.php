<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Algoritmer</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="siffra1">
        <input type="text" name="siffra2">
        <input type="submit" value="check">
    </form>
    <?php 
    /* kollar om sifftran1 är skickad eller inte om den e skickad så ska den visa annars så kan man inte se något */
    if(isset($_POST["siffra1"])){
    ?>
    <!-- lägger vilka tal ska variablar a och b ska ha, de e över h1 för att koden börjar läsas från upp sen ner-->
    <?php
    /* allt info som skrivs i input siffra 1 och siffra 2 så kommer den spara den i variablar som e nere */
    $a = $_POST["siffra1"];
    $b = $_POST["siffra2"];
?>
<!-- Lägger en rubrik som använder tagen H1 sen använder jag php echo för att visa vad variablar innehåller   -->
    <h1> <?php echo "Talet $a plus talet $b "?> är </h1>
    <!-- Här visas resultatet på de två olika variablar med hjälp av p tagen i html sen gör jag echo på php  -->
    <p>
<?php
/* adderar variablar */
echo $a + $b;
 ?>
</p>
<!-- stänger if(isset) som e där uppe -->
<?php
    }
?>
</body>
</html>