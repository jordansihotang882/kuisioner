<div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Form Input Kuisioner</h2>
                        </div>
                        <form method="post" action="<?php echo base_url('admin/kuisioner/tambah_kuisioner_aksi') ?>">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Kuisioner</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Masukkan nama Kuisioner" name="kuisioner">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Jumlah Responden</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Masukkan Jumlah responden" name="jumlah_responden">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>