<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>SIVRADA | Sistem Evaluasi Rancangan Peraturan Daerah</title>

  <link rel="apple-touch-icon" href="<?=base_url().'assets/images/apple-touch-icon.png'; ?>">
  <link rel="shortcut icon" href="<?=base_url().'assets/images/favicon.ico'; ?>">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?=base_url().'assets/css/bootstrap.min.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/css/bootstrap-extend.min.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/css/site.min.css'; ?>">

  <link rel="stylesheet" href="<?=base_url().'assets/vendor/animsition/animsition.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/vendor/asscrollable/asScrollable.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/vendor/switchery/switchery.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/vendor/intro-js/introjs.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/vendor/slidepanel/slidePanel.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/vendor/flag-icon-css/flag-icon.css'; ?>">

  <!-- Plugin -->
  <link rel="stylesheet" href="<?=base_url().'assets/vendor/datatables-bootstrap/dataTables.bootstrap.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/vendor/datatables-responsive/dataTables.responsive.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/vendor/summernote/summernote.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/vendor/webui-popover/webui-popover.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/vendor/toolbar/toolbar.css'; ?>">

  <!-- Page -->
  <link rel="stylesheet" href=".<?=base_url().'assets/css/../fonts/font-awesome/font-awesome.css'; ?>">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?=base_url().'assets/fonts/web-icons/web-icons.min.css'; ?>">
  <link rel="stylesheet" href="<?=base_url().'assets/fonts/brand-icons/brand-icons.min.css'; ?>">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <style type="text/css">
    .modal.modal-wide .modal-dialog {
      width: 90%;
    }
    .modal-wide .modal-body {
      overflow-y: auto;
    }
    #tallModal .modal-body p { margin-bottom: 900px }

  </style>

  <!--[if lt IE 9]>
    <script src="<?=base_url().'assets/vendor/html5shiv/html5shiv.min.jse'; ?>></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="<?=base_url().'assets/vendor/media-match/media.match.min.jse'; ?>></script>
    <script src="<?=base_url().'assets/vendor/respond/respond.min.jse'; ?>></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?=base_url().'assets/vendor/modernizr/modernizr.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/breakpoints/breakpoints.js'; ?>"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="<?=base_url().'assets/images/logo.png" title="SIVRADA"'; ?>">
        <span class="navbar-brand-text"> SIVRADA</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button" id="toggleTrigger">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="<?=base_url().'assets/portraits/5.jpg'; ?>" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="<?=base_url().'admin-website/logout'; ?>" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li <?=($this->session->userdata('menu')=="dashboard")?" class='site-menu-item active'": "class='site-menu-item'"; ?>>
              <a href="<?=base_url().'admin-website/dashboard'; ?>" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>
            <li <?=($this->session->userdata('menu')=="regulasi")?" class='site-menu-item active'": "class='site-menu-item'"; ?>>
              <a href="<?=base_url().'admin-website/regulasi.html'; ?>" data-slug="tables">
                <i class="site-menu-icon wb-book" aria-hidden="true"></i>
                <span class="site-menu-title">Regulasi</span>
              </a>
            </li>
            <li <?=($this->session->userdata('menu')=="evaluasi")?" class='site-menu-item active'": "class='site-menu-item'"; ?>>
              <a href="<?=base_url().'admin-website/evaluasi.html'; ?>" data-slug="tables">
                <i class="site-menu-icon wb-library" aria-hidden="true"></i>
                <span class="site-menu-title">Evaluasi</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>

  
  <!-- Page -->
  <?php $this->load->view($page); ?>
  <!-- End Page -->

  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>


  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-right">
      © 2018
    </div>
  </footer>

  <!-- Core  -->
  <script src="<?=base_url().'assets/vendor/jquery/jquery.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/bootstrap/bootstrap.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/animsition/jquery.animsition.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/asscroll/jquery-asScroll.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/mousewheel/jquery.mousewheel.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/asscrollable/jquery.asScrollable.all.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/ashoverscroll/jquery-asHoverScroll.js'; ?>"></script>

  <!-- Plugins -->
  <script src="<?=base_url().'assets/vendor/switchery/switchery.min.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/intro-js/intro.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/screenfull/screenfull.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/slidepanel/jquery-slidePanel.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/summernote/summernote.min.js'; ?>"></script>

  <script src="<?=base_url().'assets/vendor/webui-popover/jquery.webui-popover.min.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/toolbar/jquery.toolbar.min.js'; ?>"></script>

  <script src="<?=base_url().'assets/vendor/bootstrap-markdown/bootstrap-markdown.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/marked/marked.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/to-markdown/to-markdown.js'; ?>"></script>

  <script src="<?=base_url().'assets/vendor/chartist-js/chartist.min.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/aspieprogress/jquery-asPieProgress.min.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/gmaps/gmaps.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/matchheight/jquery.matchHeight-min.js'; ?>"></script>

  <script src="<?=base_url().'assets/vendor/datatables/jquery.dataTables.min.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/datatables-bootstrap/dataTables.bootstrap.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/datatables-responsive/dataTables.responsive.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/datatables-tabletools/dataTables.tableTools.js'; ?>"></script>

  <script src="<?=base_url().'assets/vendor/ladda-bootstrap/spin.js'; ?>"></script>
  <script src="<?=base_url().'assets/vendor/ladda-bootstrap/ladda.js'; ?>"></script>



  <!-- Scripts -->
  <script src="<?=base_url().'assets/js/core.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/site.js'; ?>"></script>

  <script src="<?=base_url().'assets/js/sections/menu.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/sections/menubar.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/sections/sidebar.js'; ?>"></script>

  <script src="<?=base_url().'assets/js/configs/config-colors.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/configs/config-tour.js'; ?>"></script>

  <script src="<?=base_url().'assets/js/components/asscrollable.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/components/animsition.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/components/slidepanel.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/components/switchery.js'; ?>"></script>  
  <script src="<?=base_url().'assets/js/components/summernote.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/components/gmaps.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/components/matchheight.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/components/webui-popover.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/components/toolbar.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/components/buttons.js'; ?>"></script>
  <script src="<?=base_url().'assets/js/components/ladda-bootstrap.js'; ?>"></script>
  <script src="<?=base_url().'assets/tinymce/js/tinymce/tinymce.min.js'; ?>"></script>

  <script>

    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();

        tinymce.init({
            selector: '#judul',
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });
        tinymce.init({
            selector: '#pasal',
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });
        tinymce.init({
            selector: '#mengingat',
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });
        tinymce.init({
            selector: '#menimbang',
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });
        tinymce.init({
            selector: '#norma',
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });

        tinymce.init({
            selector: '#pengesahan',
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });

        tinymce.init({
            selector: '#penjelasan',
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });

        tinymce.init({
            selector: '#judul-evaluasi',
            readonly : 1,
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });
        tinymce.init({
            selector: '#mengingat-evaluasi',
            readonly:1,
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });
        tinymce.init({
            selector: '#menimbang-evaluasi',
            readonly:1,
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });
        tinymce.init({
            selector: '#norma-evaluasi',
            readonly:1,
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });
        tinymce.init({
            selector: '#pasal-evaluasi',
            readonly:1,
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });
        tinymce.init({
            selector: '#pengesahan-evaluasi',
            readonly:1,
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });

        tinymce.init({
            selector: '#penjelasan-evaluasi',
            readonly:1,
            theme: 'modern',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });

      });

      // Fixed Header Example
      // --------------------
      (function() {
        // initialize datatable
        var table = $('#exampleFixedHeader').DataTable({
          responsive: true,
          "bPaginate": false,
          "sDom": "t" // just show table, no other controls
        });

        // initialize FixedHeader
        var offsetTop = 0;
        if ($('.site-navbar').length > 0) {
          offsetTop = $('.site-navbar').eq(0).innerHeight();
        }
        var fixedHeader = new FixedHeader(table, {
          offsetTop: offsetTop
        });

        // redraw fixedHeaders as necessary
        $(window).resize(function() {
          fixedHeader._fnUpdateClones(true);
          fixedHeader._fnUpdatePositions();
        });
      })();

      // Individual column searching
      // ---------------------------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            initComplete: function() {
              this.api().columns().every(function() {
                var column = this;
                var select = $(
                    '<select class="form-control width-full"><option value=""></option></select>'
                  )
                  .appendTo($(column.footer()).empty())
                  .on('change', function() {
                    var val = $.fn.dataTable.util.escapeRegex(
                      $(this).val()
                    );

                    column
                      .search(val ? '^' + val + '$' : '',
                        true, false)
                      .draw();
                  });

                column.data().unique().sort().each(function(
                  d, j) {
                  select.append('<option value="' + d +
                    '">' + d + '</option>')
                });
              });
            }
          });

          $('#exampleTableSearch').DataTable(options);
        });
      })();

      // Table Tools
      // -----------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            "aoColumnDefs": [{
              'bSortable': false,
              'aTargets': [-1]
            }],
            "iDisplayLength": 5,
            "aLengthMenu": [
              [5, 10, 25, 50, -1],
              [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
              "sSwfPath": "<?=base_url().'assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf'; ?>"
            }
          });

          $('#exampleTableTools').dataTable(options);
        });
      })();

      // Table Add Row
      // -------------

      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var t = $('#exampleTableAdd').DataTable(defaults);

          $('#exampleTableAddBtn').on('click', function() {
            t.row.add([
              'Adam Doe',
              'New Row',
              'New Row',
              '30',
              '2015/10/15',
              '$20000'
            ]).draw();
          });
        });
      })();
    })(document, window, jQuery);

    $(document).ready(function($) {

      Site.run();

      // widget-linearea
      (function() {
        var linearea = new Chartist.Line('#widgetLinearea .ct-chart', {
          labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
          series: [
            [0, 2.5, 2, 2.8, 2.6, 3.8, 0],
            [0, 1.4, 0.5, 2, 1.2, 0.9, 0]
          ]
        }, {
          low: 0,
          showArea: true,
          showPoint: false,
          showLine: false,
          fullWidth: true,
          chartPadding: {
            top: 0,
            right: 10,
            bottom: 0,
            left: 0
          },
          axisX: {
            showGrid: false,
            labelOffset: {
              x: -14,
              y: 0
            },
          },
          axisY: {
            labelOffset: {
              x: -10,
              y: 0
            },
            labelInterpolationFnc: function(num) {
              return num % 1 === 0 ? num : false;
            }
          }
        });
      })();

      //widget-pie-progress
      (function() {
        $("#widgetPieProgress .pieProgress-one").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("primary", 600),
          trackcolor: $.colors("blue-grey", 100),
        });

        $("#widgetPieProgress .pieProgress-two").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("cyan", 600),
          trackcolor: $.colors("blue-grey", 100),
        });

        $("#widgetPieProgress .pieProgress-three").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("purple", 600),
          trackcolor: $.colors("blue-grey", 100),
        });
      })();

      // widget bar
      (function() {
        var bar = new Chartist.Bar('#widgetBar .ct-chart', {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'],
          series: [
            [160, 200, 150, 400, 460, 440, 240, 250, 50],
            [600 - 160, 600 - 200, 600 - 150, 600 - 400, 600 -
              460, 600 - 440, 600 - 240, 600 - 250, 600 - 50
            ]
          ]
        }, {
          stackBars: true,
          fullWidth: true,
          seriesBarDistance: 0,
          axisX: {
            showGrid: false,
          },
          axisY: {
            showGrid: false,
            labelInterpolationFnc: function(num) {
              return num / 200 % 1 === 0 ? num : false;
            }
          }
        });
      })();

      var defaults = $.components.getDefaults("webuiPopover");

      // Example Webui Popover Pop with Table
      // ------------------------------------
      (function() {
        var tableContent = $('#examplePopoverTable').html(),
          tableSettings = {
            title: 'WebUI Popover',
            content: tableContent,
            width: 500
          };

        $('#examplePopWithTable').webuiPopover($.extend({}, defaults,
          tableSettings));
      })();

      // Example Webui Popover Pop with List
      // -----------------------------------
      (function() {
        var listContent = $('#examplePopoverList').html(),
          listSettings = {
            content: listContent,
            title: '',
            padding: false
          };

        $('#examplePopWithList').webuiPopover($.extend({}, defaults,
          listSettings));

      })();

      // Example Webui Popover Pop with Large Content
      // --------------------------------------------
      (function() {
        var largeContent = $('#examplePopoverLargeContent').html(),
          largeSettings = {
            title: 'WebUI Popover',
            content: largeContent,
            width: 400,
            height: 350,
            closeable: true
          };

        $('#examplePopWithLargeContent').webuiPopover($.extend({},
          defaults, largeSettings));
      })();

      // widget gmap
      (function() {
        var map = new GMaps({
          el: '#gmap',
          lat: -12.043333,
          lng: -77.028333,
          zoomControl: true,
          zoomControlOpt: {
            style: "SMALL",
            position: "TOP_LEFT"
          },
          panControl: true,
          streetViewControl: false,
          mapTypeControl: false,
          overviewMapControl: false
        });

        map.addStyle({
          styledMapName: "Styled Map",
          styles: $.components.get('gmaps', 'styles'),
          mapTypeId: "map_style"
        });

        map.setStyle("map_style");
      })();
    });
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

</body>

</html>