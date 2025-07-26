<!DOCTYPE html>
<html lang="en" dir="">


<!-- Mirrored from demos.ui-lib.com/gull/html/layout1/upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 05:16:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Newspepar</title>
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />-->
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700&display=swap">-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">



    <link href="<?=base_url();?>Assets/css/style.css" rel="stylesheet" />

    <link href="<?=base_url();?>Assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?=base_url();?>Assets/css/plugins/dropzone.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>Assets/css/plugins/datatables.min.css" />


    
   <link rel="icon" href="<?= base_url('Assets\images\330703.png') ?>" sizes="32x32" type="image/png">

   
    <!-- ******* Added New Links***** -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.1/css/all.min.css"  />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />


    
    <script>
        var base_path="<?php echo base_url();?>";
     </script>


</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header ">
            <div class="logo">
                <img src="<?=base_url();?>Assets\images\comtrance new.jpeg" alt="" width="">
                <!--<img src="<?= base_url() ?>Assets\images\comtrance new.jpeg" alt="no picture" height="70px" width="70px" style="margin-left: 43px;">-->
            </div>
            <div class="menu-toggle ">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="d-flex align-items-center">
                <!-- Mega menu -->
                <div class="dropdown mega-menu d-none d-md-block">
                    <!-- <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a> -->
                    <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                        <div class="row m-0">
                            <div class="col-md-4 p-4 bg-img">
                                <h2 class="title">Mega Menu <br> Sidebar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.
                                </p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                                <button class="btn btn-lg btn-rounded btn-outline-warning">Learn More</button>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                                <div class="menu-icon-grid w-auto p-0">
                                    <a href="#"><i class="i-Shop-4"></i> Home</a>
                                    <a href="#"><i class="i-Library"></i> UI Kits</a>
                                    <a href="#"><i class="i-Drop"></i> Apps</a>
                                    <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                    <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                                    <a href="#"><i class="i-Ambulance"></i> Support</a>
                                </div>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Components</p>
                                <ul class="links">
                                    <li><a href="<?=base_url();?>accordion.html">Accordion</a></li>
                                    <li><a href="<?=base_url();?>alerts.html">Alerts</a></li>
                                    <li><a href="<?=base_url();?>buttons.html">Buttons</a></li>
                                    <li><a href="<?=base_url();?>badges.html">Badges</a></li>
                                    <li><a href="<?=base_url();?>carousel.html">Carousels</a></li>
                                    <li><a href="<?=base_url();?>lists.html">Lists</a></li>
                                    <li><a href="<?=base_url();?>popover.html">Popover</a></li>
                                    <li><a href="<?=base_url();?>tables.html">Tables</a></li>
                                    <li><a href="<?=base_url();?>datatables.html">Datatables</a></li>
                                    <li><a href="<?=base_url();?>modals.html">Modals</a></li>
                                    <li><a href="<?=base_url();?>nouislider.html">Sliders</a></li>
                                    <li><a href="<?=base_url();?>tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Mega menu -->
                <!-- <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div> -->
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle -->
             
                <!-- Notificaiton -->
                <div class="dropdown">
                    <!-- <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-primary">3</span>
                        <i class="i-Bell text-muted header-icon"></i>
                    </div> -->
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                      
                    
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Data-Power text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Server Up!</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">14 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Server rebooted successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End -->
                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="<?=base_url();?>Assets/images/userrr.png" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <!-- <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> Timothy Carlson
                            </div> -->
                            <!-- <a class="dropdown-item">Account settings</a>
                            <a class="dropdown-item">Billing history</a> -->
                            <!-- <a class="nav-item-hold" href="<?= base_url(''); ?>">
        <img src="<?= base_url('Assets/images/logout.png'); ?>" width="25">
        <span class="nav-text">Log Out</span>
    </a> -->
                            <a class="dropdown-item" href="<?=base_url('');?>">Log out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">

               <li class="nav-item" data-item="">
    <a class="nav-item-hold" href="<?=base_url() ?>Dashbord/create">
        <img src="<?=base_url();?>Assets/images/home.png" width="25" height="25" style="margin-top: 15px;">  
        <span class="nav-text">Dashbord</span>
    </a>
