<!-- basic form start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">            
            <form action="<?= base_url() . 'C_kunjungan/cari' ?>" method="post">
                <div class="form-row align-items-center">                    
                    <div class="search-box pull-left">
                        <!--<label for="example-date-input" class="col-form-label">Berdasarkan Tanggal</label>-->
                        <input name="ed_tanggal" class="form-control" type="date" id="example-date-input" required="">
                    </div>                                        
                    <div class="col-auto my-1">
                        <button type="submit" name="bt_cari" class="btn btn-rounded btn-primary"><i class="icon fa fa-search"></i> Tampilkan Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- basic form end -->

<div class="main-content-inner">
    <div class="row">

        <!-- Primary table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <?php
                    $notif = $this->session->flashdata('k');
                    if ($notif == 'hapus_berhasil') {
                        echo '<div class="alert alert-success" role="alert">
                                <strong>Berhasil!</strong> menghapus data.
                            </div>';
                    }
                    ?>                    
                    <!--<h4 class="header-title">Data Pasien</h4>-->                    
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Usia</th>
                                    <th>Kelamin</th>
                                    <th>Status</th>
                                    <th>Tgl Daftar</th>
                                    <th>Jam Daftar</th>
                                    <th>Kunjungan</th>                                    
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $no = 1;
                            foreach ($kunjungan as $b) {
                                ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $b->pasien ?></td>
                                    <td><?= $b->alamat ?></td>
                                    <td><?= $b->usia ?></td>
                                    <td><?= $b->kelamin ?></td>
                                    <td><?= $b->status?></td>
                                    <td><?php $date = date_create($b->tgl_daftar); 
                                    echo date_format($date, 'd-m-Y');?></td>
                                       <td><?= $b->jam_daftar?></td>
                                    <td><?= $b->poli ?></td>
                                    
                                    <td>
                                        <!--<a href="<?php //echo base_url() . 'c_pasien/detail/' . $b->id_pasien ?>" class="btn btn-rounded btn-primary mb-3"><i class="icon fa fa-clipboard"></i> Detail</a> |--> 
                                        <a href="<?= base_url() . 'C_daftar/detail/' . $b->id_pendaftaran ?>" class="btn btn-rounded btn-success mb-3"><i class="icon fa fa-clipboard"></i> Detail</a> | 
                                        <a href="<?= base_url() . 'C_daftar/cetak/' . $b->id_pendaftaran ?>" class="btn btn-rounded btn-warning mb-3" target="_blank"><i class="icon fa fa-print"></i> Cetak</a>
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