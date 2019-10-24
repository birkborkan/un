<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>كلية دارفور الجامعية</title>

  <!-- calender-->

  
    <!-- Bootstrap -->
  
    <!-- Respomsive slider -->
    <link href="css/responsive-calendar.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 <!-- clock style-->
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/demo.css"/>
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
<style>
@media (min-width: 768px){
.sidebar .nav-item .nav-link[data-toggle=collapse].collapsed::after {
    content: "";
}}
.nav-link i {
    font-size: .85rem;
    margin-right: .25rem;
    float: right;
}
@media (min-width: 768px){
.sidebar .nav-item .nav-link span {
    font-size: .85rem;
    display: inline;
    float: right;
}}
.sidebar-dark .sidebar-heading {
    color: rgba(255,255,255,.4);
    display: contents;
}
.fa-laugh-wink:before {
    content: "";
}
.input-group-append{
  

  border-top-left-radius: 10px !important;
}
 
 
 .bro{
   color:white;

   background:#0080c0;
   float: right;
   width: 100%;
   padding-bottom:5px;
 }
 ul {
  
    padding-inline-start: 0px;
} 
.dropdown-menu  li{
  background:#8bd7ed;
  border:1px solid #eee;
  border-top-left-radius:50%;
  border-bottom-left-radius:50%;
  
}
.dropdown-menu li:hover{
  background:#00ffff;
  
  
}
.dropdown-menu li a:hover{
  padding-bottom:20px;
  color:#ff8080;  
}
 
 .down_from_top{
  background: #01fec5;
    color: white;
    position: fixed;
    right: 200px;
    width: 250px;
    opacity:0.6;
    top: 0px;
    text-align: right;
    padding: 5px;
    border-radius: 6px;
    z-index:100;

 
  
  }
  .dropdown-toggle::after {
    display: none;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent;
}
 
@media (min-width: 380px){
  .bro {
    font-size: 14px;
    
}
.clock{
  text-align:center;
}
.bro>img{
  margin-top:15px;
  
  margin-right:12px;
}
}
@media (max-width: 780px){
 
.bro>img {
    height:50px;
    margin-top:7px;
    
} 
.clock{
  text-align:right;
}
.logo_text{
    
    margin-top:10px;
    
}}
 
 
.clock_in{
  width:auto;
  height:400px;
 
  right:1px;


   
}
canvas{
  width:auto;
  
   
   


   
}
</style>

</head>

<body id="page-top"   dir='rtl' >
<div class="down_from_top" id="down_from_top" style='display:none;'>
  <div><a href='#' class='hide_show' style='color:red;'onclick='return false;' >x</a></div>
  <div class='drop_value'> </div>
  
  </div>
  <!-- Page Wrapper -->
  <div id="wrapper" >

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion col-xs-12"  style='float:right;'id="accordionSidebar">                                   
   
    <div class="  bro" >
    <img src="img/images.jpg" id='seventyfive' width='50%' class='rotate-15  ' style='float:right;margin-right:10px;'alt="" class='col-md-5 col-xs-12'>
     
    
  <br>
  <br>
  <br>
