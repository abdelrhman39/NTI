<?php
session_start();
if(!isset($_COOKIE['userData'])){
    header('location:index.php');
}

$dataFinal= explode(',',$_COOKIE['userData']);

$name        = $dataFinal[0];
$email       = $dataFinal[1];
$password    = $dataFinal[2];
$address     = $dataFinal[3];
$gender      = $dataFinal[4];
$linkedinUrl = $dataFinal[5];
$Image       = $dataFinal[6];


require 'header.php';

?>





<div class="container mt-5">
    <div class="main-body">
    
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $Image; ?>" alt="Image Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1"><?php echo $email;?></p>
                      
                      <a href="<?php echo $linkedinUrl;?>" class="btn btn-outline-primary">Linked In</a>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"> Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $name;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $email;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $address;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $gender;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $password;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="logout.php">Log out</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>





