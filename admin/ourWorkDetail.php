<?php

include "include/header.php";

$url = $URL."ourWork/ourWorkRead.php";
$data = array();
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Work details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Work Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <?php

             if(isset($_SESSION['work_delete_post'])){ ?>
             <div class="alert alert-danger" id="success-alert" role="alert">
             <?php echo $_SESSION['work_delete_post']; unset($_SESSION['work_delete_post']); ?>
             </div>

       <?php } ?>

        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Work details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="table-warning">
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Target Amount</th>
                    <th>Achive Amount</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>Actions</th>
                
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php 
                       
                     $counter=0;  
                     foreach($result as $key => $value){
                     foreach($value as $key1 => $value1)
                                  {

                  ?>

                  <tr>
                    <td class="col-md-1"><?php echo ++$counter; ?> </td>
                    <td><?php echo $value1->title; ?></td>
                    <td><?php echo $value1->targetAmount; ?></td>
                    <td><?php echo $value1->achiveAmount; ?></td>
                    <td><?php echo $value1->description; ?></td>
                    <td class="w-25"><img src="images/work/<?php echo $value1->image; ?>" class="img-fluid img-thumbnail" alt="Sheep"></td>
                    <td class="col-md-1">
                      <form action="action/ourWorkDeletePost.php" method="post">
                      <input type="hidden" name="work_id" value="<?php echo $value1->id; ?>">
                      <input type="hidden" name="work_image" value="<?php echo $value1->image; ?>">
                      <button type="submit" name="workDelete" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                      </form></td>
                  </tr>
             
                  <?php } } ?>

                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

include "include/footer.php"

?>