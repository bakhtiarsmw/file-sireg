  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Daftar Regulasi</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin-website/'; ?>">Home</a></li>
        <li class="active">Daftar Regulasi</li>
      </ol>
      <div class="page-header-actions">
          <a href="<?php echo base_url()."admin-website/input.html"; ?>" class="btn btn-success">
            <i class="icon wb-plus" aria-hidden="true"></i>
          <span class="hidden-xs">Tambah Data</span>
        </a>
      </div>
    </div>
    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th style="text-align: center;">No.</th>
                <th style="text-align: center;">Judul</th>
                <th style="text-align: center;">Detail</th>
              </tr>
              </thead>
              <tr>                
                <?php if($data): foreach($data as $p): ?>
                <td><?php echo $p->ID; ?></td>
                <td><?php echo $p->JUDUL; ?></td>
                <td><div class="col-sm-6">
              <!-- Example Default 
                  <div class="toolbar-icons hidden" id="set-04-options">
                    <a href="javascript:void(0)" onclick="location.href='<?php echo base_url()."admin-website/detil/".$p->ID; ?>';"><i class="icon wb-eye" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)" onclick="location.href='<?php echo base_url()."admin-website/kendaraan.html"; ?>';"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)"><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>                  
                  <button class="btn btn-icon btn-dark btn-pure" data-plugin="toolbar"
                  data-toolbar="#set-04-options" data-toolbar-style="info" data-toolbar-position="right"
                  type="button"><i class="icon wb-settings" aria-hidden="true"></i></button>-->
                  <a href="<?php echo base_url()."admin-website/detil/".$p->ID; ?>"><i class="icon wb-eye" aria-hidden="true"></i></a>
              <!-- End Example Default -->
            </div></td>
              </tr>
            <?php endforeach; endif; ?>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
    </div>
  </div>
  <!-- End Page -->