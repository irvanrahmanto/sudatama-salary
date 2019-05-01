       <!-- Content Wrapper -->
       <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">

           <!-- Begin Page Content -->
           <div class="container-fluid">

             <!-- Page Heading -->
             <h1 class="h3 mb-4 text-gray-800"> <?= $title; ?> </h1>

             <div class="container-fluid">
               <div class="row">
                 <div class="col-md-12">
                   <form class="form-inline my-2 my-lg-0" method="post" action="<?= base_url('admin/carikaryawan'); ?>">
                     <input name="keyword" id="keyword" class="form-control mr-sm-2" type="search" placeholder="Search your NIP here" aria-label="Search" autocomplete="off">
                     <button class="btn btn-outline-white text-white bg-primary my-2 my-sm-0" type="submit" id="tombolcari" > Search</button>
                   </form>
                 </div>
               </div>
             </div>

             <table class="table mt-3">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Id Karyawan</th>
                   <th scope="col">NIP</th>
                   <th scope="col">Nama Karyawan</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 <?php if (!empty($karyawan)) { ?>
                   <?php $i = 1; ?>
                   <!-- <td>< var_dump($data); ?></td> -->
                   <?php foreach ($karyawan as $dt) : ?>
                     <tr>
                       <th scope="row"><?= $i; ?></th>
                       <td><?= $dt['idKaryawan']; ?></td>
                       <td><?= $dt['idKaryawan']; ?></td>
                       <td><?= $dt['namaKaryawan']; ?></td>
                       <td>
                         <!-- Button trigger modal -->
                         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#<?= $dt['idKaryawan'] ?>">
                           Show profile
                         </button>
                       </td>
                     </tr>
                     <?php $i++; ?>
                   <?php endforeach; ?>
                 <?php } else { ?>
                   <?= "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>" ?>
                 <?php } ?>
               </tbody>
             </table>

             <!-- Modal -->
             <?php foreach ($karyawan as $dt) : ?>
               <div class="modal fade" id="<?= $dt['idKaryawan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Slip gaji</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form>
                         <div class="form-group">
                           <label for="exampleInputEmail1">Nama</label>
                           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?= $dt['namaKaryawan']; ?>" Disabled>
                         </div>
                         <!-- ?php endforeach; ?> -->
                         <div class="form-group">
                           <label for="exampleInputEmail1">Gaji</label>
                           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<= $gajikary['gaji_default']; ?>" Disabled>
                         </div>
                         <!-- <div class="form-group">
                                                           <label for="exampleInputEmail1">Absen</label>
                                                           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="32 %" Disabled>
                                                           <div class="input-group-append">
                                                             <span class="input-group-text">Hours</span>
                                                           </div>
                                                         </div> -->
                         <label for="exampleInputEmail1">Absensi</label>
                         <div class="input-group">
                           <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
                           <div class="input-group-append">
                             <!-- <span class="input-group-text">$</span> -->
                             <span class="input-group-text">/20 Day</span>
                           </div>
                         </div>
                         <div class="input-group mt-1">
                           <!-- <label for="exampleInputEmail1">Absensi</label> -->
                           <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
                           <div class="input-group-append">
                             <!-- <span class="input-group-text">$</span> -->
                             <span class="input-group-text">/120 Hours/month</span>
                           </div>
                         </div>
                         <button type="submit" class="btn btn-primary mt-3">Print</button>
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