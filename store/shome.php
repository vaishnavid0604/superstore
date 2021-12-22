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
              $para3 = $row4['SCITY'];
              $para4 = $row4['SREGION'];
              $para5 = $row4['SSTATE'];
              $para6 = $row4['SPCODE'];
              $para7 = $row4['SPASS'];

 if(isset($_POST['submitn']))
  {$updtname = ($_POST['inputn']);
    $updatequery1 = "UPDATE store set SBRANCHNAME='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submitc']))
  {$updtname = ($_POST['inputc']);
    $updatequery1 = "UPDATE store set SCITY='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}
    if(isset($_POST['submitr']))
  {$updtname = ($_POST['inputr']);
    $updatequery1 = "UPDATE store set SREGION='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submits']))
  {$updtname = ($_POST['inputs']);
    $updatequery1 = "UPDATE store set SSTATE='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submitp']))
  {$updtname = ($_POST['inputp']);
    $updatequery1 = "UPDATE store set SPCODE='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}

     if(isset($_POST['submitpa']))
  {$updtname = ($_POST['inputpa']);
    $updatequery1 = "UPDATE store set SPASS='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}


              
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
                <span class="text-success nav-link-inner--text font-weight-bold"
                  ><i class="text-success fas fa-home"></i> <?php echo $para2 ?> </span
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
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-sort-amount-up"></i> Store Orders</span
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
            <span class="badge badge-danger badge-pill mb-3">Profile</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-4 mb-3">
			
			
				<div class="card">
                <div class="card-body bg-gradient-warning">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../assets/img/teacher.jpg" alt="student" class="rounded-circle" width="184">
                    <div class="mt-3">
                      <h4>                Welcome     <?php echo $login_session ?></h4>
                      		  <button data-toggle="modal" data-target="#edit" class="btn btn-danger">Edit Profile</button>


                    </div>
                  </div>
                </div>
              </div>			 		  
            </div>
			
			
                <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body bg-gradient-success">
				
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Store ID</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para1 ?>
                    </div>
                  </div>
				  <br>
                  
				  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Branch Name</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para2 ?>
                    </div>
                  </div>
               <br>
				  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">City</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para3 ?>
                    </div>
                  </div>
                   <br>
             
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Region</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para4 ?>
                    </div>
                  </div>
                   <br>
				  
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">State</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                     <?php echo $para5 ?>
                    </div>
                  </div>
                   <br>
				  
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Pincode</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $para6 ?>
                    </div>
                  </div>
                   <br>
				  
                </div>
              </div>
            </div>				

<!-- Registration Modal  Teacher -->

    <div id="edit" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Profile</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body bg-gradient-danger">
		  
		  
            <form
              class="col s12 l5 white-text"
              method="POST"
              autocomplete="new-password"
			 
            >
			
              <div class="form-group row">
                <label
                  for="name"
                  class="col-md-2 col-form-label text-white"
                  >Store ID</label
                >
                <div class="col-md-10">
                  <input
                    class="form-control "
                    placeholder="<?php echo "$para1"?>"
                    readonly
                  />
                </div>
              </div>
			  
			   <div class="form-group row">
                <label for="staffid" class="col-md-2 col-form-label text-white" > Branch Name </label>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="inputn" placeholder="<?php echo "$para2"?>" />
                </div>
				<div class="col-md-2">
                  <input class="form-control btn-success" type="submit" name="submitn" />
                </div>
              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-2 col-form-label text-white" > City </label>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="inputc" placeholder="<?php echo "$para3"?>" />
                </div>
				<div class="col-md-2">
                  <input class="form-control btn-success" type="submit" name="submitc" />
                </div>
              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-2 col-form-label text-white" > Region </label>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="inputr" placeholder="<?php echo "$para4"?>" />
                </div>
				<div class="col-md-2">
                  <input class="form-control btn-success" type="submit" name="submitr" />
                </div>
              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-2 col-form-label text-white" > State </label>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="inputs" placeholder="<?php echo "$para5"?>" />
                </div>
				<div class="col-md-2">
                  <input class="form-control btn-success" type="submit" name="submits" />
                </div>
              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-2 col-form-label text-white" > Pincode </label>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="inputp" placeholder="<?php echo "$para6"?>" />
                </div>
				<div class="col-md-2">
                  <input class="form-control btn-success" type="submit" name="submitp" />
                </div>
              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-2 col-form-label text-white" > Password </label>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="inputpa" placeholder="*******" />
                </div>
				<div class="col-md-2">
                  <input class="form-control btn-success" type="submit" name="submitpa" />
                </div>
              </div>

            </form>
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