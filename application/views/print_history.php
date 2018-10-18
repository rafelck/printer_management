<?php $this->load->view('component/header'); ?>

      <div id="content-wrapper">

        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <center>
            <div class="card-header">
              
              <i class="fas fa-table"></i>
              <?php if ($stat == 'LUNAS' ) { ?>
              DAFTAR LUNAS
        <?php } else{ ?>
        DAFTAR UTANG
        <?php }  ?>
            </div>
            </center>
             
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Number</th>
                      <th>Nim</th>
                      <th>Name</th>
                      <th>Jumlah Kertas</th>
                      <th>Total Bayar</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php $no = 1; ?>
                            <?php foreach ($daftar as $data) { ; ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $data['nim']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['jumlah_kertas']; ?></td>
                      <td><?php echo $data['total']; ?></td>
                      <td><?php echo $data['status']; ?></td>
                      <td><?php echo $data['timestamp']; ?></td>
                    </tr>
                     <?php $no = $no + 1; } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->


    

 <?php $this->load->view('component/footer'); ?> 
