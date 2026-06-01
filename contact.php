<!DOCTYPE html>
<html>
<head>
    <title>İletişim</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <a href="index.php">Ana Sayfa</a>
    <a href="kitaplar.php">Kitaplar</a>
    <a href="oner.php">Öneri Yap</a>
    <a href="comments.php">Yorumlar</a>
    <a href="contact.php">İletişim</a>
</div>

<div class="container">
    <h1>📩 İletişim</h1>

    <form method="post">
        <input type="text" name="isim" placeholder="Adınız"><br><br>
        <textarea name="mesaj" placeholder="Mesajınız"></textarea><br><br>
        <button>Gönder</button>
    </form>

    <?php
    if(isset($_POST["isim"]) && isset($_POST["mesaj"])){
        $isim = trim($_POST["isim"]);
        $mesaj = trim($_POST["mesaj"]);

        if($isim == "" || $mesaj == ""){
            echo "<p style='color:red;'>Boş bırakma!</p>";
        } else {
            echo "<p style='color:lightgreen;'>✅ Teşekkürler <b>$isim</b>, mesajınız alındı!</p>";
            echo "<p>📨 Mesajınız: $mesaj</p>";
        }
    }
    ?>
</div>

</body>
</html>
