  <!-- Plugin -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/summernote/summernote.css'; ?>">
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/../fonts/font-awesome/font-awesome.css'; ?>">

  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Evaluasi Regulasi</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin-website'; ?>">Home</a></li>
        <li class="active">Evaluasi Regulasi</li>
      </ol>
    </div>

    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-xs-12">
        <div class="col-xs-6">

          <!-- Judul -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Judul</h3>
            </div>             
              <textarea readonly="readonly" class="form-control" id="judul" rows="5" name="judul"><?php echo $data->JUDUL; ?></textarea>
        </div>
          <!-- End Judul -->
          <!-- Konsideran -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Konsideran</h3>
            </div>
            <div class="panel-body">  
            <p>Menimbang :</p>            
              <textarea readonly="readonly" class="form-control" id="menimbang" rows="10" name="menimbang"><?php echo $data->MENIMBANG; ?></textarea>
            </div>
            <div class="panel-body">  
            <p>Mengingat :</p>            
              <textarea readonly="readonly" class="form-control" id="mengingat" rows="10" name="mengingat"><?php echo $data->MENGINGAT; ?></textarea>
            </div>
          </div>
          <!-- End Konsideran -->
          <!-- Validasi Norma -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Validasi Norma</h3>
            </div>
            <textarea readonly="readonly" class="form-control" id="norma" rows="10" name="norma"><?php echo $data->NORMA; ?></textarea>
          </div>
          <!-- End Validasi Norma -->        
        </div>
      

      <div class="col-xs-6">
      <form method="post" action="<?php echo base_url()."admin-website/updatev.html" ?>" class="vertical-form" enctype="multipart/form-data">
      <input type="hidden" value="<?php echo $datax->E_ID; ?>" name="id">        
      <!-- Judul -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Evaluasi Judul</h3>
        </div>             
          <textarea class="form-control" id="judul" rows="5" name="judul"><?php echo $datax->EJUDUL; ?></textarea>
        </div>
          <!-- End Judul -->
          <!-- Konsideran -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Evaluasi Konsideran</h3>
            </div>
            <div class="panel-body">  
            <p>Menimbang :</p>            
              <textarea class="form-control" id="menimbang" rows="10" name="menimbang"><?php echo $datax->EMENIMBANG; ?></textarea>
            </div>
            <div class="panel-body">  
            <p>Mengingat :</p>            
              <textarea class="form-control" id="mengingat" rows="10" name="mengingat"><?php echo $datax->EMENGINGAT; ?></textarea>
            </div>
          </div>
          <!-- End Konsideran -->
          <!-- Validasi Norma -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Evaluasi Validasi Norma</h3>
            </div>
            <textarea class="form-control" id="norma" rows="10" name="norma"><?php echo $datax->ENORMA; ?></textarea>
          </div>
          <!-- End Validasi Norma -->           
          <button type="submit" class="btn btn-success"><i class="icon wb-check" aria-hidden="true"></i> Simpan</button>
          <button type="button" class="btn btn-danger" onclick="location.href='<?php echo base_url()."admin-website/regulasi.html"; ?>';"><i class="icon wb-close" aria-hidden="true"></i> Batal</button>
        </form>          
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->