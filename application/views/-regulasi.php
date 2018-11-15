  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Daftar Regulasi</h1>
      <ol class="breadcrumb">
        <li><a href="../index.html">Home</a></li>
        <li class="active">Daftar Regulasi</li>
      </ol>
      <div class="page-header-actions">
          <a href="<?php echo base_url()."admin-website/input.html"; ?>" class="btn btn-success">
            <i class="icon wb-link" aria-hidden="true"></i>
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
                <th style="text-align: center;"><i class="icon wb-file" aria-hidden="true"></i></th>
                <th style="text-align: center;">Raperda</th>
                <th style="text-align: center;">Validasi Norma</th>
                <th style="text-align: center;">Evaluasi</th>
                <th style="text-align: center;">Aksi</th>
              </tr>
              </thead>
              <tr>                
                <?php if($data): foreach($data as $p): ?>
                <th>Judul</th>
                <!-- <td><?php echo $p->ID; ?></td> -->
                <td><?php echo cutText($p->JUDUL, 50, 2) . '...'; ?></td>
                <td><?php echo cutText($p->NORMA, 100, 2) . '...'; ?></td>
                <td></td>
                <td><div class="toolbar-icons hidden" id="set-04-options">
                    <a href="javascript:void(0)"><i class="icon wb-star" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)"><i class="icon wb-star-half" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)"><i class="icon wb-star-outline" aria-hidden="true"></i></a>
                  </div></td>
              </tr>
              <tr>
                <th>Konsideran</th>
                <th>Menimbang</th>
                <tr>
                  <td></td>
                  <td><?php echo cutText($p->MENIMBANG, 150, 2) . '...'; ?></td>
                </tr>
                <tr>
                  <td></td>
                  <th>Mengingat</th>
                  <tr>
                    <td></td>
                    <td><?php echo cutText($p->MENGINGAT, 150, 2) . '...'; ?></td>
                  </tr>
                </tr>              
              </tr>
            <?php endforeach; endif; ?>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
    </div>
  </div>
  <!-- End Page -->