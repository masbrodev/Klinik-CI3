<div class="main-content-inner">
    <div class="row">

        <!-- Primary table start -->
        <div class="col-14 mt-5">
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
                    <!-- <a class="btn btn-rounded btn-primary mb-3" href="<?= base_url() . 'C_pasien2/tambah' ?>" role="button"><i class="icon fa fa-plus"></i> Tambah</a> -->
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <!-- <tr> -->
                                    <th>No</th>
                                    <th>No_RM</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Tgl_Lahir</th>
                                    <th>Status</th>       
                                    <th>Kelamin</th>
                                    <th>Daerah</th>
                                    <th>Wilayah</th>
                                    <th>Pendidikan</th>                              
                                <!-- </tr> -->
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pasien as $b) {
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $b->no_rm ?></td>
                                        <td><?= $b->nama ?></td>
                                        <td><?= $b->alamat ?></td>
                                        <td><?= $b->tgl_lahir ?></td>
                                        <td><?= $b->status ?></td>
                                        <td><?= $b->kelamin ?></td>
                                        <td><?= $b->daerah ?></td>
                                        <td><?= $b->wilayah ?></td>
                                        <td><?= $b->pendidikan ?></td>
                                        
                                        <!-- <td>
                                            <!--<a href="<?php //echo base_url() . 'C_pasien/detail/' . $b->id_pasien  ?>" class="btn btn-rounded btn-primary mb-3"><i class="icon fa fa-clipboard"></i> Detail</a> |--> 
                                            <!-- <a href="<?= base_url() . 'C_pasien2/edit/' . $b->id_pasien ?>" class="btn btn-rounded btn-success mb-3"><i class="icon fa fa-pencil"></i> Edit</a> | 
                                            <a href="<?= base_url() . 'C_pasien2/hapus/' . $b->id_pasien ?>" class="btn btn-rounded btn-danger mb-3" onclick="return confirm('Apakah anda yakin menghapus data \n <?= $b->nama ?>..?')"><i class="icon fa fa-trash"></i> Hapus</a> -->
                                        <!-- </td> -->
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
                            </div>