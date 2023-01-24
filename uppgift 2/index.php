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
        <input type="text" name="siffra">
        <input type="submit" value="check">
    </form>
    <?php 
        /* kollar om sifftran är skickad eller inte om den e skickad så ska den visa annars så kan man inte se något */
          if(isset($_POST["siffra"])){
    ?>
    <!-- lägger vilka tal ska variablen a ska ha, den e över h1 för att koden börjar läsas från upp sen ner-->
    <?php
        /* allt info som skrivs i input siffra så kommer den spara den i variablar som e nere */
    $a = $_POST["siffra"] ;
?>
<!-- Lägger en rubrik som använder tagen H1 sen använder jag php echo för att visa vad variablar innehåller   -->
    <h1> <?php echo "Talet  $a  "?> + 5 är lika med </h1>
    <!-- Här visas resultatet på de två olika tal med hjälp av p tagen i html sen gör jag echo på php  -->
    <p>
<?php
/* adderar variablalen med 5 */

echo $a + 5;
?>
</p>
<!-- stänger if(isset) som e där uppe -->
<?php 
}?>
</body>
</html>