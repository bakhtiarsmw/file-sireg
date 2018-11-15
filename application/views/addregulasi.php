  <!-- Plugin -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/bootstrap-markdown/bootstrap-markdown.css'; ?>">
  <!-- Plugin -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/summernote/summernote.css'; ?>">
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/../fonts/font-awesome/font-awesome.css'; ?>">

  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Tambah Regulasi</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin-website/'; ?>">Home</a></li>
        <li><a href="<?php echo base_url().'admin-website/regulasi.html'; ?>">Daftar Regulasi</a></li>
        <li class="active">Tambah Regulasi</li>
      </ol>
    </div>

    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-xs-12">
        <form method="post" action="<?php echo base_url()."admin-website/insert.html" ?>" class="vertical-form" enctype="multipart/form-data">
          <!-- Judul -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Judul</h3>
            </div>             
              <textarea class="form-control" id="judul" rows="10" name="judul"></textarea>
	      </div>
          <!-- End Judul -->
          <!-- Konsideran -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Konsideran</h3>
            </div>
            <div class="panel-body">  
            <p>Menimbang :</p>            
              <textarea class="form-control" id="menimbang" rows="10" name="menimbang"></textarea>
            </div>
            <div class="panel-body">  
            <p>Mengingat :</p>            
              <textarea class="form-control" id="mengingat" rows="10" name="mengingat"></textarea>
            </div>
          </div>
          <!-- End Konsideran -->
          <!-- Validasi Norma -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Validasi Norma</h3>
            </div>
            <textarea class="form-control" id="norma" rows="10" name="norma"></textarea>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title" style="background-color: lime">Batang Tubuh</h3>
            </div>
            <textarea class="form-control" id="tubuh" rows="10" name="tubuh"></textarea>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Pengesahan</h3>
            </div>
            <textarea class="form-control" id="pengesahan" rows="10" name="pengesahan"></textarea>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Penjelasan</h3>
            </div>
            <textarea class="form-control" id="penjelasan" rows="10" name="penjelasan"></textarea>
          </div>
          <!-- End Validasi Norma -->
          <button type="submit" class="btn btn-success"><i class="icon wb-check" aria-hidden="true"></i> Simpan</button>
          <button type="button" class="btn btn-danger" onclick="location.href='<?php echo base_url()."admin-website/regulasi.html"; ?>';"><i class="icon wb-close" aria-hidden="true"></i> Batal</button>          
	    </form>
		</div>
      </div>
    </div>
  </div>
  <!-- End Page -->

  <script>
    Breakpoints();
  </script>
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