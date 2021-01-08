<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h2>Pemenang</h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <table class="table table-bordered">
                            <?php foreach ($pemenang as $pemenang) : ?>
                                <tr>
                                    <th>Nama</th>
                                    <td><input type="text" name="nama" id="nama" readonly class="form-control" value="<?= $pemenang['nama'] ?>"></td>
                                </tr>
                                <tr>
                                    <th>Nomor Undian</th>
                                    <td><input type="number" name="nomor_undian" id="nomor-undian" value="<?= $pemenang['nomor_undian'] ?>" readonly class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Sesi</th>
                                    <td><input type="number" name="sesi" id="sesi" value="<?= $pemenang['sesi'] ?>" readonly class="form-control"></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-2">
            <a href="<?= base_url('undian') ?>" class="btn btn-info">Kembali</a>
        </div>
    </div>
</div>