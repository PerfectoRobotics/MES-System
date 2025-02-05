 <!--sidebar-wrapper--> <?php include_once('header.php') ?> <style>
   .checked {
     color: orange;
   }

    
 </style>
 <!--end header-->
 <!--page-wrapper-->
 <div class="page-wrapper">
   <!--page-content-wrapper-->
   <div class="page-content-wrapper">
     <div class="page-content">
       <!--breadcrumb-->
       <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
         <div class="breadcrumb-title pe-3"> Batch History</div>
         <div class="ps-3">
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb mb-0 p-0">
               <li class="breadcrumb-item">
                 <a href="javascript:;">
                   <i class="bx bx-home-alt"></i>
                 </a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">  History</li>
             </ol>
           </nav>
         </div>
         
       </div>
       <!--end breadcrumb-->
       <div class="card">
         <div class="card-body">
           <div class="row">
             <div class="col-sm-12 col-lg-12 border-right">
               <form class="row g-3">
                  <div class="col-sm-2">
                   <div class="form-group">
                     <label for="companyName">Batch Name</label>
                     <input type="text" class="form-control" id="name" placeholder=" " required>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label for="companyName">Position</label>
                     <input type="text" class="form-control" id="name" placeholder=" " required>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label for="companyName">Part Type</label>
                     <select class="form-control" name="">
                       <option>1</option>
                     </select>
                   </div>
                 </div>
                <div class="col-sm-2">
                   <div class="form-group">
                     <label for="companyName">Target Count</label>
                     <input type="text" class="form-control" id="name" placeholder=" " required>
                   </div>
                 </div>
                  <div class="col-sm-2">
                   <div class="form-group">
                     <label for="companyName"> Total Target Count</label>
                     <input type="text" class="form-control" id="name" placeholder=" " disabled="">
                   </div>
                 </div>
                  
                 <div class="col-sm-2">
                   <button type="submit" class="btn btn-primary btn-block">Filter</button>
                 </div>
             </div>
             </form>
           </div>
         </div>
       </div>
       <div class="card">
         <div class="card-body">
           <div class="row">
             <div class="col-sm-12">
               <h5 class="font-weight-bold">Batch History</h5>
             </div>
             <hr>
             <div class="col-sm-12">
               <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                   <thead>
                     <tr> 
                        <th>Action</th>
                        <th>Sr No.</th>
                        <th>Batch Name</th>
                        <th>Position</th>
                        <th>Part Type</th>
                        <th>Target Count</th>
                        <th>Total Target Count</th> 
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>
                         <div class="dropdown">
                           <button class="dropbtn">
                             <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                           </button>
                           <div class="dropdown-content">
                             <a href="create-batch.php" class=" " style="background-color: #007bff; color: white;">
                               <i class="fa fa-edit"></i> Edit </a>
                               <a href="#" class="#" style="background-color: red; color: white;">
                               <i class="fa fa-trash"></i> Delete </a>
                           </div>
                         </div>
                       </td>
                      
                            <td>1</td>
                            <td>1</td>
                              
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td> -
                             </td>
                            
 
                     </tr>
                   </tbody>
                   <tfoot>
                     <tr>
                       <th>Action</th>
                        <th>Sr No.</th>
                        <th>Part ID</th>
                        <th>Part Type</th>
                        <th>Material Code</th>
                        <th>Part Description</th>
                        <th>Status</th> 
                     </tr>
                   </tfoot>
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!--end page-content-wrapper-->
 </div>
 <!--end page-wrapper-->
 <!--start overlay-->
 <div class="overlay toggle-btn-mobile"></div>
 <!--end overlay-->
 <!--Start Back To Top Button-->
 <a href="javaScript:;" class="back-to-top">
   <i class='bx bxs-up-arrow-alt'></i>
 </a>
 
 <!--End Back To Top Button-->
 <!--footer --> 
 <?php include_once('footer.php') ?>