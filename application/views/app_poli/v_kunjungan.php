<div class="main-content-inner">
    <div class="row">

        <!-- Primary table start -->
        <div class="col-14 mt-5">
            <div class="card">
                <div class="card-body">                                        
                    <!--<h4 class="header-title">Data Pasien</h4>-->                    
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>No</th>
                                    <th>No_RM</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Tgl_Lahir</th>
                                    <th>No.Antrian</th>
                                    <th>Tgl Daftar</th>
                                    <th>Keluhan</th>
                                    <th>Kunjungan</th>   
                                    <th>Status</th>                                  
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $no = 1;
                            foreach ($kunjungan as $b) {
                                if ($b->dibaca == 't') {
                                    echo "<tr class=table-danger>";
                                } else {
                                    echo '<tr>';
                                }
                                ?>                                
                                    <td><?= $no ?></td>
                                    <td><?= $b->no_rm ?></td>
                                    <td><?= $b->pasien ?></td>
                                    <td><?= $b->alamat ?></td>
                                    <td><?php $date = date_create($b->tgl_lahir);
                                        echo date_format($date, 'd-m-Y');
                                        ?></td>
                                    <td><h3><?= $b->no_antrian ?></h3></td>
                                    <td><strong><?= $b->tgl_daftar?></strong></td>
                                    <td><?= $b->keluhan ?></td>
                                    <td><?= $b->poli ?></td>
                                    <td><?= $b->status ?></td>
                                    <td>
                                        <!--<a href="<?php //echo base_url() . 'C_pasien/detail/' . $b->id_pasien ?>" class="btn btn-rounded btn-primary mb-3"><i class="icon fa fa-clipboard"></i> Detail</a> |--> 
                                        <a href="<?= base_url() . 'C_app_poli/detail_kunjungan/' . $b->id_pendaftaran ?>" class="btn btn-rounded btn-success mb-3"><i class="icon fa fa-clipboard"></i> PERIKSA </a>
                                    </td>                                
                                <?php
                                echo '</tr>';
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