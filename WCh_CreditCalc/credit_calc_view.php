<!DOCTYPE HTML>
<html>
	<head>
		<title>Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">

				<header id="header">
						<div class="inner">
							<a href="index.php" class="logo">
	<span class="title">Zadanie PAI</span>
</a>
						</div>
					</header>

				<div id="main">
						<div class="inner">
							<header>
								<h1>Kalkulator Kredytowy</h1>
								<p>Oblicz swoją miesięczną ratę. Wypełnij poniższe pola, aby otrzymać wynik.</p>
							</header>
							
                            <section>
                                <form action="credit_calc.php" method="post">
                                    <div class="fields">
                                        <div class="field">
                                            <label for="kwota">Kwota kredytu (zł):</label>
                                            <input type="text" name="kwota" id="kwota" value="<?php print(isset($kwota) ? $kwota : ''); ?>" />
                                        </div>
                                        <div class="field">
                                            <label for="lata">Okres kredytowania (lata):</label>
                                            <input type="text" name="lata" id="lata" value="<?php print(isset($lata) ? $lata : ''); ?>" />
                                        </div>
                                        <div class="field">
                                            <label for="oprocentowanie">Oprocentowanie (%):</label>
                                            <input type="text" name="oprocentowanie" id="oprocentowanie" value="<?php print(isset($oprocentowanie) ? $oprocentowanie : ''); ?>" />
                                        </div>
                                    </div>
                                    <ul class="actions">
                                        <li><input type="submit" value="Oblicz ratę" class="primary" /></li>
                                    </ul>
                                </form>

                                <?php
                                // Wyświetlanie błędów (w ładnej, czerwonej ramce)
                                if (isset($bledy) && count($bledy) > 0) {
                                    echo '<div style="background-color: #ffcccc; color: #cc0000; padding: 15px; border-radius: 5px; margin-bottom: 20px;">';
                                    echo '<h4>Wystąpiły błędy:</h4><ul style="margin-bottom: 0;">';
                                    foreach ($bledy as $blad) {
                                        echo '<li>' . $blad . '</li>';
                                    }
                                    echo '</ul></div>';
                                }

                                // Wyświetlanie wyniku (w ładnej, zielonej ramce)
                                if (isset($rata)) {
                                    echo '<div style="background-color: #ccffcc; color: #006600; padding: 20px; border-radius: 5px; text-align: center; font-size: 1.5em; font-weight: bold;">';
                                    echo 'Twoja miesięczna rata wynosi: ' . round($rata, 2) . ' zł';
                                    echo '</div>';
                                }
                                ?>
							</section>

						</div>
					</div>

				<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; CW.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>