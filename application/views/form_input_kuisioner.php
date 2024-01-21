<div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Form Input Kuisioner</h2>
                        </div>
                        <form method="post" action="<?php echo base_url('kuisioner/tambah_kuisioner_aksi') ?>">
                    <?php 
        $no=1;
        foreach($pertanyaan as $sk) : ?>
             <h4><?php echo $no++ ?>.<?php echo $sk->pertanyaan ?></h4>
                        <div class="form-check">
                             <label class="form-check-label" for="flexRadioDefault1">
    <?php echo $sk->pilihan1 ?>
  </label>
  <input class="form-check-input" type="radio" name="flexRadioDefault" value="1">
   <input class="form-check-input" type="radio" name="flexRadioDefault" value="2">
   <input class="form-check-input" type="radio" name="flexRadioDefault" value="3">
   <input class="form-check-input" type="radio" name="flexRadioDefault" value="4">
   <input class="form-check-input" type="radio" name="flexRadioDefault" value="5">
  <label class="form-check-label" for="flexRadioDefault1">
    <?php echo $sk->pilihan1 ?>
  </label>
</div>

        <?php endforeach; ?>                <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>