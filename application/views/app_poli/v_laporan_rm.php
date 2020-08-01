<!-- basic form start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">            
            <form action="<?= base_url() . 'C_laporan_rm/cari' ?>" method="post">
                <div class="form-row align-items-center">                    
                    <div class="search-box pull-left">
                        <label for="example-date-input" class="col-form-label">Dari Tanggal</label>
                        <input name="ed_tgl_dari" class="form-control" type="date" id="example-date-input" required="">
                        <label for="example-date-input" class="col-form-label">Sampai Tanggal</label>
                        <input name="ed_tgl_sampai" class="form-control" type="date" id="example-date-input" required="">
                       
                        <!-- <div class="form-group">
                            <label for="example-search-input" class="col-form-label">Bidang Poli</label>
                            <!--<label class="col-form-label">Tujuan Kunjungan</label>-->
                            <!-- <select class="form-control" name="id_poli" required="">
                                <option value="">-- Pilih Poli --</option>
                                <!--<?php
                                // foreach ($poli as $data_poli) {
                                //     echo "<option value=".$data_poli->id_poli.">".$data_poli->nama."</option>";
                                // }
                                // ?> -->
                            <!-- </select> -->
                        <!-- </div>          -->
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
        <div class="col-14 mt-5">
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
                    <a class="btn btn-rounded btn-success mb-3" href="<?= base_url().'C_laporan_rm/cetak/'.$tgl_dari.'/'.$tgl_sampai?>" role="button" target="_blank"><i class="icon fa fa-print"></i> Cetak PDF</a>
                    <a class="btn btn-rounded btn-warning mb-3" href="<?= base_url().'C_laporan_rm/excel/'.$tgl_dari.'/'.$tgl_sampai?>" role="button"><i class="icon fa fa-print"></i> Cetak Excel</a>
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NO_RM</th>
                                <th scope="col">Tgl_daftar</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Keluhan</th>
                                <th scope="col">Diagnosa</th>
                                <th scope="col">Tindakan</th>
                                <th scope="col">Terapi/Pengobatan</th>
                                <th scope="col">Dokter</th>
                                <th scope="col">Perawat</th>
                                <th scope="col">Poli</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $no = 1;
                            foreach ($kunjungan as $b) {
                                ?>
                                <tr>
                                <th scope="row"><?=$no?></th>
                                <td><?=$b->no_rm?></td>
                                <td><?=$b->tgl_daftar?></td>
                                <td><?=$b->pasien?></td>
                                <td><?=$b->keluhan?></td>
                                <td><?=$b->diagnosa?></td>
                                <td><?=$b->tindakan?></td>
                                <td><?=$b->terapy?></td>
                                <td><?=$b->nama_dokter?></td>
                                <td><?=$b->perawat?></td>
                                <td><?=$b->poli?></td>
                                <?php 
                                    if ($b->poli) {

                                    } else {
                                        echo '$id_poli';
                                    }
                                ?>
                                
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