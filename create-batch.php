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
         <div class="breadcrumb-title pe-3"> Create Batch</div>
         <div class="ps-3">
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb mb-0 p-0">
               <li class="breadcrumb-item">
                 <a href="javascript:;">
                   <i class="bx bx-home-alt"></i>
                 </a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">  Create Batch</li>
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
                  <div class="col-sm-4">
                   <div class="form-group">
                     <label for="companyName">Batch Name</label>
                     <input type="text" class="form-control" id="name" placeholder=" " required>
                   </div>
                 </div>
                 <div class="col-sm-4">
                   <div class="form-group">
                     <label for="companyName">Position</label>
                     <input type="text" class="form-control" id="name" placeholder=" " required>
                   </div>
                 </div>
                 <div class="col-sm-4">
                   <div class="form-group">
                     <label for="companyName">Part Type</label>
                     <select class="form-control" name="">
                       <option>1</option>
                     </select>
                   </div>
                 </div>
                <div class="col-sm-4">
                   <div class="form-group">
                     <label for="companyName">Target Count</label>
                     <input type="text" class="form-control" id="name" placeholder=" " required>
                   </div>
                 </div>
                  <div class="col-sm-4">
                   <div class="form-group">
                     <label for="companyName"> Total Target Count</label>
                     <input type="text" class="form-control" id="name" placeholder=" " disabled="">
                   </div>
                 </div>
                  
                 <div class="col-sm-12">
                   <button type="submit" class="btn btn-primary btn-block">Submit</button>
                 </div>
             </div>
             </form>
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