<?php
    require_once("../include/initialize.php");
?>
<?php
    if(isset($_SESSION['ADMIN_USERID'])){
        redirect(web_root."admin/index.php");
    }
?>
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
    <head>
        <meta charset="utf-8">
        <title>Chambamx / Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="http://chambamx.com">
        <link href="/chambamx/plugins/home-plugins/css/bootstrap-5.0.0-beta1.css" rel="stylesheet">
        <link href="/chambamx/plugins/home-plugins/css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
        <link href="/chambamx/plugins/home-plugins/css/flexslider.css" rel="stylesheet"> 
        <link href="/chambamx/plugins/home-plugins/css/style.css" rel="stylesheet">
        <link href="/chambamx/plugins/home-plugins/css/tiny-slider.css" rel="stylesheet">
        <link href="/chambamx/plugins/home-plugins/css/LineIcons.2.0.css" rel="stylesheet">
        <link href="/chambamx/plugins/home-plugins/css/glinhtbox.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/chambamx/plugins/font-awesome/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="/chambamx/plugins/dataTables/jquery.dataTables.min.css"> 
        <link rel="stylesheet" href="/chambamx/plugins/dataTables/jquery.dataTables_themeroller.css"> 
        <link href="/chambamx/plugins/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
        <link href="/chambamx/plugins/datepicker/datepicker3.css" rel="stylesheet" media="screen">
        <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    </head>
    <body>        
        <section id="" class="contact-us section pb-auto" style="background-color:#FFF">
            <div class="container">
                <div class="d-flex justify-content-center" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="col-lg-4 col-4 contact-head">
                        <div class="col-12">
                            <div class="form-main">
                                <div class="text-center"><h3>Iniciar Sesión</h3><br></div>
                                <p><?php check_message(); ?></p>
                                <form class="form" method="post" action="">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input name="user_email" type="text" placeholder="Usuario" required="required">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input name="user_pass" type="text" placeholder="Password" required="required">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button"><br><br>
                                                <button type="submit" name="btnLogin" class="btn col-12">Iniciar Sesion</button>
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
    </body>
    <?php 
        if(isset($_POST['btnLogin'])){
            $email = trim($_POST['user_email']);
            $upass  = trim($_POST['user_pass']);
            $h_upass = sha1($upass);
            if ($email == '' OR $upass == '') {
                message("Invalid Username and Password!", "error");
                redirect("login.php");         
            } else {  
                $user = new User();
                $res = $user->userAuthentication($email, $h_upass);
                if ($res==true) { 
                    message("You logon as ".$_SESSION['ROLE'].".","success");
                    $_SESSION['ADMIN_USERID'] = $_SESSION['USERID'];
                    $_SESSION['ADMIN_FULLNAME'] = $_SESSION['FULLNAME'] ;
                    $_SESSION['ADMIN_USERNAME'] =$_SESSION['USERNAME'];
                    $_SESSION['ADMIN_ROLE'] = $_SESSION['ROLE'];
                    $_SESSION['ADMIN_PICLOCATION'] = $_SESSION['PICLOCATION'];
                    unset( $_SESSION['USERID'] );
                    unset( $_SESSION['FULLNAME'] );
                    unset( $_SESSION['USERNAME'] );
                    unset( $_SESSION['PASS'] );
                    unset( $_SESSION['ROLE'] );
                    unset($_SESSION['PICLOCATION']);
                    redirect(web_root."admin/index.php");
                }else{
                    message("La cuenta no existe ! Porfavor, contacte con el Administrador", "error");
                    redirect(web_root."admin/login.php"); 
                }
            }
        }
    ?> 
</html>
 


 


