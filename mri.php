<!-- 
    Developed By Frederick Ennin (CEO of Dollarsoft ) 
    Contact: +233556676471
    Email: dollarsoft463@gmail.com
    Website: http://www.dollarstir.com
    Youtube: http://www.youtube.com/DollarsoftCorporation
    Started on: Friday 3rd April, 2020


-->

<?php

session_start();
include 'core.php';

  if (!isset($_SESSION['id'])) {

     echo '<script>window.location="login.php"</script>';
  }
  

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Major Risk And Incidents</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://themeselection.com/demo/chameleon-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-switch.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/pickers/daterange/daterange.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

  <?php headermenu();?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Major Risk And Incidents</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Form wizard with icon tabs section start -->

<!-- Form wizard with icon tabs section end -->

<!-- Form wizard with step validation section start -->

<!-- Form wizard with step validation section end -->

<!-- Form wizard with vertical tabs section start -->
<section id="vertical-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h4 class="card-title">Major Risk And Incidents</h4> -->
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="#" class="vertical-tab-steps" id="frmrisk">

                            <!-- Step 1 -->
                            <h6>Step 1</h6>
                            <fieldset>
                                <center><u><h4>Drought</h4></u></center>
                                

                                <div class="row">
                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location3">Level of Severity </label>
                                            <select class="custom-select form-control"  id="location3" name="los">
                                                <option value="">Select Level of Severity</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress7">Level of yield Loss (Estimated number of Bags)</label>
                                            <input type="text" name="loy" class="form-control" id="emailAddress7" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber4">Contact Number :</label>
                                            <input type="tel" class="form-control" id="phoneNumber4" >
                                        </div>
                                    </div> -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date4">Date</label>
                                            <input type="date" name="dr" class="form-control" id="date4" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 2 -->
                            <h6>Step 2</h6>
                            <fieldset>
                                <center><u><h4>Flood</h4></u></center>
                                

                                <div class="row">
                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location3">Level of Severity </label>
                                            <select class="custom-select form-control"  id="location3" name="los2">
                                                <option value="">Select Level of Severity</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress7">Level of yield Loss (Estimated number of Bags)</label>
                                            <input type="text" name="loy2" class="form-control" id="emailAddress7" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber4">Contact Number :</label>
                                            <input type="tel" class="form-control" id="phoneNumber4" >
                                        </div>
                                    </div> -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date4">Date</label>
                                            <input type="date" name="dr2" class="form-control" id="date4" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 3 -->
                            <h6>Step 3</h6>
                            <fieldset>
                                <center><u><h4>Bush Fires</h4></u></center>
                                

                                <div class="row">
                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location3">Level of Severity </label>
                                            <select class="custom-select form-control"  id="location3" name="los3">
                                                <option value="">Select Level of Severity</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress7">Level of yield Loss (Estimated number of Bags)</label>
                                            <input type="text" name="loy3" class="form-control" id="emailAddress7" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber4">Contact Number :</label>
                                            <input type="tel" class="form-control" id="phoneNumber4" >
                                        </div>
                                    </div> -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date4">Date</label>
                                            <input type="date" name="dr3" class="form-control" id="date4" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>


                            <!-- Step 4 -->
                            <h6>Step 4</h6>
                            <fieldset>
                                <center><u><h4>Pest Infestation</h4></u></center>
                                

                                <div class="row">
                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location3">Level of Severity </label>
                                            <select class="custom-select form-control"  id="location3" name="los4">
                                                <option value="">Select Level of Severity</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress7">Level of yield Loss (Estimated number of Bags)</label>
                                            <input type="text" name="loy4" class="form-control" id="emailAddress7" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber4">Contact Number :</label>
                                            <input type="tel" class="form-control" id="phoneNumber4" >
                                        </div>
                                    </div> -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date4">Date</label>
                                            <input type="date" name="dr4" class="form-control" id="date4" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 5-->
                            <h6>Step 5</h6>
                            <fieldset>
                                <center><u><h4>Disease Incidence</h4></u></center>
                                

                                <div class="row">
                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location3">Level of Severity </label>
                                            <select class="custom-select form-control"  id="location3" name="los5">
                                                <option value="">Select Level of Severity</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress7">Level of yield Loss (Estimated number of Bags)</label>
                                            <input type="text" name="loy5" class="form-control" id="emailAddress7" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber4">Contact Number :</label>
                                            <input type="tel" class="form-control" id="phoneNumber4" >
                                        </div>
                                    </div> -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date4">Date</label>
                                            <input type="date" name="dr5" class="form-control" id="date4" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>



                            <!-- Step 6 -->
                            <h6>Step 6</h6>
                            <fieldset>
                                <center><u><h4>Other (Specify)</h4></u></center>
                                

                                <div class="row">
                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location3">Level of Severity </label>
                                            <select class="custom-select form-control"  id="location3" name="los6">
                                                <option value="">Select Level of Severity</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress7">Level of yield Loss (Estimated number of Bags)</label>
                                            <input type="text" name="loy6" class="form-control" id="emailAddress7" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber4">Contact Number :</label>
                                            <input type="tel" class="form-control" id="phoneNumber4" >
                                        </div>
                                    </div> -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date4">Date</label>
                                            <input type="date" name="dr6" class="form-control" id="date4" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>


                            <!-- Step 7 -->
                            <h6>Step 7</h6>
                            <fieldset>
                                <center><u><h4>Other (Specify)</h4></u></center>
                                

                                <div class="row">
                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location3">Level of Severity </label>
                                            <select class="custom-select form-control"  id="location3" name="los7">
                                                <option value="">Select Level of Severity</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress7">Level of yield Loss (Estimated number of Bags)</label>
                                            <input type="text" name="loy7" class="form-control" id="emailAddress7" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber4">Contact Number :</label>
                                            <input type="tel" class="form-control" id="phoneNumber4" >
                                        </div>
                                    </div> -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date4">Date</label>
                                            <input type="date" name="dr7" class="form-control" id="date4" >
                                        </div>
                                    </div>
                                </div>

                                
                            </fieldset>


                            
                        </form>

                            <div class="repo">
                                <div id="loadee" class="alert alert-primary mb-2" role="alert">
                                    Validating Please wait..........
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

                            
    </div>
