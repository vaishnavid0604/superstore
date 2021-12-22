<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
$query4 = "SELECT * from store where SID='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['SID'];
              $para2 = $row4['SBRANCHNAME'];
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
  

  <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_b315629468470fd1230c5a1bec6c00575'
    });
</script>

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
              <a href="shome.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-home"></i> <?php echo $para2 ?> </span
                >
              </a>
            </li>
			
			 <li class="nav-item">
              <a href="ssales.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-list-alt"></i> Sales Report</span
                >
              </a>
            </li>
			
			<li class="nav-item">
              <a href="sorders.php" class="nav-link">
                <span class="text-success nav-link-inner--text font-weight-bold"
                  ><i class="text-success fas fa-sort-amount-up"></i> Store Orders</span
                >
              </a>
            </li>
			
			<li class="nav-item">
              <a href="sstock.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fad fa-warehouse"></i> Stock</span
                >
              </a>
            </li>
		  
		   <li class="nav-item">
              <a href="logout.php" class="nav-link">
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
            <span class="badge badge-danger badge-pill mb-3">Recent Orders</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">
			
			<div class="card text-white bg-gradient-warning mb-3">
				  <div class="card-header">
				  <span class=" text-warning display-4" >Recent Orders</span>
				  
					 <button class=" btn btn-success pull-right" data-toggle="modal" data-target="#order">
                        NEW
                      </button>
				  </div>
				  
				  <div class="card-body text-white">
					 <table class="table table-respnsive table-striped table-hover table-bordered bg-gradient-white text-center">
						<tr class="font-weight-bold text-default">
						  <th>Order ID</th>
						  <th>Distributor ID</th>
						  <th>Distributor Name</th>
						  <th>Order Date</th>
						  <th>Category</th>
						  <th>Payment Status</th>
						  <th>Shipment Mode</th>
						  <th> Status</th>
						</tr>
						
				        <?php 
        
      $order59 ="SELECT s.*,m.DTYPE, m.DNAME FROM strorders s , dstbr m where s.SID=$CustID and m.did=s.did";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr>
		  <td>'. $oss55["ORDID"]."</td>
		  <td>". $oss55["DID"]."</td>
		  <td>". $oss55["DNAME"]."</td>
		  <td>". $oss55["ORDDATE"]."</td>
		  <td>". $oss55["DTYPE"]."</td>
		  <td>". $oss55["PMYSTAT"]."</td>
		<td>". $oss55["SHPMODE"]."</td>
		<td>". $oss55["SHPSTAT"].
			"</td>
			</tr>";
		  }
?>
				  </table>	
				  </div>
				</div>
				
		
	    <!-- another Login Modal -->

    <div id="order" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Place New Order</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body bg-gradient-warning">
		  		

       <form
              class="col s12 l5 white-text"
              action="custcmp1.php"
              method="POST"
              autocomplete="new-password"
            >
             
			      <div class="form-group row">
                <label class="col-md-3 col-form-label text-white" for="email"
                  >Distributor </label
                >
                <div class=" col-md-9">
                  <?php
              $query1112 = "SELECT DID,DNAME,DTYPE FROM dstbr";
              $ses_sq2 = mysqli_query($conn,$query1112);
            $select12= "<select class=\" col-md-12 font-weight-bold form-control\" name=\"select2\">
               <option selected hidden>   D ID -----  D Name ----- Category</option>";     
             while($rs12 = mysqli_fetch_assoc($ses_sq2))
              {
                  $select12.='<option value="'.$rs12['DID'].'">'.$rs12['DID']." ----- ".$rs12['DNAME']." ----- " .$rs12['DTYPE'].'</option>';
              }
              $select12.='</select>';
              echo $select12;
?>
                </div>
              </div>
			  

              <div class="form-group row">
                <div class="offset-md-3 col-md-9">
                  <button class="btn btn-success form-control" value="Enter" type="submit">
                    Place New Order
                  </button>
                </div>
              </div>
            </form>
						
          </div>
        </div>
      </div>
    </div>


			</div>
          </div>
        </div>
		 
</section>

    <?php require("../footer.php");?>

</body>

</html>