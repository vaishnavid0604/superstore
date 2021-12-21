<?php

// Include packages and files for PHPMailer and SMTP protocol

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Initialize PHP mailer, configure to use SMTP protocol and add credentials

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 0;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port       = 465;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "eclassroom1999@gmail.com";
$mail->Password   = "mloquiqighoyiytq";


$success = "";
$error = "";
$name = $message = $email = "";
$errors = array('name' => '', 'email' => '', 'message' => '');
$mymail = 'vaishnavid0604@gmail.com';
$myname = 'Super Store';


if (isset($_POST["submit"])) {
    if (empty(trim($_POST["name"]))) {
        $errors['name'] = "Your name is required";
    } else {
        $name = SanitizeString($_POST["name"]);
        if (!preg_match('/^[a-zA-Z\s]{6,50}$/', $name)) {
            $errors['name'] = "Only letters and spaces allowed";
        }
    }

    if (empty(trim($_POST["email"]))) {
        $errors["email"] = "Your email is required";
    } else {
        $email = SanitizeString($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Pls give a proper email address";
        }
    }

    if (empty(trim($_POST["message"]))) {
        $errors["message"] = "Please type your message";
    } else {
        $message = SanitizeString($_POST["message"]);
        if (!preg_match("/^[a-zA-Z\d\s]+$/", $message)) {
            $errors["message"] = "Only letters, spaces and maybe numbers allowed";
        }
    }

    if (array_filter($errors)) {
    } else {
        try {

            $mail->setFrom('eclassroom1999@gmail', 'Super Store');

            $mail->addAddress($mymail, $myname);

            $mail->Subject = 'Super Store Management System - Contact Form';

            $mail->Body = $message;

            // send mail

            $mail->send();

            // empty users input

            $name = $message = $email = "";

            $success = "Message sent successfully";
        } catch (Exception $e) {

            // echo $e->errorMessage(); use for testing & debugging purposes
            $error = "Sorry message could not send, try again";
        } catch (Exception $e) {

            // echo $e->getMessage(); use for testing & debugging purposes
            $error = "Sorry message could not send, try again";
        }
    }
}

function SanitizeString($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    return stripslashes($var);
}

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <title>Super Store Management System</title>

  <!--     Fonts and icons     -->
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css "/>
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/creativetim.min.css" type="text/css">
  
  <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_b315629468470fd1230c5a1bec6c00575'
    });
</script>

    <style>
        .error {
            color: white;
            background-color: crimson;
            border-radius: 7px;
            text-align: center;
        }

        .success {
            background-color: darkgreen;
            color: white;
            border-radius: 7px;
            text-align: center;
        }
    </style>
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
            <a href="index.php" class="navbar-brand mr-lg-5 text-white">
                               <img src="assets/img/nav.png" />
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
                <a href="index.html">
                  <img src="assets/img/nav.png" />
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
              <a href="contact.php" class="nav-link">
                <span class="text-success nav-link-inner--text"
                  ><i class="text-success fas fa-address-card"></i> Contact</span
                >
              </a>
            </li>
		  
		  	  <li class="nav-item">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-sign-in-alt"></i> Login</span
                >
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="admin/alogin.php">Admin</a>
			<a class="dropdown-item" href="store/slogin.php">Store</a>
			<a class="dropdown-item" href="dist/dlogin.php">Distributor</a>
		  </div>
		</div>
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
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-warning badge-pill mb-3">Contact</span>
          </div>
        </div>

        <div class="row row-content align-text-center">
          <div class="col-12">
            <div class="col-12">
              <div class="card card-body bg-dark">
			  
			  <div class="success"><?php echo $success ?></div>
                <div class="error"><?php echo $error ?></div>
				
                <form
                  action="contact.php"
                  method="post"
                >
                  <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label"
                      ><h6 class="text-white">Name</h6>
                    </label>
                    <div class="col-md-10">
                      <input
                        type="text"
                        class="form-control"
                        required
                        id="name"
                        name="name"
                        placeholder="Full Name"
						value="<?php echo htmlspecialchars($name) ?>"
                      />
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="emailid" class="col-md-2 col-form-label">
                      <h6 class="text-white">Email</h6></label
                    >
                    <div class="col-md-10">
                      <input
                        type="email"
                        class="form-control"
                        required
                        id="email"
                        name="email"
                        placeholder="abc@xyz.com"
						value="<?php echo htmlspecialchars($email) ?>"
                      />
					                          <div class="error"><?php echo $errors["email"] ?></div>

                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="feedback" class="col-md-2 col-form-label">
                      <h6 class="text-white">Message</h6></label
                    >
                    <div class="col-md-10">
                      <textarea
                        class="form-control"
                        id="message"
                        name="message"
                        placeholder="Your Message..."
                        rows="5"
						<?php echo htmlspecialchars($message) ?>
                      ></textarea>
					                          <div class="error"><?php echo $errors["message"] ?></div>

                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="offset-md-2 col-md-2">
                      <button
                        type="submit"
                        class="btn btn-danger"
						name="submit" id="submit" value="Send"
                      >
                        SEND
                      </button>
                    </div>

                    <div class="offset-md-4 text-justify-content-end">
                      <div class="btn-group" role="group">
                        <a
                          role="button"
                          class="btn btn-primary"
                          href="tel:+85212345678"
                          ><i class="fa fa-phone"></i> Call</a
                        >
                        <a role="button" class="btn btn-info" href="#"
                          ><i class="fa fa-skype"></i> Skype</a
                        >
                        <a
                          role="button"
                          class="btn btn-success"
                          href="mailto:vaishnavid0604@gmail.com"
                          ><i class="fa fa-envelope-o"></i> Email</a
                        >
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

</section>

	    <?php require("footer.php");?>

</body>

</html>