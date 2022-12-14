<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Winkelmand integer</title>
</head>
<body>

<?php
$prijs = "€" . 1.25;
echo 'Prijs: ' . $prijs;
?>

<h2>Winkelmand</h2>
<form action="" method="post">
    <label for="product">Product:</label><br>
    <input type="text" name="product" required placeholder="product"><br>
    <label for="aantal">Aantal:</label><br>
    <input type=number name="aantal" required placeholder="aantal">><br><br>
    <input type="submit" name="submit" value="toevoegen" >
</form>
<p>Vul je geen action in dan wordt het formulier verwerkt door de huidige pagina".</p>

<?php

// Controleer of het formulier is verstuurd
if ($_POST['submit']) {
    $product = $_POST['product'];
    $aantal = $_POST['aantal'];
    $min = 0;
    $max = 15;

    // Controleer of het aantal > 0 is.
    if ($aantal < $min) { 
        echo "je moet minimaal 1 stuk hebben";
        // Maak de berekening van de totaal prijs.
        // Maak de teksten zoals gevraagd wordt.

    }
    if($aantal > $max){
        echo "maximaal moet je 15 hebben";
    }else{
        echo $aantal . "\n" . $product . "\n" . $prijs;
    }

    /*
     * Werkt je formulier pas dan het formulier aan zodat je geen
     * negatieve aantallen kunt invullen.
     * Pas ook het formulier aan zodat je maximaal 15 kunt invoeren
     * bij het aantal.
     */

}
?>

</body>
</html>