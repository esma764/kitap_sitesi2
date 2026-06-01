<!DOCTYPE html>
<html>
<head>
    <title>Öneri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <a href="index.php">Ana Sayfa</a>
    <a href="kitaplar.php">Kitaplar</a>
    <a href="hakkinda.php">Hakkında</a>
</div>

<div class="container">

    <h1>📚 Kitap Öner</h1>

    <form method="post">
        <input type="text" name="isim" placeholder="Adın"><br><br>
        <input type="text" name="kitap" placeholder="Kitap adı"><br><br>
        <button>Gönder</button>
    </form>

    <?php
    if(isset($_POST["isim"])){
        $isim = $_POST["isim"];
        $kitap = $_POST["kitap"];

        if($isim == "" || $kitap == ""){
            echo "<p style='color:red;'>Boş bırakma!</p>";
        } else {
            $veri = $isim . " - " . $kitap . "\n";
            file_put_contents("veriler.txt", $veri, FILE_APPEND);

            echo "<p style='color:lightgreen;'>Öneri kaydedildi!</p>";
        }
    }
    ?>

    <hr>

    <h2>📖 Gelen Öneriler</h2>

    <?php
    $dosya = "veriler.txt";

    if(file_exists($dosya)){
        $icerik = file($dosya);

        foreach($icerik as $satir){
            echo "<div class='card'>$satir</div>";
        }
    } else {
        echo "<p>Henüz öneri yok.</p>";
    }
    ?>

</div>

</body>
</html>