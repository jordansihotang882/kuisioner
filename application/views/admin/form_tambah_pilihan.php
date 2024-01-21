<div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Form Tambah Pilihan</h2>
                        </div>
                        <form method="post" action="<?php echo base_url('admin/pertanyaan/tambah_pilihan_aksi') ?>">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Pertanyaan</label>
                                <div class="nk-int-st">
                                   <select name="id_pertanyaan" class="form-control">
                                   <option value="">--Pilih Pertanyaan--</option>
                                   <?php foreach($pertanyaan as $ks) : ?>
                                    <option value="<?php echo $ks->id_pertanyaan ?>"><?php echo $ks->pertanyaan ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Pilihan 1</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Pilihan" name="pilihan1">
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Pilihan 2</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Pilihan" name="pilihan2">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success" type="submit">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>