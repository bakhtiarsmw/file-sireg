  <!-- Plugin -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/summernote/summernote.css'; ?>">
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/../fonts/font-awesome/font-awesome.css'; ?>">

  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Detail Peraturan Daerah</h1>
      <div class="page-header-actions">
        <button type="button" class="btn btn-sm btn-icon btn-inverse btn-round" data-toggle="tooltip"
        data-original-title="Edit" id="edit" onclick="edit()">
          <i class="icon wb-pencil" aria-hidden="true"></i>
        </button>
        <button type="button" class="btn btn-sm btn-icon btn-inverse btn-round" data-toggle="tooltip"
        data-original-title="Refresh">
          <i class="icon wb-refresh" aria-hidden="true"></i>
        </button>
        <button type="button" class="btn btn-sm btn-icon btn-inverse btn-round" data-toggle="tooltip"
        data-original-title="Setting">
          <i class="icon wb-settings" aria-hidden="true"></i>
        </button>
      </div>
    </div>            

  <div class="page-content">
    <div class="col-xs-12">
    <div class="col-xs-6">
    <form method="post" action="<?php echo base_url()."admin-website/insert.html" ?>" class="vertical-form" enctype="multipart/form-data">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel">
         <div class="panel-heading">
           <h3 class="panel-title">Judul</h3>
         </div>
         <div class="panel-body">
         <div class="click2edit">
            <?php echo $data->JUDUL; ?>
         </div>
         </div>
        </div>
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Konsideran</h3>
          </div>
          <div class="panel-body">
          <p>Menimbang :</p>
            <div class="click2edit">
              <?php echo $data->MENIMBANG; ?>
            </div>
          </div>
          <div class="panel-body">
          <p>Mengingat :</p>
            <div class="click2edit">
              <?php echo $data->MENGINGAT; ?>
            </div>
          </div>
        </div>
        <div class="panel">
         <div class="panel-heading">
           <h3 class="panel-title">Validasi Norma</h3>
         </div>
         <div class="panel-body">
         <div class="click2edit">
            <?php echo $data->NORMA; ?>
         </div>
         </div>
        </div>        
      </div>
    </div>
    </form>
    </div>
    
    <div class="col-xs-6">
    <form method="post" action="<?php echo base_url()."admin-website/insert.html" ?>" class="vertical-form" enctype="multipart/form-data">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel">
         <div class="panel-heading">
           <h3 class="panel-title">Evaluasi Judul</h3>
         </div>
         <div class="panel-body">
         <div class="#">
            <?php echo $datax->EJUDUL; ?>
         </div>
         </div>
        </div>
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Evaluasi Konsideran</h3>
          </div>
          <div class="panel-body">
          <p>Menimbang :</p>
            <div class="#">
              <?php echo $datax->EMENIMBANG; ?>
            </div>
          </div>
          <div class="panel-body">
          <p>Mengingat :</p>
            <div class="#">
              <?php echo $datax->EMENGINGAT; ?>
            </div>
          </div>
        </div>
        <div class="panel">
         <div class="panel-heading">
           <h3 class="panel-title">Evaluasi Validasi Norma</h3>
         </div>
         <div class="panel-body">
         <div class="#">
            <?php echo $datax->ENORMA; ?>
         </div>
         </div>
        </div>        
      </div>
    </div>
    <button type="submit" class="btn btn-outline btn-primary">Simpan</button>
      <button type="button" class="btn btn-outline btn-danger" id="save" onclick="location.href='<?php echo base_url()."admin-website/regulasi.html"; ?>';">Batal</button>
    </form>
    </div>
    </div>
  </div>
  </div>
  <!-- End Page -->

    <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      window.edit = function() {
        $('.click2edit').summernote({
          focus: true
        });
      };
      window.save = function() {
        $('.click2edit').destroy();
      };
    })(document, window, jQuery);
    </script>