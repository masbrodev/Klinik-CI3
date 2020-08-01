<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-6 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-13  mt-5">
                    <div class="card">
                        <div class="card-body">
                            <!--<h4 class="header-title">Textual inputs</h4>-->                            
                            <form action="<?=  base_url().'C_pasien/edit/'.$pasien->id_pasien?>" method="post">
                            <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Nik\Nis</label>
                                    <input class="form-control" type="text" name="nis_nik" value="<?= $pasien->nis_nik?>" placeholder="Nik\Nis" required="">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama" value="<?= $pasien->nama?>" placeholder="Nama Lengkap" required="">
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Alamat</label>
                                    <input class="form-control" type="text" name="alamat" value="<?= $pasien->alamat?>" placeholder="Alamat" required="">
                                </div>
                                <div class="form-group">
                                    <label for="example-email-input" class="col-form-label">Usia</label>
                                    <input class="form-control" type="text" name="usia" value="<?= $pasien->usia?>" placeholder="Usia" required="">
                                </div>                            

                                <div class="form-group">
                                    <label class="text-muted mb-3 mt-4 d-block">Kelamin</label>
                                    <!--<label for="example-url-input" class="col-form-label">Kelamin</label>-->
                                    <?php $jk = $pasien->kelamin ?>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadio4" name="kelamin" <?php if($jk=='L') echo 'checked';?> class="custom-control-input" value="L" required="">
                                        <label class="custom-control-label" for="customRadio4">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadio5" name="kelamin" <?php if($jk=='P') echo 'checked';?> class="custom-control-input" value="L" required="">
                                        <label class="custom-control-label" for="customRadio5">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                            <label for="status"><b>Status</b></label>
                            <?php $option = array(
                                'Mukim' => ' Mukim',
                                'Non_Mukim' => 'Non_Mukim'
                                
                            );
                            echo form_dropdown('status',$option,'status',array('class'=>'form-control','pasien'=>'status', 'placeholder'=>'Isi status'))?>
                            <small class="text-danger"><?php echo form_error('status',' ')?></small>
                        </div>
                                <!-- <div class="form-group">
                                    <label for="example-tel-input" class="col-form-label">Golongan Darah</label>
                                    <input class="form-control" type="text" name="gol_darah" value="<?= $pasien->gol_darah?>" placeholder="Golongan Darah" required="">
                                </div> -->
                                <div class="form-group">
                                    <label for="inputPassword" class="">Daerah</label>
                                    <input type="text" class="form-control" name="daerah" value="<?= $pasien->daerah?>" placeholder="Daerah" required="">
                                </div>    
                                <div class="form-group">
                                    <label for="inputPassword" class="">Wilayah</label>
                                    <input type="text" class="form-control" name="wilayah" value="<?= $pasien->wilayah?>" placeholder="Wilayah" required="">
                                </div>
                                <div class="form-group">
                            <label for="pendidikan"><b>Pendidikan</b></label>
                            <?php $option = array(
                                'MI' => ' MI',
                                'SMPNJ' => 'SMPNJ',
                                'MTSNJ' => 'MTSNJ',
                                'MTSN 1' => 'MTSN 1',
                                'SMANJ' => 'SMANJA',
                                'MANJ' => 'MANJ',
                                'SMKNJ' => 'SMKNJ',
                                'MAN 1' => 'MAN 1',
                                'UNUJA' => 'UNUJA'
                            );
                            echo form_dropdown('pendidikan',$option,'pendidikan',array('class'=>'form-control','pasien'=>'pendidikan', 'placeholder'=>'Isi pendidikan'))?>
                            <small class="text-danger"><?php echo form_error('pendidikan',' ')?></small>
                        </div>
                                <!-- <div class="form-group">
                                    <label for="inputPassword" class="">Pendidikan</label>
                                    <input type="text" class="form-control" name="pendidikan" value="<?= $pasien->pendidikan?>" placeholder="Pendidikan" required="">
                                </div> -->
                                <input type="submit" name="bt_simpan" class="btn btn-rounded btn-success mb-3" value="Simpan">
                                <a href="<?=  base_url().'C_pasien'?>" class="btn btn-rounded btn-warning mb-3">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Textual inputs end -->

            </div>
        </div>

    </div>
</div>