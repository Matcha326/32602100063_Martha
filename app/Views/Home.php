<!-- app/Views/home.php -->
<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>

<section id="profile">
    <h2>Profil Saya</h2>
    <p>Nama: Martha Richs Anggraeni</p>
    <p>Umur: 22 Tahun</p>
    <p>Fakultas: Teknologi Industri</p>
    <p>Program Studi: Teknik Informatika</p>
</section>

<section id="skills">
    <h2>Keahlian</h2>
    <ul>
        <li>Corel Draw</li>
        <li>Canva</li>
        <li>Design Topologi Jaringan</li>
        <li>Instalasi Database</li>
        <li>Instalasi Sistem Operasi</li>
        <li>Instalasi Software</li>
    </ul>
</section>

<?= $this->endSection() ?>
