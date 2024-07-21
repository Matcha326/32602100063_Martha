<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Tambah Data Mahasiswa</h1>
    </div>
    <div class="form">
        <form action="tambah" method="post">
            <div class="input">
                <label for="Nim">Nim</label>
                <input type="text" name="nim" id="nim">
            </div>
            <div class="input">
                <label for="Nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="input">
                <label for="Prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi">
            </div>
            <div class="input">
                <label for="Universitas">Universitas</label>
                <input type="text" name="univ" id="univ">
            </div>
            <div class="input">
                <label for="No_hp">Nomor Handphone</label>
                <input type="text" name="No_hp" id="No_hp">
            </div>
            <div class="button">
                <button type="submit" value="Submit">Submit</button>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>
