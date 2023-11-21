<?php
include_once 'dostep_do_danych.php';

function pobierzZdjecia() {
    return wezZdjecia();
}

if (isset($_POST['submit'])) {
    $file = $_FILES['image'];
    $imageName = $_POST['nazwa_pliku'];

    // File properties
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    // Check if file is uploaded successfully
    if ($fileError === 0) {
        $fileDestination = "./zdjecia/" . $fileName;

        // Move the file to the destination folder
        move_uploaded_file($fileTmpName, $fileDestination);

        // Dodaj informacje do bazy danych
        dodajZdjecie($imageName, $fileName);

        header("Location: dodano.php");
    } else {
        echo "Error uploading file.";
    }
}

?>