<div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Form Update Pilihan</h2>
                        </div>
                        <?php foreach($pilihan as $adm) : ?>
                        <form method="post" action="<?php echo base_url('admin/pertanyaan/update_pilihan_aksi') ?>">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Pilihan 1</label>
                                <div class="nk-int-st">
                                    <input type="hidden" name="id_pilihan" value="<?php echo $adm->id_pilihan ?>">
                                     
                                    <input type="text" class="form-control input-sm" placeholder="Pilihan 1" name="pilihan1" value="<?php echo $adm->pilihan1 ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                                <label>Pilihan 2</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Pilihan 2" name="pilihan2" value="<?php echo $adm->pilihan2 ?>">
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
