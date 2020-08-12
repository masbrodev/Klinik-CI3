
<div class="main-content-inner">
    <div class="row">       

        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Pasien</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-dark text-center">
                                <thead class="text-uppercase">
<!--                                    <tr class="table-active">
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">date</th>
                                        <th scope="col">price</th>
                                        <th scope="col">action</th>
                                    </tr>-->
                                </thead>
                                <tbody>
                                <tr class="table-primary">
                                        <th scope="row">No_Rm</th>
                                        <td>:</td>
                                        <td><?= $pasien->no_rm ?></td>
                                    </tr>
                                    <tr class="table-primary">
                                        <th scope="row">Nama</th>
                                        <td>:</td>
                                        <td><?= $pasien->nama ?></td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th scope="row">Alamat</th>
                                        <td>:</td>
                                        <td><?= $pasien->alamat ?></td>                                        
                                    </tr>
                                    <tr class="table-primary">
                                        <th scope="row">Tgl_Lahir</th>
                                        <td>:</td>
                                        <td><?= $pasien->tgl_lahir ?></td>
                                    </tr>
                                    <tr class="table-success">
                                        <th scope="row">Usia</th>
                                        <td>:</td>
                                        <td><?= $pasien->usia ?></td>
                                    </tr>
                                    <tr class="table-primary">
                                        <th scope="row">Kelamin</th>
                                        <td>:</td>
                                        <td><?= $pasien->kelamin ?></td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th scope="row">Status</th>
                                        <td>:</td>
                                        <td><?= $pasien->status ?></td>                                        
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
                    <form action="<?= base_url() . 'C_daftar/simpan_pendaftaran' ?>" method="post">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Keluhan</label>
                            <input class="form-control" type="text" name="keluhan" placeholder="Keluhan" required="">
                            <input name="id_pasien" value="<?=$pasien->id_pasien?>" type="hidden">
                        </div>
                        <div class="form-group">
                            <label for="example-search-input" class="col-form-label">Tujuan Kunjungan</label>
                            <!--<label class="col-form-label">Tujuan Kunjungan</label>-->
                            <select class="form-control" name="id_poli" required="">
                                <option value="">-- Pilih Poli --</option>
                                <?php
                                foreach ($poli as $data_poli) {
                                    echo "<option value=".$data_poli->id_poli.">".$data_poli->nama."</option>";
                                }
                                ?>
                            </select>
                        </div>                            
                        <input type="submit" name="bt_simpan" class="btn btn-rounded btn-primary mb-3" value="Simpan">
                        <a href="<?= base_url() . 'C_daftar' ?>" class="btn btn-rounded btn-danger mb-3">Batal</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
