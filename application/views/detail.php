  <!-- Plugin -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/summernote/summernote.css'; ?>">
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/../fonts/font-awesome/font-awesome.css'; ?>">

  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Detail Regulasi</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin-website'; ?>">Home</a></li>
        <li class="active">Detail Regulasi</li>
      </ol>
      <div class="page-header-actions">
          <a href="<?php echo base_url()."admin-website/report_regulasi/".$data->ID; ?>" class="btn btn-primary">
            <i class="icon wb-print" aria-hidden="true"></i>
          <span class="hidden-xs">CETAK REGULASI</span>
        </a>
      </div>
    </div>


    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="col-lg-6 col-xs-6">
            <form method="post" action="<?php echo base_url()."admin-website/update.html" ?>" class="vertical-form" enctype="multipart/form-data">
              <input type="hidden" value="<?php echo $data->ID; ?>" name="id">
              <!-- Judul -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Judul</h3>
                </div>             
                  <textarea class="form-control" id="judul" rows="5" name="judul">
                    <?php 
                    $rpl_1=str_replace("@", "'", $data->JUDUL);
                    $rpl_2=str_replace('#', '"', $rpl_1);
                    echo $rpl_2;
                    ?>
                  </textarea>
              </div>
              <!-- End Judul -->
              <!-- Konsideran -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Konsideran Menimbang</h3>
                </div>
                <div class="panel-body">             
                  <textarea class="form-control" id="menimbang" rows="10" name="menimbang">
                    <?php 
                    $rpl_mn=str_replace("@", "'", $data->MENIMBANG);
                    $rpl_mn_2=str_replace('#', '"', $rpl_mn);

                    echo $rpl_mn_2;
                    ?>
                  </textarea>
                </div>
                <div class="panel-heading">
                  <h3 class="panel-title">Konsideran Mengingat</h3>
                </div>
                <div class="panel-body">  
                  <textarea class="form-control" id="mengingat" rows="10" name="mengingat">
                    <?php 
                    $rpl_mng=str_replace("@", "'", $data->MENGINGAT);
                    $rpl_2_mng=str_replace('#', '"', $rpl_mng);

                    echo $rpl_2_mng;
                    ?>
                  </textarea>
                </div>
              </div>
              <!-- End Konsideran -->
              <!-- Validasi Norma -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Validasi Judul Norma</h3>
                </div>
                <div class="panel-body">
                  <textarea class="form-control" id="norma" rows="10" name="norma">
                     <?php 
                      $rpl_mng=str_replace("@", "'", $data->NORMA);
                      $rpl_2_mng=str_replace('#', '"', $rpl_mng);

                      echo $rpl_2_mng;
                      ?>
                  </textarea>
                </div>
                <div class="panel-heading">
                  <h3 class="panel-title">Pasal Norma</h3>
                </div>
                <div class="panel-body">
                  <textarea class="form-control" id="pasal" rows="10" name="pasal">
                     <?php 
                      $rpl_psl=str_replace("@", "'", $data->PASAL);
                      $rpl_2_psl=str_replace('#', '"', $rpl_psl);

                      echo $rpl_2_psl;
                      ?>
                  </textarea>
                </div>
              </div>
              <!-- End Validasi Norma -->

              <!-- Pengesahan -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Pengesahan</h3>
                </div>
                <div class="panel-body">
                  <textarea class="form-control" id="pengesahan" rows="10" name="pengesahan">
                     <?php 
                      $rpl_png=str_replace("@", "'", $data->PENGESAHAN);
                      $rpl_2_png=str_replace('#', '"', $rpl_png);

                      echo $rpl_2_png;
                      ?>
                  </textarea>
                </div>
              </div>
              <!-- End Pengesahan -->    
              <!-- Penjelasan -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Penjelasan</h3>
                </div>
                <div class="panel-body">
                  <textarea class="form-control" id="penjelasan" rows="10" name="penjelasan">
                     <?php 
                      $rpl_pnj=str_replace("@", "'", $data->PENJELASAN);
                      $rpl_2_pnj=str_replace('#', '"', $rpl_pnj);

                      echo $rpl_2_pnj;
                      ?>
                  </textarea>
                </div>
              </div>
              <!-- End Pengesahan -->     
              <button type="submit" class="btn btn-success"><i class="icon wb-check" aria-hidden="true"></i> Simpan</button>
              <button type="button" class="btn btn-danger" onclick="location.href='<?php echo base_url()."admin-website/regulasi.html"; ?>';"><i class="icon wb-close" aria-hidden="true"></i> Batal</button>
            </form>
          </div>
          <div class="col-lg-6 col-xs-6">
            <!-- Judul -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Evaluasi Judul</h3>
              </div>             
                <textarea readonly="readonly" class="form-control" id="judul-evaluasi" rows="5" name="judul"><?php echo $datax->EJUDUL; ?></textarea>
            </div>
            <!-- End Judul -->
            <!-- Konsideran -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Evaluasi Konsideran Menimbang</h3>
              </div>
              <div class="panel-body">          
                <textarea class="form-control" id="menimbang-evaluasi" rows="10" name="menimbang" readonly><?php echo $datax->EMENIMBANG; ?></textarea>
              </div>
              <div class="panel-heading">
                <h3 class="panel-title">Evaluasi Konsideran Mengingat</h3>
              </div>
              <div class="panel-body">            
                <textarea class="form-control" id="mengingat-evaluasi" rows="10" name="mengingat" readonly><?php echo $datax->EMENGINGAT; ?></textarea>
              </div>
            </div>
            <!-- End Konsideran -->
            <!-- Validasi Norma -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Evaluasi Validasi Judul Norma</h3>
              </div>
              <div class="panel-body">
                <textarea readonly="readonly" class="form-control" id="norma-evaluasi" rows="10" name="norma"><?php echo $datax->ENORMA; ?></textarea>
              </div>
              <div class="panel-heading">
                <h3 class="panel-title">Evaluasi Pasal Norma</h3>
              </div>
              <div class="panel-body">
                <textarea readonly="readonly" class="form-control" id="pasal-evaluasi" rows="10" name="norma"><?php echo $datax->EPASAL; ?></textarea>
              </div>
            </div>

            <!-- Evaluasi Pengesahan -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Evaluasi Pengesahan</h3>
              </div>
              <div class="panel-body">
                <textarea readonly="readonly" class="form-control" id="pengesahan-evaluasi" rows="10" name="pengesahan"><?php echo $datax->EPENGESAHAN; ?></textarea>
              </div>
            </div>
            <!-- End Evaluasi Pengesahan -->

            <!-- Evaluasi Penjelasan -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Evaluasi Penjelasan</h3>
              </div>
              <div class="panel-body">
                <textarea readonly="readonly" class="form-control" id="penjelasan-evaluasi" rows="10" name="penjelasan"><?php echo $datax->EPENJELASAN; ?></textarea>
              </div>
            </div>
            <!-- End Evaluasi Penjelassan -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->