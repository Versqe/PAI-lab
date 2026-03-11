<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Kredytowy</title>
</head>

<body>
    <h2>Kalkulator kredytowy</h2>
	<hr>
    <form action="credit_calc.php" method="post">
        <label for="kwota">Kwota kredytu:</label><br>
        <input type="text" name="kwota" value="<?php print(isset($kwota) ? $kwota : ''); ?>"><br><br>

        <label for="lata">Ile lat:</label><br>
        <input type="text" name="lata" value="<?php print(isset($lata) ? $lata : ''); ?>"><br><br>

        <label for="oprocentowanie">Oprocentowanie (%):</label><br>
        <input type="text" name="oprocentowanie" value="<?php print(isset($oprocentowanie) ? $oprocentowanie : ''); ?>"><br><br>

        <input type="submit" value="Oblicz ratę">
    </form>
	<hr>
    <?php
    if (isset($bledy) && count($bledy) > 0) {
        echo '<div style="color: red;">';
        foreach ($bledy as $blad) {
            echo $blad . '<br>';
        }
        echo '</div>';
    }

    if (isset($rata)) {
        echo '<div style="font-size: 18px; font-weight: bold;">';
        echo 'Twoja miesięczna rata wynosi: ' . round($rata, 2) . ' zł';
        echo '</div>';
    }
    ?>
	
</body>
</html>