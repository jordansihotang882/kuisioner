<div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Form Update Responden</h2>
                        </div>
                        <?php foreach($responden as $adm) : ?>
                        <form method="post" action="<?php echo base_url('admin/responden/update_aksi') ?>">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="nk-int-st">
                                    <input type="hidden" name="id_responden" value="<?php echo $adm->id_responden ?>">
                                    <input type="text" class="form-control input-sm" placeholder="Enter Email" name="nama" value="<?php echo $adm->nama ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>NPM</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="NPM" name="npm" value="<?php echo $adm->npm ?>">
                                </div>
                            </div>
                        </div>

                         <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Alamat</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="alamat" name="alamat" value="<?php echo $adm->alamat ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Email</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="email" name="email" value="<?php echo $adm->email ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="password" name="password" value="<?php echo $adm->password ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success">Submit</button>
                        </div>
                        </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>