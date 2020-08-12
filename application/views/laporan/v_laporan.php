<!-- basic form start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">            
            <form action="<?= base_url() . 'C_laporan/cari' ?>" method="post">
                <div class="form-row align-items-center">                    
                    <div class="search-box pull-left">
                        <label for="example-date-input" class="col-form-label">Dari Tanggal</label>
                        <input name="ed_tgl_dari" class="form-control" type="date" id="example-date-input" required="">
                        <label for="example-date-input" class="col-form-label">Sampai Tanggal</label>
                        <input name="ed_tgl_sampai" class="form-control" type="date" id="example-date-input" required="">
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

<?php if ($this->input->post('ed_tgl_dari')) { 
    $tgl_dari   = $this->input->post('ed_tgl_dari');
    $tgl_sampai = $this->input->post('ed_tgl_sampai');
    ?>

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
                    <a class="btn btn-rounded btn-success mb-3" href="<?= base_url().'C_laporan/cetak/'.$tgl_dari.'/'.$tgl_sampai?>" role="button" target="_blank"><i class="icon fa fa-print"></i> Cetak</a>
                    <a class="btn btn-rounded btn-warning mb-3" href="<?= base_url().'C_laporan/excel/'.$tgl_dari.'/'.$tgl_sampai?>" role="button"><i class="icon fa fa-print"></i> Cetak Excel</a>
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>No</th>
                                    <th>No_RM</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Usia</th>
                                    <th>Kelamin</th>
                                    <th>Daerah</th>
                                    <th>Tgl Daftar</th>
                                    <th>Jam Daftar</th>
                                    <th>Kunjungan</th>                                    
                                    <th>Petugas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $no = 1;
                            foreach ($kunjungan as $b) {
                                ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $b->no_rm ?></td>
                                    <td><?= $b->pasien ?></td>
                                    <td><?= $b->alamat ?></td>
                                    <td><?= $b->usia ?></td>
                                    <td><?= $b->kelamin ?></td>
                                    <td><?= $b->daerah ?></td>
                                    <td><?= $b->tgl_daftar?></td>
                                    <td><?= $b->jam_daftar?></td>
                                    <td><?= $b->poli ?></td>
                                    <td><?= $b->petugas ?></td>
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

<?php
}
?>