</li>

                    <!-- <li class="nav-item" ><a class="nav-item-hold" href="<?=base_url() ?>Dashboard"><img src="https://img.icons8.com/stickers/2x/spotify.png" style="width:30px"><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <!-- <li class="nav-item" data-item="extrakits">
                        <a class="nav-item-hold" href="<?=base_url() ?>Dashbord/create" target="_blank"> 
                        <img src="<?=base_url();?>Assets/images/home.png" width="25" height="25"> 
                        <span class="nav-text">Home</span>
                    </a>

                         Songs <br>Management -->
                    </li> 

                    <li class="nav-item" data-item="extrakits">
                        <a class="nav-item-hold" href="<?=base_url() ?>Member_registration">
                        <img src="<?=base_url();?>Assets/images/registration.png" width="25"> 
                        <span class="nav-text">Registration</span>
                    </a>
                  
                        <!-- <div class="triangle"></div> -->
                    </li>
                    
                    <li class="nav-item" data-item="extrakits2"><a class="nav-item-hold" href="<?=base_url() ?>">
                        <a class="nav-item-hold" href="<?=base_url() ?>Member_payment">
                        <img src="<?=base_url();?>Assets/images/payment.png" width="25"> 
                      <span class="nav-text">Payment</span>
                    </a>
                        <!-- <div class="triangle"></div> -->
                    </li>
                    
                    <li class="nav-item" data-item="extrakits3"><a class="nav-item-hold" href="<?=base_url() ?>">
                    <a class="nav-item-hold" href="<?=base_url() ?>UserDetails">
                    <img src="<?=base_url();?>Assets/images/report.png" width="25"> 
                    <span class="nav-text">Reports</span>
                    </a>
                        <!-- <div class="triangle"></div> -->
                    </li>
                    
                    <li class="nav-item">
    <a class="nav-item-hold" href="<?= base_url(''); ?>">
        <img src="<?= base_url('Assets/images/logout.png'); ?>" width="25">
        <span class="nav-text">Log Out</span>
    </a>
