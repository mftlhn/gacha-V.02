<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Undi</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-3">
            <form action="" method="post">
                <div class="form-group">
                    <label>Pilih Sesi</label>
                    <select name="sesi" id="sesi" class="form-control">
                        <?php foreach ($sesi as $sesi) : ?>
                            <option value="<?= $sesi['sesi'] ?>"><?= $sesi['sesi'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">UNDI!!!</button>
                <a href="<?= base_url('undian') ?>" class="btn btn-info">Kembali</a>
            </form>
        </div>
    </div>
</div>