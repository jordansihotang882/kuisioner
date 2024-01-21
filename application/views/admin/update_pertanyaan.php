<div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Form Update Pertanyaan</h2>
                        </div>
                        <?php foreach($pertanyaan as $adm) : ?>
                        <form method="post" action="<?php echo base_url('admin/pertanyaan/update_aksi') ?>">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>pertanyaan</label>
                                <div class="nk-int-st">
                                    <input type="hidden" name="id_pertanyaan" value="<?php echo $adm->id_pertanyaan ?>">
                                     <input type="hidden" name="id_kuisioner" value="<?php echo $adm->id_kuisioner ?>">
                                    <input type="text" class="form-control input-sm" placeholder="Pertanyaan" name="pertanyaan" value="<?php echo $adm->pertanyaan ?>">
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