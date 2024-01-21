<div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Form Tambah Pertanyaan</h2>
                        </div>
                        <form method="post" action="<?php echo base_url('admin/pertanyaan/tambah_pertanyaan_aksi') ?>">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Kuisioner</label>
                                <div class="nk-int-st">
                                   <select name="id_kuisioner" class="form-control">
                                   <option value="">--Pilih Kuisioner--</option>
                                   <?php foreach($kuisioner as $ks) : ?>
                                    <option value="<?php echo $ks->id_kuisioner ?>"><?php echo $ks->kuisioner ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Pertanyaan</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Pertanyaan" name="pertanyaan">
                                     
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