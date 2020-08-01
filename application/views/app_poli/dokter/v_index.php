<div class="main-content-inner">
    <div class="row">

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
                    <a class="btn btn-rounded btn-primary mb-3" href="<?= base_url() . 'C_dokter/tambah' ?>" role="button"><i class="icon fa fa-plus"></i> Tambah</a>
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Spesialis</th>
                                    <!-- <th>HP</th> -->
                                    <!-- <th>Username</th> -->
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($dokter as $b) {
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $b->nama_dokter ?></td>
                                        <td><?= $b->alamat ?></td>
                                        <td><?= $b->spesialis?></td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="<?=base_url('C_dokter/edit/'.$b->id_dokter)?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="<?=base_url('C_dokter/hapus/'.$b->id_dokter)?>" class="text-danger" onclick="return confirm('Apakah Data Dokter Mau Dihapus?')"><i class="ti-trash"></i></a></li>
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
    </div>
</div>