<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-6 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-10 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <!--<h4 class="header-title">Textual inputs</h4>-->                            
                            <form action="<?=  base_url().'C_petugas/tambah'?>" method="post">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required="">
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Alamat</label>
                                    <input class="form-control" type="text" name="alamat" placeholder="Alamat" required="">
                                </div>
                                <div class="form-group">
                                    <label for="example-email-input" class="col-form-label">HP</label>
                                    <input class="form-control" type="text" name="hp" placeholder="HP" required="">
                                </div>                                                            

                                <div class="form-group">
                                    <label for="example-tel-input" class="col-form-label">Username</label>
                                    <input class="form-control" type="text" name="username" placeholder="Username" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                                </div>
                                <input type="submit" name="bt_simpan" class="btn btn-rounded btn-primary mb-3" value="Simpan">
                                <a href="<?=  base_url().'C_petugas'?>" class="btn btn-rounded btn-danger mb-3">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Textual inputs end -->

            </div>
        </div>

    </div>
</div>