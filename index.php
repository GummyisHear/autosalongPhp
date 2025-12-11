<?php if (isset($_GET['code'])) {die(highlight_file(__FILE__, 1));}?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>AutoSalon Pro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>AutoSalon Pro</h1>
    <nav>
        <a href="index.php">Avaleht</a>
        <a href="price.php">Autod</a>
        <a href="picture.php">Pildigalerii</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>

<div class="container">
    <section class="intro">
        <h2>Professionaalne autosalong Tallinnas</h2>
        <p>
            AutoSalon Pro pakub kvaliteetseid ja kontrollitud sõidukeid kõigile,
            kes hindavad usaldusväärsust, turvalisust ja mugavust.
            Meie valikus on nii uued kui ka kasutatud sõidukid.
        </p>
        <div class="center">
            <img src="images/salon.jpg" class="cover" alt="Autosalong">
        </div>
    </section>
</div>

<footer>
    © 2025 Artjom Põldsaar
</footer>

</body>
</html>
