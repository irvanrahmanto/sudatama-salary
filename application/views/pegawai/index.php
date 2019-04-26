       <!-- Content Wrapper -->
       <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">

           <!-- Begin Page Content -->
           <div class="container-fluid">

             <!-- Page Heading -->
             <h1 class="h3 mb-4 text-gray-800"> <?= $title; ?> </h1>

             <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Kode Karyawan</th>
                   <th scope="col">NIP</th>
                   <th scope="col">Nama Karyawan</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 <?= $i = 1; ?>
                 <?php foreach ($data as $pgg) : ?>
                   <tr>
                     <!-- <th scope="row">1</th>
                         <td>4500</td>
                         <td>1301164500</td>
                         <td>Cenjay</td> -->
                     <th scope="row"><?= $i; ?></th>
                     <td><?= $pgg['idKaryawan']; ?></td>
                     <td><?= $pgg['idKaryawan']; ?></td>
                     <td><?= $pgg['namaKaryawan']; ?></td>
                     <td>
                       <button type="button" class="btn btn-success">Show Profile</button>

                       <!-- Button trigger modal -->
                       <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                         Salary info
                       </button>
                     </td>
                   </tr>
                   <!-- <tr>
                               <th scope="row">2</th>
                               <td>4500</td>
                               <td>1301164500</td>
                               <td>Fachreza</td>
                               <td>
                                 <button type="button" class="btn btn-success">Show Profile</button> -->
                   <!-- <button type="button" class="btn btn-warning">Salary info</button> -->
                   <!-- Button trigger modal -->
                   <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                   Salary info
                                 </button>
                               </td>
                             <tr>
                             <tr>
                               <th scope="row">3</th>
                               <td>4500</td>
                               <td>1301164500</td>
                               <td>Batnun</td>
                               <td>
                                 <button type="button" class="btn btn-success">Show Profile</button> -->
                   <!-- <button type="button" class="btn btn-warning">Salary info</button> -->
                   <!-- Button trigger modal -->
                   <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                   Salary info
                                 </button>
                               </td>
                             <tr>
                             <tr>
                               <th scope="row">4</th>
                               <td>4500</td>
                               <td>1301164500</td>
                               <td>Alghifary</td>
                               <td>
                                 <button type="button" class="btn btn-success">Show Profile</button> -->
                   <!-- <button type="button" class="btn btn-warning">Salary info</button> -->
                   <!-- Button trigger modal -->
                   <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                   Salary info
                                 </button>
                               </td>
                             <tr> -->
                   <?= $i++; ?>
                 <?php endforeach; ?>
               </tbody>
             </table>

             <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fachreza Alghifary" Disabled>
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Jabatan</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Office Boy" Disabled>
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Gaji Pokok</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rp. 10.000" Disabled>
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Absen</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="32 %" Disabled>
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Lembur</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ga pernah" Disabled>
                       </div>
                       <button type="submit" class="btn btn-primary">Print</button>
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