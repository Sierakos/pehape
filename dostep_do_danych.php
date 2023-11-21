<?php

function polaczZBaza() {
    $adres_ip_serwera_mysql_z_baza_danych = 'localhost:3306';
    $nazwa_bazy_danych = 'mm_ss';
    $login_bazy_danych = 'root';
    $haslo_bazy_danych = '';
    $baza=mysqli_connect($adres_ip_serwera_mysql_z_baza_danych,$login_bazy_danych,$haslo_bazy_danych,$nazwa_bazy_danych);
    if (mysqli_connect_errno()) {echo "Wystąpił błąd połączenia z bazą";}

    return $baza;
}

function wezZdjecia() {
    $baza = polaczZBaza();
    $zdjecia = array();

    $sql = "SELECT * FROM `zdjecia_i_filmy` WHERE wlasnosc_ss=1";
    $wynik = mysqli_query($baza, $sql);

    while ($row = mysqli_fetch_assoc($wynik)) {
        $zdjecia[] = $row;
    }

    mysqli_close($baza);

    return $zdjecia;

}

function dodajZdjecie($imageName, $fileName) {
    $baza = polaczZBaza();

    // Insert information into the database
    $insertSql = "INSERT INTO `zdjecia_i_filmy` (referencja, nazwa, wlasnosc_ss) VALUES ('$fileName', '$imageName', 1)";
    mysqli_query($baza, $insertSql);

    mysqli_close($baza);
}


?>