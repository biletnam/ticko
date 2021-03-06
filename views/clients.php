<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Admin/clients.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2017 14:58:48 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

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
                <li class="breadcrumb-item active">Clients</li>
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
                <!-- First row -->
                <div class="row">
                    <!-- First column -->
                    <div class="col-md-8">
                        <div class="row mb-1">
                            <div class="col-md-9">
                                <h4 class="h4-responsive mt-1">Your Clients</h4>
                            </div>
                            <div class="col-md-3">
                                <div class="md-form">
                                    <input placeholder="Search..." type="text" id="form5" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-1">
                                <!-- Tabs -->
                                <!-- Nav tabs -->
                                <div class="tabs-wrapper">
                                    <ul class="nav classic-tabs tabs-primary primary-color" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab">Personal Clients</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link waves-light" data-toggle="tab" href="#panel84" role="tab">Corporate Clients</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Tab panels -->
                                <div class="tab-content card">
                                    <!--Panel 1-->
                                    <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Abby</td>
                                                        <td>Barrett</td>
                                                        <td>@abbeme</td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Danny</td>
                                                        <td>Collins</td>
                                                        <td>@dennis</td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Clara</td>
                                                        <td>Ericson</td>
                                                        <td>@claris</td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jessie</td>
                                                        <td>Doe</td>
                                                        <td>@jessiedoeofficial</td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Saul</td>
                                                        <td>Hudson</td>
                                                        <td>@slash</td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--/.Panel 1-->
                                    <!--Panel 2-->
                                    <div class="tab-pane fade" id="panel84" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Company Name</th>
                                                        <th>Username</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>PiedPiper</td>
                                                        <td>@piedpiper</td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Github, Inc</td>
                                                        <td>@github</td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Twitter, Inc</td>
                                                        <td>@twitter</td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Alphabet, Inc</td>
                                                        <td>@alphabet</td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Adobe Corporation</td>
                                                        <td>@adobe</td>
                                                        <td>
                                                            <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                            <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                            <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--/.Panel 2-->
                                </div>
                                <!-- /.Tabs -->
                            </div>
                        </div>
                    </div>
                    <!-- /.First column -->
                    <!-- Second column -->
                    <div class="col-md-4 mb-1">
                        <div class="card contact-card with-padding">
                            <div class="card-body">
                                <div class="mt-1 mb-1">
                                    <img src="../../../../wp-content/uploads/2015/10/avatar-2.jpg" alt="" class="img-fluid rounded-circle contact-avatar mx-auto">
                                </div>
                                <h3 class="h3-responsive text-center">Anna Doe</h3>
                                <p class="text-center grey-text">Marketing Analyst</p>
                                <ul class="striped">
                                    <li><strong>E-mail address:</strong> a.doe@example.com</li>
                                    <li><strong>Phone number:</strong> +1 234 5678 90</li>
                                    <li><strong>Company:</strong> The Company, Inc</li>
                                    <li><strong>Twitter username:</strong> @anna.doe</li>
                                    <li><strong>Instagram username:</strong> @anna.doe</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.Second column -->
                </div>
                <!-- /.First row -->
            </div>
        </main>
        <!--/Main layout-->
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red">
                <i class="fa fa-pencil"></i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="fa fa-star"></i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="fa fa-user"></i></a></li>
                <li><a class="btn-floating green"><i class="fa fa-envelope"></i></a></li>
                <li><a class="btn-floating blue"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div>
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
        <script>
        // Data Picker Initialization
        $('.datepicker').pickadate();


        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });

        // Sidenav Initialization
        $(".button-collapse").sideNav();
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);

        // Tooltips Initialization
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
            $('#toggle').tooltip('show')
        })
        </script>
    </body>


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Admin/clients.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2017 14:58:49 GMT -->
</html>