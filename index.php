<!DOCTYPE html>
<html>
<head>
    <title>Kitap Öneri Sitesi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <a href="index.php">Ana Sayfa</a>
    <a href="kitaplar.php">Kitaplar</a>
    <a href="oner.php">Kitap Öner</a>
    <a href="hakkinda.php">Hakkında</a>
    <a href="comments.php">Yorumlar</a>
    <a href="contact.php">İletişim</a> <!-- ✨ yeni eklenen -->
</div>

<div class="container">

    <div class="card">
        <h1>📚 Kitap Dünyasına Hoş Geldin</h1>
        <p>Binlerce kitap arasından keşfet, oku ve öner.</p>
    </div>

    <div class="card">
        <h2>📖 Popüler Kitaplar</h2>

        <?php
        $kitaplar = ["1984", "Suç ve Ceza", "Küçük Prens", "Simyacı", "Sefiller"];

        foreach($kitaplar as $kitap){
            echo "<p>📘 $kitap</p>";
        }
        ?>
    </div>

    <div class="card">
        <h2>🔥 Neler Yapabilirsin?</h2>
        <p>✔ Kitapları incele</p>
        <p>✔ Yeni kitap öner</p>
        <p>✔ Diğer kullanıcıların önerilerini gör</p>
        <p>✔ İletişim kur</p>
    </div>

    <div class="card">
        <h2>⭐ Günün Kitabı</h2>

        <?php
        $kitaplar2 = ["1984", "Suç ve Ceza", "Küçük Prens", "Simyacı"];
        echo "<h3>📘 " . $kitaplar2[array_rand($kitaplar2)] . "</h3>";
        ?>

        <p>Bugün bu kitabı öneriyoruz 📖</p>
    </div>

    <div class="card">
        <h2>🚀 Hızlı Erişim</h2>
        <a href="kitaplar.php"><button>Kitapları Gör</button></a>
        <a href="oner.php"><button>Kitap Öner</button></a>
        <a href="comments.php"><button>Yorumları Gör</button></a>
        <a href="contact.php"><button>İletişim</button></a>
    </div>

</div>

</body>
</html>