</li>

              

                 
                   
                    
                   
                </ul>
            </div>
            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
              
                <ul class="childNav" data-parent="forms">
                    <li class="nav-item"><a href="<?=base_url();?>Role"><i class=" nav-icon far fa-user-circle"></i><span class="item-name">Role</span></a></li>
                </ul>
               
                <ul class="childNav" data-parent="extrakits">
                <li class="nav-item "><a href="<?=base_url();?>Member_registration/create"><span class="item-name" style="font-size: 16px; margin-left: -13px;">Member Registration&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Member_registration/create"><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/external-teacher-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev.png"  style="width:30px" >&emsp;<span class="item-name">Add Member</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Member_registration"><img src="https://img.icons8.com/external-itim2101-fill-itim2101/64/external-teacher-elearning-itim2101-fill-itim2101-1.png" style="width:30px" >&emsp;<span class="item-name">Member List</span></a></li>   
                    <li class="nav-item"><a href="<?=base_url();?>Emp/create"><img src="https://img.icons8.com/external-itim2101-fill-itim2101/64/external-teacher-elearning-itim2101-fill-itim2101-1.png" style="width:30px" >&emsp;<span class="item-name">Employee</span></a></li>   
                    <li class="nav-item"><a href="<?=base_url();?>Firmcheck/create"><img src="https://img.icons8.com/external-itim2101-fill-itim2101/64/external-teacher-elearning-itim2101-fill-itim2101-1.png" style="width:30px" >&emsp;<span class="item-name">Firm</span></a></li>                  
               
                </ul>
               
                <!--<ul class="childNav" data-parent="extrakits2">-->
                <!--<li class="nav-item"><a href="<?=base_url();?>Member_payment/create"><span class="item-name" style="font-size: 16px; margin-left: -13px;">Member Payment&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></span></a></li>-->
                <!--    <li class="nav-item"><a href="<?=base_url();?>Member_payment/create"><img src="https://img.icons8.com/ios-filled/50/student-registration.png"  style="width:25px" >&emsp;<span class="item-name">New Payment</span></a></li>-->
                <!--    <li class="nav-item"><a href="<?=base_url();?>Member_payment/index"><img src="https://img.icons8.com/external-yogi-aprelliyanto-glyph-yogi-aprelliyanto/32/external-student-online-courses-yogi-aprelliyanto-glyph-yogi-aprelliyanto.png" style="width:25px" >&emsp;<span class="item-name">Payment Details</span></a></li>-->
                   
                <!--</ul>-->
                
                 <ul class="childNav" data-parent="extrakits2">
                <li class="nav-item"><a href="<?=base_url();?>Member_payment/create"><span class="item-name" style="font-size: 16px; margin-left: -13px;">Member Payment&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Member_payment/create"><img src="<?=base_url();?>Assets\images\483742new.png" style="width:25px" >&emsp;<span class="item-name">New Payment</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Member_payment/index"><img src="<?=base_url();?>Assets\images\726559newssssssssss.png" style="width:25px">&emsp;<span class="item-name">Payment Details</span></a></li>
                   
                </ul>

                <!-- <ul class="childNav" data-parent="extrakits3"> -->
                <!-- <li class="nav-item"><a href="<?=base_url();?>Dashbord/create"><span class="item-name" style="font-size: 16px; margin-left: -13px;">Dashbord&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></span></a></li> -->
                    <!-- <li class="nav-item"><a href="<?=base_url();?>Member_payment/create"><img src="https://img.icons8.com/ios-filled/50/student-registration.png"  style="width:25px" >&emsp;<span class="item-name">New Payment</span></a></li> -->
                    <!-- <li class="nav-item"><a href="<?=base_url();?>Member_payment/index"><img src="https://img.icons8.com/external-yogi-aprelliyanto-glyph-yogi-aprelliyanto/32/external-student-online-courses-yogi-aprelliyanto-glyph-yogi-aprelliyanto.png" style="width:25px" >&emsp;<span class="item-name">Payment Details</span></a></li> -->
                   
                <!-- </ul> -->
               
                <!--<ul class="childNav" data-parent="extrakits3">-->
                <!--<li class="nav-item"><a href="<?=base_url();?>Payment_success/create"><span class="item-name" style="font-size: 16px; margin-left: -13px;">Reports&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></span></a></li>-->
                <!--    <li class="nav-item"><a href="<?=base_url();?>Payment_success/create"><img src="https://img.icons8.com/ios-glyphs/30/plus--v1.png" style="width:20px" >&emsp;<span class="item-name">Payment report</span></a></li>-->
                    

                <!--</ul>-->
                
                <!--  <ul class="childNav" data-parent="extrakits3">-->
                <!--<li class="nav-item"><a href="<?=base_url();?>Payment_success/create"><span class="item-name" style="font-size: 16px; margin-left: -13px;">Forms&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></span></a></li>-->
                <!--    <li class="nav-item"><a href="<?=base_url();?>Payment_success/create"><img src="<?=base_url();?>Assets\images\2602467reportskkkkk.png" style="width:20px" >&emsp;<span class="item-name">Form 1</span></a></li>-->
                    

                <!--</ul>-->
               
                 <ul class="childNav" data-parent="extrakits3">
                <li class="nav-item"><a href="<?=base_url();?>Payment_success/create"><span class="item-name" style="font-size: 16px; margin-left: -13px;">Forms&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Payment_success/create"><img src="<?=base_url();?>Assets\images\2602467reportskkkkk.png" style="width:20px" >&emsp;<span class="item-name">Monthly Report</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Report/create"><img src="<?=base_url();?>Assets\images\2602467reportskkkkk.png" style="width:20px" >&emsp;<span class="item-name">To From report</span></a></li>
                    
                </ul>
                
                <ul class="childNav" data-parent="sessions">
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/signin.html"><i class=" nav-icon nav-icon i-Checked-User"></i><span class="item-name">Sign in</span></a></li>
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/signup.html"><i class=" nav-icon nav-icon i-Add-User"></i><span class="item-name">Sign up</span></a></li>
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/forgot.html"><i class=" nav-icon nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                </ul>
                <ul class="childNav" data-parent="others">
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/not-found.html"><i class=" nav-icon nav-icon i-Error-404-Window"></i><span class="item-name">Not Found</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>user.profile.html"><i class=" nav-icon nav-icon i-Male"></i><span class="item-name">User Profile</span></a></li>
                    <li class="nav-item"><a class="open" href="<?=base_url();?>blank.html"><i class=" nav-icon nav-icon i-File-Horizontal"></i><span class="item-name">Blank Page</span></a></li>
                </ul>
            </div>
            <div class="sidebar-overlay"></div>
        </div>