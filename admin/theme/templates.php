<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo web_root;?>bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo web_root;?>plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo web_root;?>dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo web_root;?>dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="<?php echo web_root;?>plugins/iCheck/flat/blue.css">
        <link rel="stylesheet" href="<?php echo web_root;?>plugins/morris/morris.css">
        <link rel="stylesheet" href="<?php echo web_root;?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <link href="<?php echo web_root; ?>plugins/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="<?php echo web_root;?>plugins/dataTables/jquery.dataTables.min.css">  
        <link rel="stylesheet" href="<?php    echo web_root;?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    </head>
 <body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo web_root;?>/admin/" class="logo">
      <span class="logo-mini"><b>CHAMBAMX</b></span>
      <span class="logo-lg"><b>CHAMBAMX</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <?php
              $user = New User();
              $singleuser = $user->single_user($_SESSION['ADMIN_USERID']);
          ?>
          <li class="dropdown user user-menu" style="padding-right: 15px;"  >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo web_root.'admin/user/'. $singleuser->PICLOCATION;?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $singleuser->FULLNAME; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header"> 
                <img data-target="#menuModal"  data-toggle="modal"  src="<?php echo web_root.'admin/user/'. $singleuser->PICLOCATION;?>" class="img-circle" alt="User Image" />  
              </li> 
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo web_root.'admin/user/index.php?view=view&id='.$_SESSION['ADMIN_USERID'] ;?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo web_root ;?>admin/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
 <div class="modal fade" id="menuModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">x</button>
                                    <h4 class="modal-title" id="myModalLabel">Image.</h4>
                                </div>
                                <form action="<?php //echo web_root; ?>admin/user/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows">
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8"> 
                                                            <input class="mealid" type="hidden" name="mealid" id="mealid" value="">
                                                              <input name="MAX_FILE_SIZE" type="hidden" 
                                                              value="1000000"> 
                                                              <input id="photo" name="photo" type="file">
                                                       </div>
                                                        <div class="col-md-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type=
                                        "button">Close</button> <button class="btn btn-primary"
                                        name="savephoto" type="submit">Upload Photo</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu"> 
        <li  class="<?php echo (currentpage() == 'index.php') ? "active" : false;?>" >
          <a href="<?php echo web_root ;?>admin/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>  
          </a> 
        </li> 
        <li class="<?php echo (currentpage() == 'company') ? "active" : false;?>" >
          <a href="<?php echo web_root ;?>admin/company/">
            <i class="fa fa-building"></i> <span>Company</span> 
          </a>
        </li>
        <li class="<?php echo (currentpage() == 'vacancy') ? "active" : false;?>" >
          <a href="<?php echo web_root ;?>admin/vacancy/">
            <i class="fa fa-suitcase"></i> <span>Vacancy</span> 
          </a>
        </li>
        <li class="<?php echo (currentpage() == 'employee') ? "active" : false;?>" >
          <a href="<?php echo web_root ;?>admin/employee/">
            <i class="fa fa-users"></i> <span>Employee</span> 
          </a>
        </li> 
        <li class="<?php echo (currentpage() == 'applicants') ? "active" : false;?>" > 
          <a href="<?php echo web_root ;?>admin/applicants/">
            <i class="fa fa-users"></i> <span>Applicants</span> 
            <span class="label label-primary pull-right">
              <?php
                $sql = "SELECT count(*) as 'APPL' FROM `t_empleos_aplicados` WHERE `PENDINGAPPLICATION`=1";
                $mydb->setQuery($sql);
                $pending = $mydb->loadSingleResult();
                echo $pending->APPL;
              ?>
            </span>
          </a>
        </li> 
        <li class="<?php echo (currentpage() == 'category') ? "active" : false;?>" > 
          <a href="<?php echo web_root ;?>admin/category/">
            <i class="fa fa-list"></i> <span>Category</span>  
          </a>
        </li> 
         <li class="<?php echo (currentpage() == 'user') ? "active" : false;?>">
          <a href="<?php echo web_root; ?>admin/user/">
            <i class="fa fa-user"></i> <span>Manage Users</span> </a>
        </li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
  <section class="content-header">
      <h1>
        <?php echo isset($title) ? $title : ''; ?>
      </h1>
      <ol class="breadcrumb">
        <?php
         if ($title!='Home') {
            $active_title = '';
            if (isset($_GET['view'])) {
              $active_title = '<li class='.$active_title.'><a href="index.php">'.$title.'</a></li>';
            }else{
              $active_title = '<li class='.$active_title.'>'.$title.'</li>';
            }
            echo '<li><a href='.web_root.'admin/><i class="fa fa-dashboard"></i> Home</a></li>';
            echo  $active_title;
            echo  isset($_GET['view']) ? '<li class="active">'.$_GET['view'].'</li>' : '';
          }
        ?>
      </ol>
    </section>
         <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
              <?php 
               check_message();
               require_once $content; 
               ?> 
             </div>
             </div>
           </div>
         </div>
         </section>
 </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.2
    </div>
    <strong>Copyright &copy; 2021 <a href="#">CampCodes</a>.</strong> All rights
    reserved.
  </footer>
    </body>
      <script type="text/javascript" src="<?php echo web_root; ?>plugins/jQuery/jQuery-2.1.4.min.js"> </script>
      <script type="text/javascript" src="<?php echo web_root; ?>bootstrap/js/bootstrap.min.js" ></script>
      <script src="<?php echo web_root;?>dist/js/app.min.js"></script> 
      <script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/bootstrap-datepicker.js" ></script> 
      <script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
      <script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
      <script type="text/javascript" src="<?php echo web_root; ?>plugins/dataTables/dataTables.bootstrap.min.js" ></script> 
      <script src="<?php echo web_root; ?>plugins/datatables/jquery.dataTables.min.js"></script> 
      <script src="<?php echo web_root; ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
      <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.js"></script> 
      <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script> 
      <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.extensions.js"></script> 
