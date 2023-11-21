<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
</head>
<body>
<?php
    include_once 'biznes.php';

    $zdjecia = pobierzZdjecia();

    foreach ($zdjecia as $zdjecie) {
        echo $zdjecie['id_m'] . " ";
        echo "<a href='./zdjecia/" . $zdjecie['referencja'] . "' target='_blank'>" . $zdjecie['nazwa'] . " </a>";
        echo "<br>";
    }
    ?>

    <form action="biznes.php" method="post" enctype="multipart/form-data">
        <label for="image">Select an image:</label>
        <input type="text" name="nazwa_pliku" id="nazwa_pliku">
        <input type="file" name="image" id="image" accept="image/*">
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>