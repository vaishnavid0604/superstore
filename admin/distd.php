<?php
include('session1.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
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
                  ><i class="text-white fas fa-home"></i>Home </span
                >
              </a>
            </li>

			
			
			 <li class="nav-item">
              <a href="distd.php" class="nav-link">
                <span class="text-success nav-link-inner--text font-weight-bold"
                  ><i class="text-success fas fa-users"></i> Distributors</span
                >
              </a>
            </li>
			
			<li class="nav-item">
              <a href="stored.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fad fa-store-alt"></i> Stores</span
                >
              </a>
            </li>
			
			<li class="nav-item">
              <a href="viewmsg.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-address-card"></i> Queries</span
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
            <span class="badge badge-danger badge-pill mb-3">Distributors</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">



				<div class="card text-white bg-gradient-info mb-3">
				  <div class="card-header">
				  <span class=" text-primary display-4" > Distributor Details  </span>
				  
					 <button class=" btn btn-success pull-right" data-toggle="modal" data-target="#dist">
                        ADD
                      </button>
				  </div>
				  
				  <div class="card-body text-white">
					 <table class="table table-striped table-hover table-bordered bg-gradient-white text-center">
						<tr class="font-weight-bold text-default">
						  <th>Distributor ID</th>
						  <th>Distributor Name</th>
						  <th>Type</th>
						  <th>Warehouse Location</th>
						  <th>Delete</th>

						</tr>
						
						<?php 
					  $order59 ="call distributordetails";
					  $food9 = mysqli_query($conn, $order59);
					  while($res = mysqli_fetch_assoc($food9))
					  {
						  $dname=$res['DNAME'];
							$id=$res['DID'];
							$type=$res['DTYPE'];
							$loc=$res['DLOC'];
							
				 ?>		  
				 
				 				<tr>
				<td><?php echo $id ?></td>
				  <td><?php echo $dname ?></td>
				  <td><?php echo $type ?></td>
				  <td><?php echo $loc ?></td>
				
	<td data-label="delete"> <button class="btn btn-sm btn-danger" > <a href="deletedist.php?did=<?php echo $id ?>" class="nav-link text-white"  data-toggle="tooltip">Delete</a> </button> </td>

					</tr>
					
			<?php
			
			}
				?>

				  </table>	
				  </div>
				</div>

    <!-- another Login Modal -->

    <div id="dist" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">ADD New Distributor</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body bg-gradient-info">
		  		

				
            <form
              class="col s12 l5 white-text"
              action="custcmp.php"
              method="POST"
              autocomplete="new-password"
            >
             
			      <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="email"
                  >Distributor Name</label
                >
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="white-text validate form-control"
                    placeholder="Name"
                    id="email"
                    name="username"
                    type="text"
                    class="validate"
                  />
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="email"
                  >Distributor Type</label
                >
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="white-text validate form-control"
                    placeholder="Type Eg:Electronics"
                    id="email"
                    name="age"
                    type="text"
                    class="validate"
                  />
                </div>
              </div>
			  
			  <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="email"
                  >Distributor Location</label
                >
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="white-text validate form-control"
                    placeholder="Location"
                    id="email"
                    name="gender"
                    type="text"
                    class="validate"
                  />
                </div>
              </div>
			  

              <div class="form-group row">
                <div class="offset-md-2 col-md-10">
                  <button class="btn btn-success form-control" type="submit">
                    Register New Distributor
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

    <?php require("footer.php");?>

</body>

</html>