<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-6 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-10 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <!--<h4 class="header-title">Textual inputs</h4>-->                            
                            <form action="<?=  base_url().'C_dokter/edit/'.$dokter->id_dokter?>" method="post">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Nama DOkter</label>
                                    <input class="form-control" type="text" name="nama_dokter" value="<?= $dokter->nama_dokter?>" placeholder="Nama Dokter" required="">
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Alamat</label>
                                    <input class="form-control" type="text" name="alamat" value="<?= $dokter->alamat?>" placeholder="Alamat" required="">
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Spesialis</label>
                                    <input class="form-control" type="text" name="spesialis" value="<?= $dokter->spesialis?>" placeholder="spesialis" required="">
                                </div>

                              <input type="submit" name="bt_simpan" class="btn btn-rounded btn-success mb-3" value="Simpan">
                                <a href="<?=  base_url().'C_dokter'?>" class="btn btn-rounded btn-danger mb-3">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Textual inputs end -->

            </div>
        </div>

    </div>
</div>