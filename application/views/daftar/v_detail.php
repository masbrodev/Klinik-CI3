<div class="main-content-inner">
    <div class="row">

        <div class="col-lg-9 mt-5">
            <div class="card">
                <div class="card-body">
                    <!--<h4 class="header-title">Detail Pendaftaran</h4>-->
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-dark text-center">                                
                                <tbody>
                                    <tr class="table-info">
                                        <th scope="row">No. Antrian</th>
                                        <td>:</td>
                                        <td><?= $pasien->poli . " (" . $pasien->no_antrian . ")" ?></td>
                                    </tr>
                                    <tr class="table-danger">
                                        <th scope="row">Nama Pasien</th>
                                        <td>:</td>
                                        <td><?= $pasien->pasien ?></td>
                                    </tr>
                                    <tr class="table-warning">
                                        <th scope="row">Alamat</th>
                                        <td>:</td>
                                        <td><?= $pasien->alamat ?></td>                                      
                                    </tr>
                                    <tr class="table-info">
                                        <th scope="row">Usia</th>
                                        <td>:</td>
                                        <td><?= $pasien->usia ?></td>
                                    </tr>

                                    <tr class="table-danger">
                                        <th scope="row">Kelamin</th>
                                        <td>:</td>
                                        <td><?= $pasien->kelamin ?></td>
                                    </tr>
                                    <tr class="table-danger">
                                        <th scope="row">Status</th>
                                        <td>:</td>
                                        <td><?= $pasien->status ?></td>
                                    </tr>
                                    <tr class="table-warning">
                                        <th scope="row">Keluhan</th>
                                        <td>:</td>
                                        <td><?= $pasien->keluhan ?></td>                                      
                                    </tr>
                                    <tr class="table-info">
                                        <th scope="row">Kunjungan</th>
                                        <td>:</td>
                                        <td><?= $pasien->poli ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 mt-5">
            <div class="card">
                <div class="card-body">
                    <!--<h4 class="header-title">Textual inputs</h4>-->                            
                    <form action="<?= base_url() . 'C_daftar/cetak' ?>" method="post">
                        <!--<div class="form-group">-->
                            <input name="id_pasien" value="<?= $pasien->id_pendaftaran ?>" type="hidden">
                        <!--</div>-->
                        <div class="form-group">
                        <!--<input type="submit" name="bt_cetak" class="btn btn-rounded btn-primary mb-3" value="Cetak">-->
                            <a href="<?= base_url() . 'C_daftar/cetak/' . $pasien->id_pendaftaran ?>" target="_blank" class="btn btn-rounded btn-primary"><i class="icon fa fa-print"></i> Cetak</a>
                            <!--<a href="<?php // base_url() . 'c_daftar' ?>" class="btn btn-rounded btn-danger mb-3">Kembali</a>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
