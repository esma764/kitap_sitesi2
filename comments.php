<!DOCTYPE html>
<html>
<head>
    <title>Yorumlar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <a href="index.php">Ana Sayfa</a>
    <a href="kitaplar.php">Kitaplar</a>
    <a href="oner.php">Öneri Yap</a>
    <a href="comments.php">Yorumlar</a>
</div>

<div class="container">
    <h1>💬 Kullanıcı Önerileri</h1>

    <?php
    $dosya = "veriler.txt";

    if(file_exists($dosya)){
        $icerik = file($dosya);

        foreach($icerik as $satir){
            echo "<div class='card'>📚 ".htmlspecialchars($satir)."</div>";
        }
    } else {
        echo "<p>Henüz öneri yok.</p>";
    }
    ?>
</div>

</body>
</html>
