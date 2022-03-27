<?php
include('session1.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
$query4 = "SELECT * from dstbr where DID='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['DID'];
              $para2 = $row4['DNAME'];

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../assets/img/logo.png" />
    <title>Super Store Sales Management System</title>

  <!--     Fonts and icons     -->
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css "/>
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

 
  <link rel="stylesheet" href="../assets/css/creativetim.min.css" type="text/css">


</head>


  <body class="bg-white" id="top">
    <!-- Navbar -->
    <nav
      id="navbar-main"
      class="
        navbar navbar-main navbar-expand-lg
        bg-default
        navbar-light
        position-sticky
        top-0
        shadow
        py-0
      "
    >
      <div class="container">
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="../index.php" class="navbar-brand mr-lg-5 text-white">
                               <img src="../assets/img/nav.png" />
            </a>
          </li>
        </ul>

        <button
          class="navbar-toggler bg-white"
          type="button"
          data-toggle="collapse"
          data-target="#navbar_global"
          aria-controls="navbar_global"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="navbar-collapse collapse bg-default" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-10 collapse-brand">
                <a href="../index.html">
                  <img src="../assets/img/nav.png" />
                </a>
              </div>
              <div class="col-2 collapse-close bg-danger">
                <button
                  type="button"
                  class="navbar-toggler"
                  data-toggle="collapse"
                  data-target="#navbar_global"
                  aria-controls="navbar_global"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>

          <ul class="navbar-nav align-items-lg-center ml-auto">
		  
		  	 
		  
		   <li class="nav-item">
              <a href="dhome.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-home"></i> <?php echo $para2 ?> </span
                >
              </a>
            </li>
			
			 <li class="nav-item">
              <a href="dorders.php" class="nav-link">
                <span class="text-success nav-link-inner--text font-weight-bold"
                  ><i class="text-success fas fa-sort-amount-up"></i> Orders</span
                >
              </a>
            </li>
			
		  
		   <li class="nav-item">
              <a href="logout1.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-danger fas fa-power-off"></i> Logout</span
                >
              </a>
            </li>


          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
 	
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
<!-- ======================================================================================================================================== -->

<div class="container ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">Orders</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">
			
			<div class="card text-white bg-gradient-info mb-3">
				  <div class="card-header">
				  <span class=" text-primary display-4" >Recent Orders</span>
				  
					 
				  </div>
				  
				  <div class="card-body text-white">
					 <table class="table table-reponsive table-fluid table-striped table-hover table-bordered bg-gradient-white text-center">
						<tr class="font-weight-bold text-default">
						  <th>Order ID</th>
						  <th>Store ID</th>
		
						  <th>Order Date</th>
						  <th>Payment Status</th>
						  <th>Shipment Mode</th>
						  <th>Delivery Status</th>
						  <th> Update Order</th>
						</tr>
		
        <?php 		
		
      $q ="  select * from strorders where DID=$CustID ORDER BY ORDID DESC";
      $query = mysqli_query($conn, $q);
      while($res = mysqli_fetch_array($query))
      {
	
			$oid=$res['ORDID'];
		    $sid=$res['SID'];
			$date=$res['ORDDATE'];
			$pstat=$res['PMYSTAT'];
			$smode=$res['SHPMODE'];
			$sstat=$res['SHPSTAT'];			
							
				 ?>		  
				 
				 	<tr>
				<td><?php echo $oid ?></td>
				  <td><?php echo $sid ?></td>
				  <td><?php echo $date ?></td>
				  <td><?php echo $pstat ?></td>
				  <td><?php echo $smode ?></td>
				  <td><?php echo $sstat ?></td>
							<td><button class="btn btn-sm btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $res['ORDID']?>"><span class="glyphicon glyphicon-edit"></span> Update</button></td>

					</tr>
					
		<?php
					
					include 'updateord.php';
					
					}
				?>
  </table>	
  
		</div>
	</div>
	</div>
</section>

    <?php require("footer.php");?>

</body>

</html>
