<?php 
include "include/header.php"; 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Portfoliyo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Portfoliyo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

       
    <?php
     
        if(isset($_SESSION['team_post'])){ ?>

          <div class="alert alert-success" id="success-alert" role="alert">
          <?php echo $_SESSION['team_post']; unset($_SESSION['team_post']); ?>
          </div>

   <?php }else if(isset($_SESSION['team_post_error'])){ ?>
    
    <div class="alert alert-danger" id="success-alert" role="alert">
          <?php echo $_SESSION['team_post_error']; unset($_SESSION['team_post_error']); ?>
          </div>

   <?php }else{
       echo "";
   } ?>

        <!-- SELECT2 EXAMPLE -->
        <div class="card card-outline card-success card-default">
          <div class="card-header">
            <h3 class="card-title">Add Portfoliyo details</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="action/portfoliyoEntryPost.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Clint Name*</label>
                    <input type="text" class="form-control" name="clientName" id="exampleFormControlInput1" placeholder="Name" autocomplete="off" required>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="">Mobile*</label>
                    <input type="number" class="form-control" name="clientMoble" id="exampleFormControlInput1" placeholder="Mobile No." autocomplete="off" required>
                  </div>
              </div>
            </div>
            <!-- /.row -->
             <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Logo Title*</label>
                    <input type="text" class="form-control" name="clientLogoTitle" id="exampleFormControlInput1" placeholder="Logo Title" autocomplete="off" required>
                     
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="mobile">Logo URL*</label>
                    <input type="url" class="form-control" name="clientUrl" id="exampleFormControlInput1" placeholder="Logo URL" autocomplete="off" required>
                  </div>
              </div>
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                    <label for="post">Clint's Comment*</label>
                    
                    <textarea class="form-control" name="clientComment"  rows="4" cols="50">

                    </textarea>  
                  </div>
              </div>
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="post">Upload Clint's Photo*</label>
                    <input type="file" class="form-control" name="clientPhoto" id="exampleFormControlInput1" placeholder="Enter post hear" autocomplete="off" required>
                  </div>
              </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <label for="post">Upload Logo Image*</label>
                    <input type="file" class="form-control" name="clientLogo" id="exampleFormControlInput1" placeholder="Enter post hear" autocomplete="off" required>
                  </div>
              </div>
            </div>
            <!-- /.row -->
                <div class="btn-group w-auto">
                  <button type="submit" name="submit" class="btn btn-success col start">
                    <i class="fas fa-plus"></i><span> Add details</span>
                  </button>
                </div>
           
          </div>
        </form>
          <!-- /.card-body -->
          <div class="card-footer">
            Saving nature welfare society charitable rust
          </div>
        </div>
        <!-- /.card -->

    
        <div class="row">
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include "include/footer.php" ?>