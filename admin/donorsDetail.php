<?php
include "include/header.php";
$url = $URL."donor/donorRead.php";
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
            <h1>Donor's details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Donor's Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

       <!--  <?php //if(isset($_SESSION['team_delete_post'])){ ?>

              <div class="alert alert-success" id="success-alert" role="alert">
               <?php //echo $_SESSION['team_delete_post']; 
               //unset($_SESSION['team_delete_post']); ?>
              </div>

        <?php// } ?> -->

        <div class="row">
         

          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Donor's details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="table-warning">
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Currently Donated</th>
                    <th>Date</th>
                    <th>Slip No.</th>
                    <th>Payment Mode</th>
                    <th>Payment Slip</th>
                
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
                    <td><?php echo $value1->donorName; ?></td>
                    <td><?php echo $value1->donorMobile; ?></td>
                    <td><?php echo $value1->donorEmail; ?></td>
                    <td><?php echo $value1->donorAddress; ?></td>
                    <td><?php echo $value1->donationAmount; ?></td>
                    <td><?php echo date("m/d/Y", $value1->createdOn)=="01/01/1970"?"0":date("m/d/Y", $value1->createdOn) ?> </td>
                    <td><?php echo $value1->slipNumber; ?></td>
                    <td><?php echo $value1->paymentMode; ?></td>
                    <td class="w-25"><a href="../ui/image/donorSlip/<?php echo $value1->slipImage; ?>"><img src="../ui/image/donorSlip/<?php echo $value1->slipImage; ?>" class="img-fluid img-thumbnail" alt="Sheep"></a></td>
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