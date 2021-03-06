<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Admin/modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2017 14:58:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    
    <!-- Meta OG -->
    <meta property="og:title" content="Admin Dashboard Template - Modal creator">
    <meta property="og:description" content="Modal section template with most important metrics and intuitive modal creator.">
    <meta property="og:image" content="../../../../img/Live/MDB/06.03/admin-modals.jpg">
    <meta property="og:url" content="modals.html">
    <meta property="og:site_name" content="mdbootstrap.com">
    <!-- /Meta OG -->

    <!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="Modal section template with most important metrics and intuitive modal creator." />
	<meta name="twitter:title" content="Admin Dashboard Template - Modal creator" />
	<meta name="twitter:site" content="@MDBootstrap" />
	<meta name="twitter:image" content="../../../../img/Live/MDB/06.03/admin-modals.jpg" />
	<meta name="twitter:creator" content="@MDBootstrap" />
	<!-- /Twitter Card -->    
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../../../maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
    <!-- Customizer -->
    <link rel="stylesheet" href="../../css/customizer.min.css">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fixed-sn white-skin">

    <!-- Customizer -->
    <div id="customizer" class="z-depth-1">
        <a href="#" id="toggle" data-toggle="tooltip" data-placement="left" title="Customize your template!"><i class="fa fa-cog" aria-hidden="true"></i></a>
        <div class="inner">
            <p class="text-center customizer-heading">Pick a skin color</p>
            <ul class="skins-list">
                <li><a href="#" data-skin-color="deep-purple-skin"><span class="color skin-deep-purple"></span></a></li>
                <li><a href="#" data-skin-color="navy-blue-skin"><span class="color skin-navy-blue"></span></a></li>
                <li><a href="#" data-skin-color="cyan-skin"><span class="color skin-cyan"></span></a></li>
                <li><a href="#" data-skin-color="pink-skin"><span class="color skin-pink"></span></a></li>
                <li><a href="#" data-skin-color="indigo-skin"><span class="color skin-indigo"></span></a></li>
                <li><a href="#" data-skin-color="light-blue-skin"><span class="color skin-light-blue"></span></a></li>
                <li><a href="#" data-skin-color="grey-skin"><span class="color skin-grey"></span></a></li>
                <li><a href="#" data-skin-color="white-skin"><span class="color skin-white"></span></a></li>
                <li><a href="#" data-skin-color="black-skin"><span class="color skin-black"></span></a></li>
                <li><a href="#" data-skin-color="mdb-skin"><span class="color skin-mdb"></span></a></li>
            </ul>
            <p class="text-center customizer-heading">SideNav Background Type</p>
            <form class="form-inline">
                <fieldset class="form-group">
                    <input name="group1" type="radio" id="radio11" value="flat">
                    <label for="radio11">Flat</label>
                </fieldset>

                <fieldset class="form-group">
                    <input name="group1" type="radio" id="radio21" value="gradient">
                    <label for="radio21">Gradient</label>
                </fieldset>

                <fieldset class="form-group">
                    <input name="group1" type="radio" id="radio31" value="background" checked="checked">
                    <label for="radio31">Image</label>
                </fieldset>
            </form>

            <div id="bg-option">
                <p class="text-center customizer-heading">Background Image</p>

                <div class="bg-img-preview">
                    <label for="radio12"><img class="img-fluid" src="../../../../img/Others/sidenav1-min.jpg" alt="Option 1"></label>
                    <label for="radio22"><img class="img-fluid" src="../../../../img/Others/sidenav2-min.jpg" alt="Option 2"></label>
                    <label for="radio32"><img class="img-fluid" src="../../../../img/Others/sidenav3-min.jpg" alt="Option 3"></label>
                    <label for="radio42"><img class="img-fluid" src="../../../../img/Others/sidenav4-min.jpg" alt="Option 4"></label>
                </div>

                <form class="form-inline bg-img-options">
                    <fieldset class="form-group">
                        <input name="group2" type="radio" id="radio12" value="1" checked="checked">
                        <label for="radio12"></label>
                    </fieldset>

                    <fieldset class="form-group">
                        <input name="group2" type="radio" id="radio22" value="2">
                        <label for="radio22"></label>
                    </fieldset>

                    <fieldset class="form-group">
                        <input name="group2" type="radio" id="radio32" value="3">
                        <label for="radio32"></label>
                    </fieldset>

                    <fieldset class="form-group">
                        <input name="group2" type="radio" id="radio42" value="4">
                        <label for="radio42"></label>
                    </fieldset>
                </form>

                <p class="text-center customizer-heading">Mask opacity</p>

                <form class="form-inline">
                    <fieldset class="form-group">
                        <input name="group3" type="radio" id="radio13" value="strong" checked="checked">
                        <label for="radio13">Strong</label>
                    </fieldset>

                    <fieldset class="form-group">
                        <input name="group3" type="radio" id="radio23" value="light">
                        <label for="radio23">Light</label>
                    </fieldset>

                    <fieldset class="form-group">
                        <input name="group3" type="radio" id="radio33" value="slight">
                        <label for="radio33">Slight</label>
                    </fieldset>
                </form>
            </div>

            <div>
                <p class="text-center customizer-heading d-inline">Fixed sidenav</p>
                <div class="switch d-inline-block float-right">
                    <label>
                        Off
                        <input type="checkbox" checked="checked">
                        <span class="lever"></span> On
                    </label>
                </div>
            </div>

            <a href="https://mdbootstrap.com/product/admin-theme/" type="button" class="btn light-blue darken-2 btn-block">Buy now</a>
        </div>
    </div>
    <!-- /.Customizer -->

    <!--Modals-->
    <section>

        <!--2lvl Modal: Product presentation-->
        <div class="modal fade" id="standardModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header white-text" style="background-color: #154771">
                        <p class="heading" contenteditable="true">Create advanced websites and apps with MDB Pro</p>
                    </div>
                    <!--Body-->
                    <div class="modal-body">

                        <form>
                            <div class="file-field">
                                <img src="../../../../wp-content/uploads/2016/05/updatepro-min-1.jpg" class="img-fluid z-depth-1">
                                <input type="file">
                            </div>
                        </form>
                        <br>
                        <p class="card-text" contenteditable="true"><strong>With MDB PRO you can create easily and fast the most advanced projects.</strong></p>
                        <p class="card-text" contenteditable="true"><strong>2000+</strong> stunning premium components, <strong>40+</strong> sections, <strong>20+</strong> templates, direct contact with our team to help you with any questions and unlimited future updates.</p>

                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                        <a id="2lvlModal-learnMore" class="btn btn-danger" contenteditable="true">Learn more</a>
                        <a id="2lvlModal-cancel" class="btn btn-default" contenteditable="true">No, thanks</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--/2lvl Modal: Product presentation-->

        <!--2lvl Modal: Product presentation-->
        <div class="modal fade side-modal" id="sidedModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header white-text" style="background-color: #154771">
                        <p class="heading" contenteditable="true">Create advanced websites and apps with MDB Pro</p>
                    </div>
                    <!--Body-->
                    <div class="modal-body">

                        <form>
                            <div class="file-field">
                                <img src="../../../../wp-content/uploads/2016/05/updatepro-min-1.jpg" class="img-fluid z-depth-1">
                                <input type="file">
                            </div>
                        </form>
                        <br>
                        <p class="card-text" contenteditable="true"><strong>With MDB PRO you can create easily and fast the most advanced projects.</strong></p>
                        <p class="card-text" contenteditable="true"><strong>2000+</strong> stunning premium components, <strong>40+</strong> sections, <strong>20+</strong> templates, direct contact with our team to help you with any questions and unlimited future updates.</p>

                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                        <a id="2lvlModal-learnMore" class="btn btn-danger" contenteditable="true">Learn more</a>
                        <a id="2lvlModal-cancel" class="btn btn-default" contenteditable="true">No, thanks</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--/2lvl Modal: Product presentation-->

        <!--2lvl Modal: Product presentation-->
        <div class="modal fade" id="subscriptionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header white-text" style="background-color: #154771">
                        <p class="heading" contenteditable="true">Subscribe to our newsletter</p>
                    </div>
                    <!--Body-->
                    <div class="modal-body">

                        <p contenteditable="true">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur harum impedit sunt fugit maxime hic et, modi rem numquam omnis! Deleniti delectus ratione perferendis quos fuga fugiat quisquam voluptates assumenda!</p>

                        <form>
                            <div class="file-field">
                                <img src="../../../../wp-content/uploads/2016/05/updatepro-min-1.jpg" class="img-fluid z-depth-1">
                                <input type="file">
                            </div>
                        </form>
                        <br>

                        <div class="md-form">
                            <i class="fa fa-user prefix"></i>
                            <input type="text" id="form1" class="form-control">
                            <label contenteditable="true">Submit</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="form2" class="form-control">
                            <label contenteditable="true">No, thanks</label>
                        </div>


                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                        <a id="2lvlModal-learnMore" class="btn btn-danger" contenteditable="true">Learn more</a>
                        <a id="2lvlModal-cancel" class="btn btn-default" contenteditable="true">No, thanks</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--/2lvl Modal: Product presentation-->

        <!-- Modal -->
        <div class="modal fade modal-bf-fh" id="actionsList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        <div class="flex-center">
                            <h4 class="modal-title">Choose action</h4>
                            <a class="btn btn-primary btn-sm">Create new action</a>
                        </div>
                    </div>
                    <!--Body-->
                    <div class="modal-body">

                        <!--Card-->
                        <div class="card card-cascade narrower z-depth-0">
                            <div class="admin-panel info-admin-panel">
                                <!--Card image-->
                                <div class="view">
                                    <h5>Modals</h5>
                                </div>
                                <!--/Card image-->

                                <!--Card content-->
                                <div class="card-block">

                                    <div class="list-group">
                                        <a href="#" class="list-group-item">modal-id-1 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">modal-id-2 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">modal-id-3 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">modal-id-4 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">modal-id-5 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                        </div>
                        <!--/.Card-->

                        <!--Card-->
                        <div class="card card-cascade narrower z-depth-0">
                            <div class="admin-panel success-admin-panel">
                                <!--Card image-->
                                <div class="view">
                                    <h5>Alerts</h5>
                                </div>
                                <!--/Card image-->

                                <!--Card content-->
                                <div class="card-block">

                                    <div class="list-group">
                                        <a href="#" class="list-group-item">alert-id-1 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">alert-id-2 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">alert-id-3 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">alert-id-4 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">alert-id-5 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                        </div>
                        <!--/.Card-->

                        <!--Card-->
                        <div class="card card-cascade narrower z-depth-0">
                            <div class="admin-panel warning-admin-panel">
                                <!--Card image-->
                                <div class="view">
                                    <h5>Emails</h5>
                                </div>
                                <!--/Card image-->

                                <!--Card content-->
                                <div class="card-block">

                                    <div class="list-group">
                                        <a href="#" class="list-group-item">email-id-1 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">email-id-2 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">email-id-3 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">email-id-4 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                        <a href="#" class="list-group-item">email-id-5 <i class="fa fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                        </div>
                        <!--/.Card-->

                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!-- /.Modal-->

    </section>
    <!--/Modals-->

        <!--Double navigation-->
        <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="user-box">
                    <img src="../../../../img/Photos/Avatars/avatar-5.jpg" class="img-fluid rounded-circle">
                    <p class="user text-center black-text">Jane Doe</p>
                </div>
            </li>
            <!--/. Logo -->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-code"></i> Dashboards<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="organizer-home.view.php" class="waves-effect">Dahboard v1</a>
                                </li>
                                <li><a href="home%20v2.html" class="waves-effect">Dahboard v2</a>
                                </li>
                                <li><a href="home%20v3.html" class="waves-effect">Dahboard v3</a>
                                </li>
                            </ul>
                        </div></li>
                    <li><a href="analytics.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-pie-chart"></i> Analytics</a>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-code"></i> Creators<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="modals.php" class="waves-effect">Modals</a>
                                </li>
                                <li><a href="page-create.php" class="waves-effect">Create Page</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-lock"></i> Forms<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="signup.php" class="waves-effect">Sign up</a>
                                </li>
                                <li><a href="signup%20v2.html" class="waves-effect">Sign up v2</a>
                                </li>
                                <li><a href="login.php" class="waves-effect">Login</a>
                                </li>
                                <li><a href="editaccount.php" class="waves-effect">Edit Account</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-bar-chart"></i> SEO<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="seo-overview.php" class="waves-effect">Overview</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="clients.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-users"></i> Clients</a>
                    <li><a href="invoice.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-money"></i> Invoice</a>
                    <li><a href="support.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-support"></i> Support</a>
                    <li><a href="faq.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a>
                </ul>
            </li>
            <!--/. Side navigation links -->
            <div class="sidenav-bg mask-strong"></div>
        </ul>
        <!--/. Sidebar navigation -->
        
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">
           
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
                
            </div>
            
            <!-- Breadcrumb-->
            <ol class="breadcrumb hidden-lg-down">
                <li class="breadcrumb-item"><a href="#">Creators</a></li>
                <li class="breadcrumb-item active">Modals</li>
            </ol>
            
            <!--Navbar links-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">

                <li class="nav-item">
                    <a class="nav-link">
                        <span class="badge red">9 </span> <i class="fa fa-upload"></i>
                        <span class="hidden-sm-down">Publish changes</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge red">99</span> <i class="fa fa-bell"></i>
                        <span class="hidden-sm-down">Notifications</span>
                    </a>
                    <div class="dropdown-menu header-notifications animated dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <ul>
                            <li class="active-notification"><i class="fa fa-user" aria-hidden="true"></i> New order received <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span></li>
                            <li class="active-notification"><i class="fa fa-user" aria-hidden="true"></i> New order received <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 51 min</span></li>
                            <li class="active-notification"><i class="fa fa-bullhorn" aria-hidden="true"></i> Your campaign is about to end <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 hours</span></li>
                            <li class="active-notification"><i class="fa fa-line-chart" aria-hidden="true"></i> Raport is ready to be downloaded <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 1 day</span></li>
                            <li class="active-notification"><i class="fa fa-life-saver" aria-hidden="true"></i> Something else <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 1 day</span></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span>
                    </a>
                    <div class="dropdown-menu dropdown-ins dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Log Out</a>
                        <a class="dropdown-item" href="#">My account</a>
                    </div>
                </li>
            </ul>
            <!--/Navbar links-->
            
        </nav>
        <!-- /.Navbar -->
        
    </header>
        <!--/.Double navigation-->


    <!--Main layout-->
    <main class="">
        <div class="container-fluid">

            <!--Section: Conditions-->
            <section class="section">

                <!--First row-->
                <div class="row">

                    <!--Crucial button-->
                    <div class="col-12 text-center">
                        <h2 class="h2-responsive m-b-2">Create new modal</h2>
                        <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#standardModal"><i class="fa fa-plus left"></i> Standard Modal</a>
                        <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#sidedModal"><i class="fa fa-plus left"></i> Side Modal</a>
                        <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#actionsList"><i class="fa fa-plus left"></i> Side Modal Fluid</a>
                    </div>
                    <!--/Crucial button-->

                    <br>

                    <div class="col-md-12">
                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Admin panel-->
                            <div class="admin-panel indigo-admin-panel">

                                <!--Second row-->
                                <div class="row m-b-0">
                                    <!--First column-->
                                    <div class="col-md-12">

                                        <!--Panel content-->
                                        <div class="card-block p-y-0">

                                            <!--Table-->
                                            <table class="table table-hover cascading-table m-b-0">
                                                <!--Table head-->
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Type</th>
                                                        <th>ID</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <!--/Table head-->

                                                <!--Table body-->
                                                <tbody>

                                                    <!--Table row-->
                                                    <tr class="none-top-border">
                                                        <td>
                                                            <fieldset class="form-group">
                                                                <input type="checkbox" id="checkbox1">
                                                                <label for="checkbox1"></label>
                                                            </fieldset>
                                                        </td>
                                                        <td>
                                                            <p>Side Modal</p>
                                                        </td>
                                                        <td>
                                                            <p>Modal-id-1</p>
                                                        </td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-eye"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <!--/Table row-->

                                                    <!--Table row-->
                                                    <tr>
                                                        <td>
                                                            <fieldset class="form-group">
                                                                <input type="checkbox" id="checkbox2">
                                                                <label for="checkbox2"></label>
                                                            </fieldset>
                                                        </td>
                                                        <td>
                                                            <p>Standard Modal</p>
                                                        </td>
                                                        <td>
                                                            <p>Modal-id-2</p>
                                                        </td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-eye"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <!--/Table row-->

                                                    <!--Table row-->
                                                    <tr>
                                                        <td>
                                                            <fieldset class="form-group">
                                                                <input type="checkbox" id="checkbox3">
                                                                <label for="checkbox3"></label>
                                                            </fieldset>
                                                        </td>
                                                        <td>
                                                            <p>Standard Modal</p>
                                                        </td>
                                                        <td>
                                                            <p>Modal-id-3</p>
                                                        </td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-eye"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <!--/Table row-->

                                                </tbody>
                                                <!--/Table body-->
                                            </table>
                                            <!--/Table-->

                                        </div>
                                        <!--/.Panel content-->

                                    </div>
                                    <!--/First column-->
                                </div>
                                <!--/Second row-->

                            </div>
                            <!--/Admin panel-->

                        </div>
                        <!--/.Card-->
                    </div>

                </div>
                <!--/First row-->

                <!--Second row-->
                <div class="row">

                    <div class="col-md-12">
                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Admin panel-->
                            <div class="admin-panel indigo-admin-panel">

                                <!--Second row-->
                                <div class="row m-b-0">
                                    <!--First column-->
                                    <div class="col-md-12">

                                        <!--Panel content-->
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <!--Table-->
                                                <table class="table table-hover mb-0">
                                                    <!--Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th>Term</th>
                                                            <th>Indexed URL</th>
                                                            <th>Engine</th>
                                                            <th>Rank</th>
                                                            <th>Day</th>
                                                            <th>Week</th>
                                                            <th>Month</th>
                                                            <th>Local</th>
                                                            <th>Global</th>
                                                        </tr>
                                                    </thead>
                                                    <!--/Table head-->

                                                    <!--Table body-->
                                                    <tbody>
                                                        <tr class="none-top-border">
                                                            <td>Material Design</td>
                                                            <td>http://example.com</td>
                                                            <td>Google.com</td>
                                                            <td><strong>3</strong></td>
                                                            <td>2 <span class="badge big-badge primary-color green">1 <i class="fa fa-arrow-circle-up"></i></span></td>
                                                            <td>2 <span class="badge big-badge primary-color red">1 <i class="fa fa-arrow-circle-down"></i></span></td>
                                                            <td>2 <span class="badge big-badge primary-color grey">0 </span></td>
                                                            <td>200 (US)</td>
                                                            <td>2000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Material Design</td>
                                                            <td>http://example.com</td>
                                                            <td>Google.com</td>
                                                            <td><strong>3</strong></td>
                                                            <td>2 <span class="badge big-badge primary-color green">1 <i class="fa fa-arrow-circle-up"></i></span></td>
                                                            <td>2 <span class="badge big-badge primary-color red">1 <i class="fa fa-arrow-circle-down"></i></span></td>
                                                            <td>2 <span class="badge big-badge primary-color grey">0 </span></td>
                                                            <td>200 (US)</td>
                                                            <td>2000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Material Design</td>
                                                            <td>http://example.com</td>
                                                            <td>Google.com</td>
                                                            <td><strong>3</strong></td>
                                                            <td>2 <span class="badge big-badge primary-color green">1 <i class="fa fa-arrow-circle-up"></i></span></td>
                                                            <td>2 <span class="badge big-badge primary-color red">1 <i class="fa fa-arrow-circle-down"></i></span></td>
                                                            <td>2 <span class="badge big-badge primary-color grey">0 </span></td>
                                                            <td>200 (US)</td>
                                                            <td>2000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Material Design</td>
                                                            <td>http://example.com</td>
                                                            <td>Google.com</td>
                                                            <td><strong>3</strong></td>
                                                            <td>2 <span class="badge big-badge primary-color green">1 <i class="fa fa-arrow-circle-up"></i></span></td>
                                                            <td>2 <span class="badge big-badge primary-color red">1 <i class="fa fa-arrow-circle-down"></i></span></td>
                                                            <td>2 <span class="badge big-badge primary-color grey">0 </span></td>
                                                            <td>200 (US)</td>
                                                            <td>2000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Material Design</td>
                                                            <td>http://example.com</td>
                                                            <td>Google.com</td>
                                                            <td><strong>3</strong></td>
                                                            <td>2 <span class="badge big-badge primary-color green">1 <i class="fa fa-arrow-circle-up"></i></span></td>
                                                            <td>2 <span class="badge big-badge primary-color red">1 <i class="fa fa-arrow-circle-down"></i></span></td>
                                                            <td>2 <span class="badge big-badge primary-color grey">0 </span></td>
                                                            <td>200 (US)</td>
                                                            <td>2000</td>
                                                        </tr>
                                                    </tbody>
                                                    <!--/Table body-->
                                                </table>
                                                <!--/Table-->
                                            </div>
                                        </div>
                                        <!--/.Panel content-->

                                    </div>
                                    <!--/First column-->
                                </div>
                                <!--/Second row-->

                            </div>
                            <!--/Admin panel-->

                        </div>
                        <!--/.Card-->
                    </div>

                </div>
                <!--/Second row-->

            </section>
            <!--/Section: Conditions-->

        </div>
    </main>
    <!--/Main layout-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <script>
        $("#navigation").load("components/navigation.html");
    </script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <!-- Customizer -->
    <script type="text/javascript" src="../../js/customizer.min.js"></script>

    <script>
        // Data Picker Initialization
        $('.datepicker').pickadate();

        // Tooltips Initialization
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
            $('#toggle').tooltip('show')
        })

        // Sidenav Initialization
        $(".button-collapse").sideNav();
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>

    <script>
        $('#actionScoring, #actionCondition').on('show.bs.modal', function(e) {
            $("label").addClass("active");
        })

        $('#actionScoring, #actionCondition').on('show.bs.modal', function(e) {
            $("label").addClass("active");
            $('.mdb-select').material_select();
        })
        $('#actionScoring, #actionCondition').on('hide.bs.modal', function(e) {
            $("label").addClass("active");
            $('.mdb-select').material_select('destroy');
        })
    </script>


</body>


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Admin/modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2017 14:58:38 GMT -->
</html>
