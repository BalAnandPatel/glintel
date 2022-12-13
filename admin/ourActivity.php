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
            <h1>Add activity</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Your Activities</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <?php
     
        if(isset($_SESSION['our_activity_post'])){ ?>

          <div class="alert alert-success" id="success-alert" role="alert">
          <?php echo $_SESSION['our_activity_post']; unset($_SESSION['our_activity_post']); ?>
          </div>

     <?php }else if(isset($_SESSION['activity_post_error'])){ ?>
    
         <div class="alert alert-danger" id="success-alert" role="alert">
          <?php echo $_SESSION['activity_post_error']; unset($_SESSION['activity_post_error']); ?>
          </div>

     <?php } ?>

        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add activity</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="action/ourActivityPost.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                    <label for="name">Title*</label>
                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Title" autocomplete="off" required>
                  </div>
              </div>
            
            </div>
          

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description*</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
          
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                    <label for="post">Upload Image*</label>
                    <input type="file" class="form-control" name="image" id="exampleFormControlInput1" placeholder="Enter post hear" autocomplete="off" required>
                  </div>
              </div>
            </div>
            <!-- /.row -->
                <div class="btn-group w-auto">
                  <button type="submit" class="btn btn-success col start">
                    <i class="fas fa-plus"></i><span> Add details</span>
                  </button>
                </div>
           </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Saving nature welfare society charitable trust
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