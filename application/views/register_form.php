
                               
<br>
<br>
<br>
<br>

        <div class="container">
                
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <center>
                                <div class="alert-list">
                                 <div class="alert alert-success" role="alert"><h2><b>Form User Experience Quisionnaire</b></h2>
                            </div>
                            </div>
                            </center>
                        </div>
                        <form class="row" method="post" action="<?php echo base_url('kuisioner_responden/tambah_kuisioner_aksi') ?>">
                <div class="form-example-int">  
                  </div>           
                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="au-input input-sm form-control" type="text" name="nama" placeholder="Nama">
                </div>
               
                  
                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">  
                                   <option value="">--Pilih Status--</option>    
                                   <option value="mahasiswa">Mahasiswa</option>
                                   <option value="tendik">Tendik</option>
                                   <option value="dosen">Dosen</option>
                                   </select>  

                </div>
                <br>
                <div class="alert-list">
                                 <div class="alert alert-info" role="alert"><center><b>Isilah pertanyaan berikut sesuai dengan pendapat anda</b></center>
                            </div>
                        </div>
 <br>
<div class="row text-center">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st"><b> 
                                      <p> 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;</p>
                                   </b>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                    </div>
                                </div>
                            </div>
                        </div>
        <?php 
        $no=1;
        foreach($pertanyaan as $sk) : ?>
                    
                            <div class="form-check">

    <div class="row ml-4">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <?php echo $sk->pilihan1 ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center info">
                                <div class="form-group">
                                    <div class="nk-int-st">
   <input class="form-check-input" type="radio" name="<?php echo $sk->nmr_pertanyaan ?>" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input class="form-check-input" type="radio" name="<?php echo $sk->nmr_pertanyaan ?>" value="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input class="form-check-input" type="radio" name="<?php echo $sk->nmr_pertanyaan ?>" value="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input class="form-check-input" type="radio" name="<?php echo $sk->nmr_pertanyaan ?>" value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input class="form-check-input" type="radio" name="<?php echo $sk->nmr_pertanyaan ?>" value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input class="form-check-input" type="radio" name="<?php echo $sk->nmr_pertanyaan ?>" value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input class="form-check-input" type="radio" name="<?php echo $sk->nmr_pertanyaan ?>" value="7">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <?php echo $sk->pilihan2 ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                             
        

</div>


<br>
        <?php endforeach; ?>                
        <div class="form-example-int mg-t-15">
            <center>
                            <button class="btn btn-success notika-btn-success" type="submit">Submit</button>
                            </center>
                        </div>


                        </form>
                    </div>
                </div>
        
      
