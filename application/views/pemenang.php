<div class="container mt-5">
    <div class="row text-center">
        <div class="col-lg-12">
            <h1>Pemenang Gacha</h1>
        </div>
    </div>
    <div class="row text-center">
        <div class="class-lg-12">
            <table class="table-bordered display table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Sesi</th>
                        <th>Nomor Undian</th>
                        <th>Tanggal Undian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($pemenang as $pemenang) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $pemenang['nama'] ?></td>
                            <td><?= $pemenang['sesi'] ?></td>
                            <td><?= $pemenang['nomor_undian'] ?></td>
                            <td><?= $pemenang['Tanggal'] ?></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>