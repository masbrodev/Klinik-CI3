<!-- <div class="main-content-inner">
    <div class="row"> -->

        <!-- Primary table start -->
<div class="col-12 mt-5">
<div class="card">
    <div class="card-body">
        <?php
        $notif = $this->session->flashdata('k');
        if ($notif == 'hapus_berhasil') {
            ?>
            <div class="alert-dismiss">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> menghapus data.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span class="fa fa-times"></span>
                    </button>
                </div>
            </div>
            <?php
        }
        ?>                    
        <!--<h4 class="header-title">Data Pasien</h4>-->                    
        <div class="data-tables datatable-primary mt-8">
            <table id="dataTable2" class="text">
                <thead class="text">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No_RM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Status</th>
                        <th scope="col">Keluhan</th>
                        <th scope="col">Diagnosa</th>
                        <th scope="col">Tindakan</th>
                        <th scope="col">Terapy</th>
                        <th scope="col">Dokter</th>
                        <th scope="col">Perawat</th>
                        <th scope="col">Poli</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($j as $r) {
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $r->no_rm?></td>
                            <td><?= $r->pasien?></td>
                            <td><?= $r->status?></td>
                            <td><?= $r->keluhan?></td>
                            <td><?= $r->diagnosa?></td>
                            <td><?= $r->tindakan?></td>
                            <td><?= $r->terapy?></td>
                            <td><?= $r->nama_dokter?></td>
                            <td><?= $r->perawat?></td>
                            <td><?= $r->poli?></td>
                            <?php 
                                if ($r->poli) {

                                } else {
                                    echo '$id_poli';
                                }
                            ?>

                            <td>
                                <ul>
                                    <li> <a href="<?= base_url() . 'C_app_poli/cetak/' . $r->no_rm ?>" class="btn btn-rounded btn-success mb-2"><i class="icon fa fa-print"></i>Cetak</a></li>
                                    <li> <a href="<?= base_url() . 'C_app_poli/hapus/' . $r->no_rm ?>" class="btn btn-rounded btn-danger mb-2" onclick="return confirm('Apakah anda yakin menghapus data ini ? <?= $r->no_rm ?>..?')"><i class="icon fa fa-trash"></i>Hapus</a></li>
                                </ul>
                            </td>
                           </tr>
                        <?php
                        
                        $no++;
                    }
                    ?>                                                              
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

        <!-- Primary table end -->                    
    <!-- </div>
</div> -->