<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Edit Data Mahasiswa</h1>
    </div>
    <div class="form">
        <form action="/crud/editan" method="POST">
            <div class="input">
                <label for="Nim">Nim</label>
                <input type="text" name="Nim" id="Nim">
            </div>
            <div class="input">
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama">
            </div>
            <div class="input">
                <label for="Prodi">Prodi</label>
                <input type="text" name="Prodi" id="Prodi">
            </div>
            <div class="input">
                <label for="Universitas">Universitas</label>
                <input type="text" name="Univ" id="Univ">
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
