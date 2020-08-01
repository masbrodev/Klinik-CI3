<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-6 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <!--<h4 class="header-title">Textual inputs</h4>-->                            
                            <!-- <form action="<?=  base_url().'C_pasien2/tambah'?>" method="post"> -->
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required="">
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Alamat</label>
                                    <input class="form-control" type="text" name="alamat" placeholder="Alamat" required="">
                                </div>
                                <div class="form-group">
                                    <label for="example-email-input" class="col-form-label">Usia</label>
                                    <input class="form-control" type="text" name="usia" placeholder="Usia" required="">
                                </div>                            

                                <div class="form-group">
                                    <label class="text-muted mb-3 mt-4 d-block">Kelamin</label>
                                    <!--<label for="example-url-input" class="col-form-label">Kelamin</label>-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadio4" name="kelamin" class="custom-control-input" value="L" required="">
                                        <label class="custom-control-label" for="customRadio4">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadio5" name="kelamin" class="custom-control-input" value="P" required="">
                                        <label class="custom-control-label" for="customRadio5">Perempuan</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="example-tel-input" class="col-form-label">Golongan Darah</label>
                                    <input class="form-control" type="text" name="gol_darah" placeholder="Golongan Darah" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="">Daerah</label>
                                    <input type="text" class="form-control" name="daerah" placeholder="Daerah" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="">Wilayah</label>
                                    <input type="text" class="form-control" name="wilayah" placeholder="Wilayah" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="">Pendidikan</label>
                                    <input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan" required="">
                                </div>
                                <input type="submit" name="bt_simpan" class="btn btn-rounded btn-primary mb-3" value="Simpan">
                                <a href="<?=  base_url().'C_pasien2'?>" class="btn btn-rounded btn-danger mb-3">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Textual inputs end -->

            </div>
        </div>

    </div>
</div>