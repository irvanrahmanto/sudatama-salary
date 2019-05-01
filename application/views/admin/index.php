<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Karyawan</th>
            <th scope="col">Nama Karyawan</th>
            <th scope="col">Email Karyawan</th>
            <th scope="col">Gaji Pokok</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?= $this->session->flashdata('message'); ?>
          <?php $i = 1; ?>
          <?php foreach ($karyawan as $pg) : ?>
            <!-- < ($dataabsen as $pg) : ?> -->
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $pg['idKaryawan']; ?></td>
              <td><?= $pg['namaKaryawan']; ?></td>
              <td><?= $pg['emailK']; ?></td>
              <td>
                <= $gajikaryawan['gaji_default']; ?>
              </td>
              <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?= $pg['idKaryawan'] ?>">
                  Edit
                </button>
              </td>
            </tr>
            <?php $i++; ?>
            <!-- < endforeach; ?> -->
          <?php endforeach; ?>
        </tbody>
      </table>

      <!-- Modal -->
      <?php foreach ($karyawan as $pg) : ?>
        <div class="modal fade" id="<?= $pg['idKaryawan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">kelola gaji pegawai</h5>
                <!-- php if ($this->session->flashdata('message') != NULL) > -->
                <!-- ?= $this->session->flashdata('message'); ?> -->
                <!-- php endif; ?> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/tambahgaji'); ?>" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pegawai</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?= $pg['namaKaryawan']; ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gaji pokok</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rp. 4.000.000" Disabled>
                  </div>
                  <label for="exampleInputEmail1">Absensi</label>
                  <div class="input-group">
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="<= $absen['tanggal']; ?>" disabled>
                    <div class="input-group-append">
                      <!-- <span class="input-group-text">$</span> -->
                      <span class="input-group-text">/20 Day</span>
                    </div>
                  </div>
                  <div class="input-group mt-1">
                    <!-- <label for="exampleInputEmail1">Absensi</label> -->
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="<= $absen['idJam']; ?>" disabled>
                    <div class="input-group-append">
                      <!-- <span class="input-group-text">$</span> -->
                      <span class="input-group-text">/120 Hours/month</span>
                    </div>
                  </div>
                  <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Masukkan gaji</label>
                    <input name="gaji" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input gaji" autocomplete="off">
                  </div>
                  <input class="btn btn-success" type="submit" name="submit" value="confirm">
                  <a href="<?php echo base_url(); ?>"><input class="btn btn-warning" type="button" value="cancel"></a>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>


      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->