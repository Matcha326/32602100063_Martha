<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css"> 

    <title>layouting</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-icon">
            <i class="fa-solid fa-circle-user fa-2x1"></i>
</div>
<div class="navbar-page">
            <ul type='none'>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul>
                <li>LinkedIn</li>
                <li>Instagram</li>
                <li>Facebook</li>
                <li>WhatsApp</li>
            </ul>
        </div>
    </div>
    <div class="banner">
        <span class="name">
            Martha Richa Anggraeni
        </span><br>
        <span class="description">
            Mahasiswa Fakultas Teknologi Industri, Jurusan Teknik Informatika
        </span>
    </div>
    <?= $this->renderSection('content'); ?>
</body>
</html>
