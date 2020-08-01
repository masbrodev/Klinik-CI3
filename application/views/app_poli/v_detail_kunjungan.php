<div class="main-content-inner">
    <div class="row">

        <div class="col-lg-5 mt-5">
            <div class="card">
                <div class="card-body">
                    <!--<h4 class="header-title">Detail Pendaftaran</h4>-->
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-dark text-center">                                
                                <tbody>
                                    <tr class="table-default">
                                        <th scope="row">Nomor Antrian</th>
                                        <td><b>:</b></td>
                                        <td><h3><?= $pasien->no_antrian?></h3></td>
                                    </tr>
                                    <tr class="table-default">
                                        <th scope="row">Nama Pasien</th>
                                        <td><b>:</b></td>
                                        <td><?= $pasien->pasien ?></td>
                                    </tr>
                                    <tr class="table-default">
                                        <th scope="row">Alamat</th>
                                        <td><b>:</b></td>
                                        <td><?= $pasien->alamat ?></td>                                      
                                    </tr>
                                    <tr class="table-default">
                                        <th scope="row">Usia</th>
                                        <td><b>:</b></td>
                                        <td><?= $pasien->usia ?></td>
                                    </tr>

                                    <tr class="table-default">
                                        <th scope="row">Kelamin</th>
                                        <td><b>:</b></td>
                                        <td><?= $pasien->kelamin ?></td>
                                    </tr>
                                    <tr class="table-default">
                                        <th scope="row">Keluhan</th>
                                        <td><b>:</b></td>
                                        <td><?= $pasien->keluhan ?></td>                                      
                                    </tr>
                                    <tr class="table-default">
                                        <th scope="row">Kunjungan</th>
                                        <td><b>:</b></td>
                                        <td><?= $pasien->poli ?></td>
                                    </tr>
                                    <tr class="table-default">
                                        <th scope="row">Status</th>
                                        <td><b>:</b></td>
                                        <td><?= $pasien->status?></td>
                                    </tr>
                                </tbody>
                            </table>  
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body">
                    <!--<h4 class="header-title">Textual inputs</h4>-->                            
                    <form action="<?= base_url() . 'C_app_poli/simpan_rm' ?>" method="post">
                    <div class="form-group">
                            <label for="example-text-area" class="col-form-label">NO.RM</label>
                            <input class="form-control" type="text" name="no_rm" placeholder="No.RM" required="">
                            <input name="id_pasien" value="<?=$pasien->id_pasien?>" type="hidden">
                            <input name="id_pendaftaran" value="<?=$pasien->id_pendaftaran?>" type="hidden">
                           
                        </div>
                        <div class="form-group">
                            <label for="example-text-area" class="col-form-label">Diagnosa</label>
                            <input class="form-control" type="text" name="diagnosa" placeholder="Diagnosa" required="">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Tindakan</label>
                            <input class="form-control" type="area-text" name="tindakan" placeholder="Tindakan" required="">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Terapy/Pengobatan</label>
                            <input class="form-control" type="text" name="terapy" placeholder="Terapy/Pengobatan" required="">
                        </div>
                        
                        <div class="form-group">
                            <label for="example-search-input" class="col-form-label">Dokter</label>
                            <!--<label class="col-form-label">Tujuan Kunjungan</label>-->
                            <select class="form-control" name="nama_dokter" required="">
                                <option value="">-- Pilih Dokter --</option>

                                <?php
                                foreach ($dokter as $data_dokter) {
                                    echo "<option value=".$data_dokter->id_dokter.">" .$data_dokter ->nama_dokter. "</option>";
                                }
                                ?>
                            </select>
                        </div>     
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Perawat</label>
                            <input class="form-control" type="text" name="perawat" placeholder="Perawat" required="">
                        </div>                                 
                        <input type="submit" name="bt_simpan" class="btn btn-rounded btn-primary mb-3" value="Simpan">
                        <a href="<?= base_url() . 'C_app_poli' ?>" class="btn btn-rounded btn-danger mb-3">Batal</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