</section>
<!-- Form wizard with vertical tabs section end -->
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block"><a class="customizer-close" href="#"><i class="ft-x font-medium-3"></i></a><a class="customizer-toggle bg-primary box-shadow-3" href="#" id="customizer-toggle-setting"><i class="ft-settings font-medium-3 spinner white"></i></a><div class="customizer-content p-2">
	<h5 class="mt-1 mb-1 text-bold-500">Navbar Color Options</h5>
	<div class="navbar-color-options clearfix">
		<div class="gradient-colors mb-1 clearfix">
			<div class="bg-gradient-x-purple-blue navbar-color-option" data-bg="bg-gradient-x-purple-blue" title="bg-gradient-x-purple-blue"></div>
			<div class="bg-gradient-x-purple-red navbar-color-option" data-bg="bg-gradient-x-purple-red" title="bg-gradient-x-purple-red"></div>
			<div class="bg-gradient-x-blue-green navbar-color-option" data-bg="bg-gradient-x-blue-green" title="bg-gradient-x-blue-green"></div>
			<div class="bg-gradient-x-orange-yellow navbar-color-option" data-bg="bg-gradient-x-orange-yellow" title="bg-gradient-x-orange-yellow"></div>
			<div class="bg-gradient-x-blue-cyan navbar-color-option" data-bg="bg-gradient-x-blue-cyan" title="bg-gradient-x-blue-cyan"></div>
			<div class="bg-gradient-x-red-pink navbar-color-option" data-bg="bg-gradient-x-red-pink" title="bg-gradient-x-red-pink"></div>
		</div>
		<div class="solid-colors clearfix">
			<div class="bg-primary navbar-color-option" data-bg="bg-primary" title="primary"></div>
			<div class="bg-success navbar-color-option" data-bg="bg-success" title="success"></div>
			<div class="bg-info navbar-color-option" data-bg="bg-info" title="info"></div>
			<div class="bg-warning navbar-color-option" data-bg="bg-warning" title="warning"></div>
			<div class="bg-danger navbar-color-option" data-bg="bg-danger" title="danger"></div>
			<div class="bg-blue navbar-color-option" data-bg="bg-blue" title="blue"></div>
		</div>
	</div>

	<hr>

	<h5 class="my-1 text-bold-500">Layout Options</h5>
	<div class="row">
		<div class="col-12">
			<div class="d-inline-block custom-control custom-radio mb-1 col-4">
				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="default-layout" checked>
				<label class="custom-control-label" for="default-layout">Default</label>
			</div>
			<div class="d-inline-block custom-control custom-radio mb-1 col-4">
				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="fixed-layout">
				<label class="custom-control-label" for="fixed-layout">Fixed</label>
			</div>
			<div class="d-inline-block custom-control custom-radio mb-1 col-4">
				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="static-layout">
				<label class="custom-control-label" for="static-layout">Static</label>
			</div>
			<div class="d-inline-block custom-control custom-radio mb-1">
				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="boxed-layout">
				<label class="custom-control-label" for="boxed-layout">Boxed</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="d-inline-block custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input bg-primary" name="right-side-icons" id="right-side-icons">
				<label class="custom-control-label" for="right-side-icons">Right Side Icons</label>
			</div>
		</div>
	</div>

	<hr>

	<h5 class="mt-1 mb-1 text-bold-500">Sidebar menu Background</h5>
	<!-- <div class="sidebar-color-options clearfix">
		<div class="bg-black sidebar-color-option" data-sidebar="menu-dark" title="black"></div>
		<div class="bg-white sidebar-color-option" data-sidebar="menu-light" title="white"></div>
	</div> -->
	<div class="row sidebar-color-options ml-0">
		<label for="sidebar-color-option" class="card-title font-medium-2 mr-2">White Mode</label>
		<div class="text-center mb-1">
			<input type="checkbox" id="sidebar-color-option" class="switchery" data-size="xs"/>
		</div>
		<label for="sidebar-color-option" class="card-title font-medium-2 ml-2">Dark Mode</label>
	</div>

	<hr>

	<label for="collapsed-sidebar" class="font-medium-2">Menu Collapse</label>
	<div class="float-right">
		<input type="checkbox" id="collapsed-sidebar" class="switchery" data-size="xs"/>
	</div>
	
	<hr>

	<!--Sidebar Background Image Starts-->
	<h5 class="mt-1 mb-1 text-bold-500">Sidebar Background Image</h5>
	<div class="cz-bg-image row">
		<div class="col mb-3">
			<img src="app-assets/images/backgrounds/04.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
		</div>
		<div class="col mb-3">
			<img src="app-assets/images/backgrounds/01.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
		</div>
		<div class="col mb-3">
			<img src="app-assets/images/backgrounds/02.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
		</div>
		<div class="col mb-3">
			<img src="app-assets/images/backgrounds/05.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
		</div>
	</div>
	<!--Sidebar Background Image Ends-->

	<!--Sidebar BG Image Toggle Starts-->
	<div class="sidebar-image-visibility">
		<div class="row ml-0">
			<label for="toggle-sidebar-bg-img" class="card-title font-medium-2 mr-2">Hide Image</label>
			<div class="text-center mb-1">
				<input type="checkbox" id="toggle-sidebar-bg-img" class="switchery" data-size="xs" checked/>
			</div>
			<label for="toggle-sidebar-bg-img" class="card-title font-medium-2 ml-2">Show Image</label>
		</div>
	</div>
	<!--Sidebar BG Image Toggle Ends-->

	<hr>

	<div class="row mb-2">
		<!-- <div class="col">
			<a href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" class="btn btn-danger btn-block box-shadow-1" target="_blank">Buy Now</a>
		</div> -->
		<div class="col">
			<a href="https://themeselection.com/" class="btn btn-primary btn-block box-shadow-1" target="_blank">More Themes</a>
		</div>
	</div>
	<div class="text-center">
		<button id="twitter" class="btn btn-social-icon btn-twitter sharrre mr-1"><i class="la la-twitter"></i></button>
		<button id="facebook" class="btn btn-social-icon btn-facebook sharrre mr-1"><i class="la la-facebook"></i></button>
		<button id="google" class="btn btn-social-icon btn-google sharrre"><i class="la la-google"></i></button>
	</div>
</div>
    </div>
    <!-- End: Customizer-->


    <?php ft();?>	

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script type="text/javascript" src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- <script src="app-assets/js/scripts/forms/wizard-steps.min.js" type="text/javascript"></script> -->
    <!-- END: Page JS-->



    <!-- jquery  -->
	 <!-- <script src="jquery.min.js"></script> -->
    <script src="dollarstir.js"></script>

  </body>
  <!-- END: Body-->



</html>