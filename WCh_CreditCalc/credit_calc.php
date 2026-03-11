<?php
$kwota = $_REQUEST['kwota'] ?? null;
$lata = $_REQUEST['lata'] ?? null;
$oprocentowanie = $_REQUEST['oprocentowanie'] ?? null;

$rata = null;
$bledy = [];

if (isset($_REQUEST['kwota'])) {

    if ($kwota == "") $bledy[] = "Nie podano kwoty kredytu.";
    if ($lata == "") $bledy[] = "Nie podano liczby lat.";
    if ($oprocentowanie == "") $bledy[] = "Nie podano oprocentowania.";

    if (empty($bledy)) {
        
        if (!is_numeric($kwota)) $bledy[] = "Kwota kredytu musi być liczbą.";
        if (!is_numeric($lata)) $bledy[] = "Liczba lat musi być liczbą.";
        if (!is_numeric($oprocentowanie)) $bledy[] = "Oprocentowanie musi być liczbą.";

        if (empty($bledy)) {
            
            $kwota = floatval($kwota);
            $lata = intval($lata);
            $oprocentowanie = floatval($oprocentowanie);

            if ($kwota <= 0) $bledy[] = "Kwota kredytu musi być większa od zera.";
            if ($lata <= 0) $bledy[] = "Liczba lat musi być większa od zera.";
            if ($oprocentowanie <= 0) $bledy[] = "Oprocentowanie musi być większe od zera.";
            
            if (empty($bledy)) {
                $miesiace = $lata * 12;
                $kwota_odsetek = $lata * ($oprocentowanie / 100) * $kwota;
                $kwota_calkowita = $kwota + $kwota_odsetek;
                
                $rata = $kwota_calkowita / $miesiace;
            }
        }
    }
}
include 'credit_calc_view.php';
?>