<script>
  $(function () {
    $("#dash-table").DataTable();
    $('#dash-table2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
$('input[data-mask]').each(function() {
  var input = $(this);
  input.setMask(input.data('mask'));
});
$('#BIRTHDATE').inputmask({
  mask: "2/1/y",
  placeholder: "mm/dd/yyyy",
  alias: "date",
  hourFormat: "24"
});
$('#HIREDDATE').inputmask({
  mask: "2/1/y",
  placeholder: "mm/dd/yyyy",
  alias: "date",
  hourFormat: "24"
});
$('.date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
  startDate : '01/01/1950', 
  language:  'en',
  weekStart: 1,
  todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1, 
  startView: 2,
  minView: 2,
  forceParse: 0 
});
</script>
</html>
<!--
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard." name="description">
        <meta content="Spruko Technologies Private Limited" name="author">
        <meta name="keywords" content="admin dashboard, dashboard ui, backend, admin panel, admin template, dashboard template, admin, bootstrap, laravel, laravel admin panel, php admin panel, php admin dashboard, laravel admin template, laravel dashboard, laravel admin panel">
        <title>Dayone - Multipurpose Admin &amp; Dashboard Template</title>
        <link rel="icon" href="https://laravel.spruko.com/dayone/ltr/assets/images/brand/favicon.ico" type="image/x-icon">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/css/style.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/css/dark.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/css/skin-modes.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/plugins/animated/animated.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/css/sidemenu.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/plugins/icons/icons.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/plugins/sidebar/sidebar.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/plugins/select2/select2.min.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/plugins/notify/css/notifIt.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/plugins/datatable/responsive.bootstrap4.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://laravel.spruko.com/dayone/ltr/assets/plugins/summernote/summernote-bs4.css">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/plugins/modal-datepicker/datepicker.css" rel="stylesheet">
        <link rel="stylesheet" href="https://laravel.spruko.com/dayone/ltr/assets/plugins/rating/css/ratings.css">
        <link rel="stylesheet" href="https://laravel.spruko.com/dayone/ltr/assets/plugins/rating/css/rating-themes.css">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/switcher/css/switcher.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dayone/ltr/assets/switcher/demo.css" rel="stylesheet">
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
    </head>
    <body class="app sidebar-mini sidebar-gone" id="index1">
        <div id="global-loader" style="display: none;">
            <img src="https://laravel.spruko.com/dayone/ltr/assets/images/svgs/loader.svg" alt="loader">
        </div>
        <div class="page">
            <div class="page-main is-expanded">
                <?php
                    $user = New User();
                    $singleuser = $user->single_user($_SESSION['ADMIN_USERID']);
                ?>
                <aside class="app-sidebar">
                    <div class="app-sidebar__logo">
                        <a class="header-brand" href="<?php echo web_root;?>/admin/">
                            <img src="https://laravel.spruko.com/dayone/ltr/assets/images/brand/logo.png" class="header-brand-img desktop-lgo" alt="Dayonelogo">
                            <img src="https://laravel.spruko.com/dayone/ltr/assets/images/brand/logo-white.png" class="header-brand-img dark-logo" alt="Dayonelogo">
                            <img src="https://laravel.spruko.com/dayone/ltr/assets/images/brand/favicon.png" class="header-brand-img mobile-logo" alt="Dayonelogo">
                            <img src="https://laravel.spruko.com/dayone/ltr/assets/images/brand/favicon1.png" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
                        </a>
                    </div>
                    <div class="app-sidebar3 ps ps--active-y is-expanded">
                        <div class="app-sidebar__user active">
                            <div class="dropdown user-pro-body text-center">
                                <div class="user-pic">
                                    <img src="<?php echo web_root.'admin/user/'. $singleuser->PICLOCATION;?>" alt="user-img" class="avatar-xxl rounded-circle mb-1">
                                </div>
                                <div class="user-info">
                                    <h5 class=" mb-2"><?php echo $singleuser->FULLNAME; ?></h5>
                                    <span class="text-muted app-sidebar__user-name text-sm">SEUAT</span>
                                </div>
                            </div>
                        </div>
                        <ul class="side-menu open">
                            <li class="side-item side-item-category mt-4 ">Dashboards</li>
                            <li class="slide <?php echo (currentpage() == 'index.php') ? "active" : false;?>">
                                <a class="side-menu__item" data-toggle="slide" href="<?php echo web_root ;?>admin/">
                                    <i data-feather="home" class="sidemenu_icon"></i>
                                    <span class="side-menu__label">Dashboard</span>
                                    <i class="angle fa fa-angle-right"></i>
                                </a>   
                            </li>
                            <li class="slide <?php echo (currentpage() == 'company') ? "active" : false;?>">
                                <a class="side-menu__item" data-toggle="slide" href="<?php echo web_root ;?>admin/company/">
                                    <i data-feather="user" class="sidemenu_icon"></i>
                                    <span class="side-menu__label">Empresa</span><i class="angle fa fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="slide <?php echo (currentpage() == 'vacancy') ? "active" : false;?>">
                                <a class="side-menu__item" data-toggle="slide" href="<?php echo web_root ;?>admin/vacancy/">
                                    <i data-feather="user" class="sidemenu_icon"></i>
                                    <span class="side-menu__label">Vacantes</span><i class="angle fa fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="slide <?php echo (currentpage() == 'employee') ? "active" : false;?>">
                                <a class="side-menu__item" data-toggle="slide" href="<?php echo web_root ;?>admin/employee/">
                                    <i data-feather="user" class="sidemenu_icon"></i>
                                    <span class="side-menu__label">Empleadores</span><i class="angle fa fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="slide <?php echo (currentpage() == 'applicants') ? "active" : false;?>">
                                <a class="side-menu__item" data-toggle="slide" href="<?php echo web_root ;?>admin/applicants/">
                                    <i data-feather="user" class="sidemenu_icon"></i>
                                    <span class="side-menu__label">Aplicaciones</span>
                                    <span class="label label-primary pull-right">
                                        <?php
                                            $sql = "SELECT count(*) as 'APPL' FROM `t_empleos_aplicados` WHERE `PENDINGAPPLICATION`=1";
                                            $mydb->setQuery($sql);
                                            $pending = $mydb->loadSingleResult();
                                            echo $pending->APPL;
                                        ?>
                                    </span>
                                </a>
                            </li>
                            <li class="slide <?php echo (currentpage() == 'employee') ? "active" : false;?>">
                                <a class="side-menu__item" data-toggle="slide" href="<?php echo web_root ;?>admin/employee/">
                                    <i data-feather="user" class="sidemenu_icon"></i>
                                    <span class="side-menu__label">Categoria</span><i class="angle fa fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="slide <?php echo (currentpage() == 'employee') ? "active" : false;?>">
                                <a class="side-menu__item" data-toggle="slide" href="<?php echo web_root ;?>admin/employee/">
                                    <i data-feather="user" class="sidemenu_icon"></i>
                                    <span class="side-menu__label">Administracion de usuarios</span><i class="angle fa fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="side-item side-item-category">Apps</li>
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#">
                                <i data-feather="server" class="sidemenu_icon"></i>
                                <span class="side-menu__label">Dashboard 3</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="https://laravel.spruko.com/dayone/ltr/rating " class="slide-item"> menu3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </aside>
                <div class="app-content main-content">
                    <div class="side-app">
                        <div class="app-header header">
                            <div class="container-fluid">
                                <div class="d-flex">
                                    <a class="header-brand" href="https://laravel.spruko.com/dayone/ltr/index ">
                                        <img src="https://laravel.spruko.com/dayone/ltr/assets/images/brand/logo.png" class="header-brand-img desktop-lgo" alt="Dayonelogo">
                                        <img src="https://laravel.spruko.com/dayone/ltr/assets/images/brand/logo-white.png" class="header-brand-img dark-logo" alt="Dayonelogo">
                                        <img src="https://laravel.spruko.com/dayone/ltr/assets/images/brand/favicon.png" class="header-brand-img mobile-logo" alt="Dayonelogo">
                                        <img src="https://laravel.spruko.com/dayone/ltr/assets/images/brand/favicon1.png" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
                                    </a>
                                    <div class="app-sidebar__toggle" data-toggle="sidebar">
                                        <a class="open-toggle" href="#">
                                            <i data-feather="menu"></i>
                                        </a>
                                        <a class="close-toggle" href="#">
                                            <i data-feather="x"></i>

                                        </a>
                                    </div>
                                    <div class="mt-0">
                                        <form class="form-inline">
                                            <div class="search-element">
                                                <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                                                <button class="btn btn-primary-color">
                                                    <i data-feather="search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="d-flex order-lg-2 my-auto ml-auto">
                                        <a class="nav-link my-auto icon p-0 nav-link-lg d-md-none navsearch" href="#" data-toggle="search">
                                            <i data-feather="search" class="search-icon header-icon"></i>

                                        </a>
                                        <div class="dropdown header-fullscreen">
                                            <a class="nav-link icon full-screen-link">
                                                <i data-feather="maximize" class="fullscreen-button fullscreen header-icons"></i>
                                                <i data-feather="maximize" class="fullscreen-button exit-fullscreen header-icons"></i>

                                            </a>
                                        </div>              
                                        <div class="dropdown profile-dropdown">
                                            <a href="#" class="nav-link pr-1 pl-0 leading-none" data-toggle="dropdown">
                                                <span>
                                                    <img src="<?php echo web_root.'admin/user/'. $singleuser->PICLOCATION;?>" alt="img" class="avatar avatar-md bradius">
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                                                <div class="p-3 text-center border-bottom">
                                                    <a href="#" class="text-center user pb-0 font-weight-bold"><?php echo $singleuser->FULLNAME; ?></a>
                                                    <p class="text-center user-semi-title">SEUAT</p>
                                                </div>
                                                <a class="dropdown-item d-flex" href="<?php echo web_root.'admin/user/index.php?view=view&id='.$_SESSION['ADMIN_USERID'] ;?>">
                                                    <i data-feather="user" class="mr-3 fs-16 my-auto"></i>
                                                    <div class="mt-1">Perfil</div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="<?php echo web_root ;?>admin/logout.php">
                                                    <i data-feather="power" class="mr-3 fs-16 my-auto"></i>
                                                    <div class="mt-1">Salir</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div> 
                            <?php 
                                check_message();
                                require_once $content; 
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                            Copyright © 2022 <a href="#">CambaMx</a>. Diseñado por <a href="#">Codersof</a> Todos los derechos reservados.
                        </div>
                    </div>
                </div>
            </footer>
            <div class="modal fade" id="changepasswordnmodal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Change Password</h5>
                            <button class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control" placeholder="password" value="">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" placeholder="password" value="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
                            <a href="#" class="btn btn-primary">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#top" id="back-to-top" style="display: none;"><span class="feather feather-chevrons-up"></span></a>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/moment/moment.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/jquery/jquery.min.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/bootstrap/popper.min.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/othercharts/jquery.sparkline.min.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/circle-progress/circle-progress.min.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/sidemenu/sidemenu.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/p-scrollbar/p-scrollbar.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/p-scrollbar/p-scroll1.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/sidebar/sidebar.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/select2/select2.full.min.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/notify/js/notifIt.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/modal-datepicker/datepicker.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/datatable/dataTables.responsive.min.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/datatable/responsive.bootstrap4.min.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/summernote/summernote-bs4.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/rating/js/jquery.barrating.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/plugins/rating/js/custom-ratings.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/js/task/task-profile.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/js/custom.js"></script>
        <script src="https://laravel.spruko.com/dayone/ltr/assets/switcher/js/switcher.js"></script>
        <div class="overlay"></div>
        <script>
            feather.replace()
        </script>
    </body>
</html>-->