<!-- basic form start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">            
            <form action="<?= base_url() . 'C_daftar/cari' ?>" method="post">
                <div class="form-row align-items-center">                    
                    <div class="search-box pull-left">
                        <input type="text" name="ed_cari" placeholder="Nama Pasien" required>
                    </div>                                        
                    <div class="col-auto my-1">
                        <button type="submit" name="bt_cari" class="btn btn-rounded btn-primary"><i class="icon fa fa-search"></i> Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- basic form end -->

<?php if ($this->input->post('ed_cari')) { ?>
    <div class="main-content-inner">
        <div class="row">
            <!-- Primary table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">                                       
                        <div class="data-tables datatable-primary">
                            <table id="dataTable2" class="text-center">
                                <thead class="text-capitalize">
                                    <tr>
                                        <th>No</th>
                                        <th>No_Rm</th>
                                        <th>Nama</th>
                                        <th>Tgl_Lahir</th>
                                        <th>Usia</th>
                                        <th>Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($hasil_cari as $hasil) {
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $hasil->no_rm ?></td>
                                            <td><?= $hasil->nama ?></td>
                                            <td><?php $date = date_create($hasil->tgl_lahir);
                                            echo date_format($date, 'd-m-Y');?></td>
                                            <td><?= $hasil->usia ?></td>
                                            <td><?= $hasil->kelamin ?></td>
                                            <td><?= $hasil->alamat ?></td>
                                            <td><?= $hasil->status ?></td>
                                            <td>
                                                <!--<a href="<?php //echo base_url() . 'c_pasien/detail/' . $b->id_pasien   ?>" class="btn btn-rounded btn-primary mb-3"><i class="icon fa fa-clipboard"></i> Detail</a> |--> 
                                                <a href="<?= base_url() . 'C_daftar/daftar/' . $hasil->id_pasien ?>" class="btn btn-rounded btn-success mb-3"><i class="icon fa fa-mouse-pointer"></i> Daftarkan</a>
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
    <?php
}
?>
