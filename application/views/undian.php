<div class="container mt-5">
    <div class="row">
        <div class="col-2">
            <a href="<?= base_url('undian/tambahNama') ?>" class="btn btn-info">Tambah nama</a>
        </div>
        <div class="col-2">
            <a href="<?= base_url('undian/undi') ?>" class="btn btn-primary">Undi</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="row mt-5 text-center">
        <div class="col-lg-12">
            <h1>Daftar Peserta Gacha PO PS5</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <table class="table table-bordered table-striped table-hover display">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Sesi</th>
                        <th>Nomor Undian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($namaundian as $nama) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $nama['nama'] ?></td>
                            <td><?= $nama['sesi'] ?></td>
                            <td><?= $nama['nomor_undian'] ?></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>