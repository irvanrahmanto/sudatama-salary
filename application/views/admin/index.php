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
            <th scope="col">NO</th>
            <th scope="col">ID Jabatan</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Gaji Pokok</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?= $i = 1; ?>
          <?php foreach ($data as $pg) : ?>
            <tr>
              <!-- <th scope="row">1</th>
                                                  <td>1301164135</td>
                                                  <td>Arif rachman hakim</td>
                                                  <td>Office Boy</td>
                                                  <td>Rp. 10.000</td> -->
              <th scope="row"><?= $i; ?></th>
              <td><?= $pg['idKaryawan']; ?></td>
              <td><?= $pg['namaKaryawan']; ?></td>
              <td><?= $pg['emailK']; ?></td>
              <td><?= $pg['totalgaji']; ?></td>
              <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Edit
                </button>
                <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                           Hapus
                                                      </button> -->

              </td>
            </tr>

            <!-- <tr>
                                                  <th scope="row">2</th>
                                                  <td>1301164135</td>
                                                  <td>Arif rachman hakim</td>
                                                  <td>Office Boy</td>
                                                  <td>Rp. 10.000</td>
                                                  <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                      Edit
                                                    </button> -->
            <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                      Hapus
                                                    </button> -->

            <!-- </td>
                                                </tr>

                                                <tr>
                                                  <th scope="row">3</th>
                                                  <td>1301164135</td>
                                                  <td>Arif rachman hakim</td>
                                                  <td>Office Boy</td>
                                                  <td>Rp. 10.000</td>
                                                  <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                      Edit
                                                    </button> -->
            <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                      Hapus
                                                    </button> -->

            <!-- </td>
                                                </tr>-->
            <?= $i++; ?>

          <?php endforeach; ?>
        </tbody>
        <!-- </table>  -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">kelola gaji pegawai</h5>
                <!-- php if ($this->session->flashdata('message') != NULL) > -->
                <?= $this->session->flashdata('message'); ?>
                <!-- php endif; ?> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<? ?>" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pegawai</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama pegawai">
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Status pegawai</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="input jabatan"> -->
                    <label for="exampleFormControlSelect1">Status pegawai</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>-</option>
                      <option>Pegawai tetap</option>
                      <option>Pegawai kontrak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gaji pokok</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rp. 10.000" Disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masukkan gaji</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input gaji">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gaji lembur</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="input jumlah lembur">
                  </div>
                  <button type="submit" class="btn btn-primary">konfirmasi</button>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total gaji</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="3.500.000" Disabled>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

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