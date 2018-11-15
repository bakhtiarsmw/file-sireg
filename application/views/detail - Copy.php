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
      <form method="post" action="<?php echo base_url()."admin-website/insert.html" ?>" class="vertical-form" enctype="multipart/form-data">
      <div class="example-wrap">
          <h4 class="example-title">Judul</h4>
          <textarea class="form-control" id="textareaDefault" rows="3"></textarea>
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
      </form>
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