  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Daftar Evaluasi</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin-website/'; ?>">Home</a></li>
        <li class="active">Daftar Evaluasi</li>
      </ol>
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
                <th style="text-align: center;">Evaluasi</th>
              </tr>
              </thead>
              <tr>                
                <?php if($data): foreach($data as $p): ?>
                <td><?php echo $p->ID; ?></td>
                <td><?php echo $p->JUDUL; ?></td>
                <td><div class="col-sm-6">
                  <a href="<?php echo base_url()."admin-website/evalu/".$p->ID; ?>"><i class="icon wb-eye" aria-hidden="true"></i></a>
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