<span class='logo_text'>Darfur University College </span>
</div>
<div></div>
    <div class="dropdown" style='float:right;'>
    
    <div class="btn btn-default dropdown-toggle bro" type="button" id="menu1" data-toggle="dropdown">ادارة الكليات 
    <span class="caret"></span></div>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style='text-align:right;'>
      <li class='li_hover' role="presentation"  onclick='return false;' onmousedown="give_pages('add_fac.php',' إضافة كلية جديدة');"><a role="menuitem" tabindex="-1"
       href="#">إضافة كلية</a></li>

      <li class='li_hover' role="presentation" class="divider"></li>
      <li class='li_hover' role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>
   <div class="dropdown" style='float:right;'>
    <div class="btn btn-default dropdown-toggle bro" type="button" id="menu1" data-toggle="dropdown">ادارةالاقسام
    <span class="caret"></span></div>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style='text-align:right;'>
    <li class='li_hover'role="presentation" onclick='return false;' onmousedown="give_pages('add_new_depart.php','إضافة قسم جديد');"><a role="menuitem" tabindex="-1" href="#">إضافة قسم</a></li>
      <li class='li_hover' role="presentation" onclick='return false;' onmousedown="give_pages('show_all_depart.php',' تعديل بيانات الاقسام ');"><a role="menuitem" tabindex="-1" href="#">تعديل قسم</a></li>
      <li class='li_hover' role="presentation" onclick='return false;' onmousedown="give_pages('show_all_depart_delete.php',' حذف الاقسام');"><a role="menuitem" tabindex="-1" href="#">حذف قسم</a></li>
      <li class='li_hover' role="presentation" onclick='return false;' onmousedown="give_pages('show_all_department.php','  عرض الاقسام  ');"><a role="menuitem" tabindex="-1" href="#"> عرض الاقسام</a></li>
 
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>
          <div class="dropdown" style='float:right;'>
    <div class="btn btn-default dropdown-toggle bro" type="button" id="menu1" data-toggle="dropdown">الفصل الدراسي
    <span class="caret"></span></div>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style='text-align:right;'>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>
          <div class="dropdown" style='float:right;'>
    <div class="btn btn-default dropdown-toggle bro" type="button" id="menu1" data-toggle="dropdown">ادارة الطلاب
    <span class="caret"></span></div>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style='text-align:right;'>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>      
    <div class="dropdown" style='float:right;'>
    <div class="btn btn-default dropdown-toggle bro" type="button" id="menu1" data-toggle="dropdown">ادارة النتائج
    <span class="caret"></span></div>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style='text-align:right;'>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>    
   <div class="dropdown" style='float:right;'>
    <div class="btn btn-default dropdown-toggle bro" type="button" id="menu1" data-toggle="dropdown">ادارة الرسوم
    <span class="caret"></span></div>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style='text-align:right;'>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>   
  <div class="dropdown" style='float:right;'>
    <div class="btn btn-default dropdown-toggle bro" type="button" id="menu1" data-toggle="dropdown">التقارير
    <span class="caret"></span></div>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style='text-align:right;'>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>
       

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style='background:blue;'>

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
       
Darfur University College
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
         
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
             
     
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Setting</span>
                <img class="img-profile rounded-circle" src="img/images.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" style='font-family:tahoma;'>كلية دارفور الجامعية</h1>
            <a href="#" 
           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-home fa-sm text-white-50"></i>الرئيسية</a>
          </div>

 
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <div id='titley'>
                  <h6 class="m-0 font-weight-bold text-primary"> الوقــــــــــت</h6>
</div>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div id='contenty'>
 
 
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
 
google_ad_width = 228;
google_ad_height = 90;
//-->
</script>
 
    
    </div>
<div class="jquery-script-clear"></div>


    <div class="wrapper clearfix show text-right">
       <div class='clock_in'> <div class="clock" id="clock" style='width:100%; height:100%;'></div></div>
         
         
    </div>
                </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" id='titley2'>التقويم</h6>
                
                </div>
                <!-- Card Body -->
                <div class="card-body" style='height:530px;' id='contenty2'>
                    
      <!-- Responsive calendar - START -->
    	<div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
        </div><hr/>
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>
      <!-- Responsive calendar - END -->
  
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
 

            

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto" style='height:150px;border:2px solid #eee;padding-top:8px;'>
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/responsive-calendar.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          time: '2019-01',
          events: {
            "2019-04-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2019-04-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2019-05-03":{"number": 1}, 
            "2019-06-12": {}}
        });
      });
    </script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="js/ajax.js"></script>
  <!-- Page level plugins -->
 
  
  <!-- jquery clock plugin-->
  
<script type="text/javascript" src="js/clock-1.1.0.min.js"></script>
<script>

    var clock = $("#clock").clock(),
        data = clock.data('clock');

    // data.pause();
    // data.start();
    // data.setTime(new Date());

    var d = new Date();
    d.setHours(9);
    d.setMinutes(51);
    d.setSeconds(20);

    var clock1 = $("#clock1").clock({
        theme: 't2',
        date: d
    });

    var clock2 = $("#clock2").clock({
        theme: 't3'
    });

</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

</html>
