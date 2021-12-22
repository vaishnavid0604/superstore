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
                  ><i class="text-white fas fa-home"></i> <?php echo $para2 ?> </span
                >
              </a>
            </li>
			
			 <li class="nav-item">
              <a href="dorders.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-sort-amount-up"></i> Orders</span
                >
              </a>
            </li>
			
			<li class="nav-item">
              <a href="dordupdate.php" class="nav-link">
                <span class="text-success nav-link-inner--text font-weight-bold"
                  ><i class="text-success fas fa-wrench"></i> Order Update</span
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
            <span class="badge badge-danger badge-pill mb-3">Order Update</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">
			
			
			<div class="card text-white bg-gradient-warning mb-3">
				  <div class="card-header">
				  <span class=" text-warning display-4" >Order Update</span>
				  
					 <a class=" btn btn-info text-dark pull-right" href="dorders.php">
                        ORDERS
                      </a>
				  </div>
				  
				  <div class="card-body text-white">

<?php
echo "<form method=\"POST\" >";
      $query19 = "SELECT ORDID FROM strorders where DID='$CustID' ";
      $ses_sq29 = mysqli_query($conn, $query19);
      $select1= "<div class=\"form-group row\">
	  <select class=\" col-md-9 font-weight-bold form-control\"  name=\"select2\">  <option selected hidden > Select Order ID  </option>";
      while($rs1 = mysqli_fetch_assoc($ses_sq29))
      {
      $select1.='<option value="'.$rs1['ORDID'].'">'.$rs1['ORDID'].'</option>';
      }
      $select1.='</select>';
      echo $select1;
     echo"  <div class=\" col-md-3\">
                  <button class=\" btn btn-primary form-control\" name=\"submitqp\" type=\"submit\" value=\"Submit\">
                  NEXT
                  </button>
                </div></div>"; 
     $paraa2="";
     $paraa3="";
     $paraa4="";
     $paraa5="";
      if(isset($_POST['submitqp']))
       {
        $oidv = ($_POST['select2']);
        $queryod = "SELECT ORDID,PMYSTAT,SHPMODE,SHPSTAT from strorders where ORDID='$oidv' ";
              $ses_sq44 = mysqli_query($conn, $queryod);
              $row90 = mysqli_fetch_assoc($ses_sq44);
              $paraa2 = $row90['ORDID'];
              $paraa3 = $row90['PMYSTAT'];
              $paraa4 = $row90['SHPMODE'];
              $paraa5 = $row90['SHPSTAT'];
        $quer5="insert into t(temp) values('$paraa2')";
        mysqli_query($conn, $quer5);}
$a=",";
 
    echo '</form>';
if(isset($_POST['submitn']))
  {$updtname = ($_POST['inputn']);
$qqq="select temp from t where tee=(select max(tee) from t)";
 $ses_sq44 = mysqli_query($conn, $qqq);
 $row90 = mysqli_fetch_assoc($ses_sq44);
 $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE strorders set PMYSTAT='$updtname' where ORDID=$oidv8";mysqli_query($conn, $updatequery1);
echo "<script>location.href='dorders.php';</script>";
}
  if(isset($_POST['submitpt']))
  {$updtname = ($_POST['inputpt']);
$qqq="select temp from t where tee=(select max(tee) from t)";
 $ses_sq44 = mysqli_query($conn, $qqq);
 $row90 = mysqli_fetch_assoc($ses_sq44);
 $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE strorders set SHPMODE='$updtname' where ORDID=$oidv8";mysqli_query($conn, $updatequery1);
echo "<script>location.href='dorders.php';</script>";
  }
  if(isset($_POST['submitprt']))
  {$updtname = ($_POST['inputprt']);
$qqq="select temp from t where tee=(select max(tee) from t)";
 $ses_sq44 = mysqli_query($conn, $qqq);
 $row90 = mysqli_fetch_assoc($ses_sq44);
 $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE strorders set SHPSTAT='$updtname' where ORDID=$oidv8";mysqli_query($conn, $updatequery1);
echo "<script>location.href='dorders.php';</script>";
  }
?>


<form method="POST"; action="">
<div class="form-group row">
 			
                <div class=" col-md-12">
  
<table class="bg-gradient-white table table-striped table-hover table-bordered text-center text-dark">
    <tr >
    <td class="font-weight-bold" >Order  ID:</td><td><?php echo "$paraa2"?></td>
    <td class="text-danger">Not Allowed</td>
   </tr>
   
   <tr>
    <td class="font-weight-bold align-middle">Payment Status:</td>
	
    <td>
		<select class="form-control" type="text" name="inputn" >
		<option selected hidden >  <?php echo "$paraa3"?>  </option>
		  <option>PAID</option>
		  <option>UNPAID</option>
		</select>
	</td>
	
    <td><input class="form-control btn btn-success" type="submit" name="submitn"></td>
   </tr>
   
   
      <tr>
    <td class="font-weight-bold align-middle">Shipment Mode:</td>
	
    <td>
	<select class="form-control" type="text" name="inputpt" >
	<option selected hidden >  <?php echo "$paraa4"?>  </option>
      <option>PREMIUM</option>
      <option>NORMAL</option>
    </select>
	</td>
	
    <td><input class="form-control btn btn-success" type="submit" name="submitpt"></td>
  </tr>
  
  
     <tr>
    <td class="font-weight-bold align-middle">Shipment Status:</td>
    <td>
	
	<select class="form-control" type="text" name="inputprt" >
	<option selected hidden >  <?php echo "$paraa5"?>  </option>
      <option>PENDING</option>
      <option>DELIVERED</option>
    </select>
	
	</td>
    <td><input class="form-control btn btn-success" type="submit" name="submitprt"></td>
  </tr>
  
  </table>
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