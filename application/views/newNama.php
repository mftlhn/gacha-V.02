<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Tambah Nama</h1>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4">
            <form method="POST">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="name" name="nama">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label>Nomor Undian</label>
                    <input type="number" name="nomorUndian" id="nomorUndian" class="form-control">
                    <?= form_error('nomorUndian', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label>Sesi</label>
                    <select name="sesi" class="form-control" id="sesi" name="sesi">
                        <option value="">-- Pilih Sesi --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <?= form_error('sesi', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button> <a href="<?= base_url('undian') ?>" class="btn btn-info">Kembali</a>
            </form>
        </div>
    </div>
    <div class="row">

    </div>
</div>