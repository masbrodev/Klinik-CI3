
<div class="main-content-inner">
    <div class="row">       

        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Pasien</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-dark text-center">                                
                                <tbody>
                                    <tr class="table-info">
                                        <th scope="row">No. Antrian</th>
                                        <td>:</td>
                                        <td><?= $medis->poli . " (" . $medis->no_antrian . ")" ?></td>
                                    </tr>
                                    <tr class="table-danger">
                                        <th scope="row">Nama Pasien</th>
                                        <td>:</td>
                                        <td><?= $medis->pasien ?></td>
                                    </tr>
                                    <tr class="table-warning">
                                        <th scope="row">Alamat</th>
                                        <td>:</td>
                                        <td><?= $medis->alamat ?></td>                                      
                                    </tr>
                                    <tr class="table-info">
                                        <th scope="row">Usia</th>
                                        <td>:</td>
                                        <td><?= $medis->usia ?></td>
                                    </tr>

                                    <tr class="table-danger">
                                        <th scope="row">Kelamin</th>
                                        <td>:</td>
                                        <td><?= $medis->kelamin ?></td>
                                    </tr>
                                    <tr class="table-warning">
                                        <th scope="row">Keluhan</th>
                                        <td>:</td>
                                        <td><?= $medis->keluhan ?></td>                                      
                                    </tr>
                                    <tr class="table-info">
                                        <th scope="row">Kunjungan</th>
                                        <td>:</td>
                                        <td><?= $medis->poli ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 mt-5">
            <div class="card">
                <div class="card-body">
                    <!--<h4 class="header-title">Textual inputs</h4>-->                            
                    <form action="<?= base_url() . 'c_app_poli/simpan_medis' ?>" method="post">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Keluhan</label>
                            <input class="form-control" type="text" name="keluhan" placeholder="Keluhan" required="">
                            <!-- <input name="id_pasien" value="<?=$pasien->id_pasien?>" type="hidden"> -->
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Diagnosa</label>
                            <input class="form-control" type="text" name="keluhan" placeholder="Diagnosa" required="">
                            <!-- <input name="id_pasien" value="<?=$pasien->id_pasien?>" type="hidden"> -->
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Perawatan/Pengobatan</label>
                            <input class="form-control" type="text" name="keluhan" placeholder="Perawatan/Pengobatan" required="">
                            <!-- <input name="id_pasien" value="<?=$pasien->id_pasien?>" type="hidden"> -->
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Tindakan</label>
                            <input class="form-control" type="text" name="keluhan" placeholder="Tindakan" required="">
                            <!-- <input name="id_pasien" value="<?=$pasien->id_pasien?>" type="hidden"> -->
                        </div>
                                    
                        <input type="submit" name="bt_simpan" class="btn btn-rounded btn-primary mb-3" value="Simpan">
                        <a href="<?= base_url() . 'c_app_poli' ?>" class="btn btn-rounded btn-danger mb-3">Batal</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>




</div>