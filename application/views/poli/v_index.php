<div class="main-content-inner">
    <div class="row">

        <!-- Primary table start -->
        <div class="col-8 mt-5">
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
                    <a class="btn btn-rounded btn-primary mb-3" href="<?= base_url() . 'C_poli/tambah' ?>" role="button"><i class="icon fa fa-plus"></i> Tambah</a>
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($poli as $b) {
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $b->nama ?></td>
                                        <td><?= $b->username ?></td>
                                        <td>
                                            <!--<a href="<?php //echo base_url() . 'c_poli/detail/' . $b->id_poli  ?>" class="btn btn-rounded btn-primary mb-3"><i class="icon fa fa-clipboard"></i> Detail</a> |--> 
                                            <a href="<?= base_url() . 'C_poli/edit/' . $b->id_poli ?>" class="btn btn-rounded btn-success mb-3"><i class="icon fa fa-pencil"></i> Edit</a> | 
                                            <a href="<?= base_url() . 'C_poli/hapus/' . $b->id_poli ?>" class="btn btn-rounded btn-danger mb-3" onclick="return confirm('Apakah anda yakin menghapus data \n <?= $b->nama ?>..?')"><i class="icon fa fa-trash"></i> Hapus</a>
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
    </div>
</div>