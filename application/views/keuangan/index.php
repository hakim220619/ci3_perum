<link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo.png">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('proyek', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- DataTables -->
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('proyek/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>JENIS PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1;
                                foreach ($rab1 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_rab']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab1['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>JENIS PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab2 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_rab']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab2['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>JENIS PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab3 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_rab']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks">Rp.1.000.000</span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>JENIS PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab4 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_rab']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks">Rp.1.000.000</span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>JENIS PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab5 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_rab']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks">Rp.1.000.000</span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>JENIS PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab6 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_rab']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks">Rp.1.000.000</span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>JENIS PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab7 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_rab']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks">Rp.1.000.000</span></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>