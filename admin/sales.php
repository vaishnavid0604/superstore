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
              <a href="dhome.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-home"></i> Home</span
                >
              </a>
            </li>
		  
		   <li class="nav-item">
              <a href="sales.php" class="nav-link">
                <span class="text-success nav-link-inner--text font-weight-bold"
                  ><i class="text-success fas fa-list-alt"></i> Sales Report</span
                >
              </a>
            </li>
			
			
			 <li class="nav-item">
              <a href="distd.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-users"></i> Distributor Details</span
                >
              </a>
            </li>
			
			<li class="nav-item">
              <a href="stored.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fad fa-store-alt"></i> Store Details</span
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
            <span class="badge badge-danger badge-pill mb-3">Report</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">
			
			
				<div class="card text-white bg-gradient-primary mb-3">
				  <div class="card-header">
				  <span class=" text-primary display-4" > Sales By  </span>
				  
				  </div>
				  
				  <div class="card-body text-white">
	
<!--Dropdwn sectn for sales by type-->
<form method="POST">

<div class="form-group row">
 			
                <div class=" col-md-9">
                  <select name="ssalescat" class="form-control">
						<option selected="" hidden="" value="None" >Category</option>
					    <option value="SBRANCHNAME">Branch</option>
						<option value="SCITY">City</option>
						<option value="SREGION">Region</option>
						<option value="SSTATE">State</option>
				</select>
				</div>
				
                <div class=" col-md-3">
                  <button class="btn btn-warning form-control" name="submitsales" type="submit" value="Next">
                  Next
                  </button>
                </div>
	 </div>

<?php   
     if(isset($_POST['submitsales']))
       {$catsv = ($_POST['ssalescat']);
        $pl="Selected Category: ";
        echo "<h4 class=\" font-weight-bold text-white\">",$pl,$catsv,"</h4></form>";
        $query1122 = "INSERT into t(temp) values ('$catsv')";
        mysqli_query($conn, $query1122);
        echo "<form method=\"POST\">
		<h4 class=\" font-weight-bold text-white\"> ";
		echo "<div class=\"form-group row\">";
              $query1112 = "SELECT Distinct $catsv FROM store";
              $ses_sq2 = mysqli_query($conn,$query1112);
            $select12= "<select class=\" col-md-9 font-weight-bold form-control\" name=\"select2112\">
               <option selected hidden> Choose </option>";     
             while($rs12 = mysqli_fetch_assoc($ses_sq2))
              {
              $select12.='<option value="'.$rs12[$catsv].'">'.$rs12[$catsv].'</option>';
              }
              $select12.="</select>
			  <div class=\" col-md-3\">
                  <button class=\"btn btn-success form-control\" name=\"submitcs2\" type=\"submit\" value=\"Submit\">
                  Submit
                  </button>
                </div>
			  </h4></div></form>";
              echo $select12,'</h4>';
}
      if(isset($_POST['submitcs2']))
           {
        $query1112 = "SELECT temp FROM t where tee=(select max(tee) from t)";
              $ses_sq2112 = mysqli_query($conn, $query1112);
        $rs12 = mysqli_fetch_assoc($ses_sq2112);
        $catsv=$rs12['temp'];
        
        $catsv1 = ($_POST['select2112']);echo $catsv1;
         echo "
        <table class=\" table table-striped table-hover table-bordered text-center text-dark\">
        <tr class=\" font-weight-bold \">
          <th>Sales ID</th>
          <th>Sales Date</th>
          <th>Sales Cost</th>
          <th>Store_ID</th>
          <th>Store Name</th>
          <th>Store City</th>
        </tr>";
        echo $catsv,":",$catsv1;
      $order59 ="select sa.*,st.SBRANCHNAME,st.SCITY from sales sa,store st where sa.sid=st.sid";
      $food9 = mysqli_query($conn, $order59);
      
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SALESID"]."</td><td>". $oss55["SDATE"] . "</td><td>". $oss55["SCOST"]. "</td><td>".$oss55["SID"]."</td><td>".$oss55["SBRANCHNAME"]."</td><td>". $oss55["SCITY"]."</td></tr>";
      }
    } 
?>

				  </div>
				  
				</div>
					 		  
            </div>
	
          </div>
        </div>
		 
</section>
    

</body>

</html>