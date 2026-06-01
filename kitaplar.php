<?php
$kitaplar = ["1984", "Suç ve Ceza", "Küçük Prens", "Simyacı"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kitaplar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <a href="index.php">Ana Sayfa</a>
    <a href="kitaplar.php">Kitaplar</a>
    <a href="oner.php">Öneri Yap</a>
</div>

<div class="container">
    <h1>📖 Kitaplar</h1>

    <?php
    foreach($kitaplar as $kitap){
        echo "<div class='card'>
                <h3>$kitap</h3>
                <p>Harika bir kitap!</p>
              </div>";
    }
    ?>

</div>

</body>
</html>