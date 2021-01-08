<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h2>Pemenang</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <?php foreach ($pemenang as $pemenang) : ?>
                            <tr>
                                <th>Nama</th>
                                <td><?= $pemenang['nama'] ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Undian</th>
                                <td><?= $pemenang['nomor_undian'] ?></td>
                            </tr>
                            <tr>
                                <th>Sesi</th>
                                <td><?= $pemenang['sesi'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>