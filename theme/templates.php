 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Chambamx / <?php echo $title;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="http://chambamx.com" />
        <!--<link href="<?php echo web_root; ?>plugins/home-plugins/css/bootstrap-3.1.0.min.css" rel="stylesheet" />-->
        <link href="<?php echo web_root; ?>plugins/home-plugins/css/bootstrap-5.0.0-beta1.css" rel="stylesheet" />
        <link href="<?php echo web_root; ?>plugins/home-plugins/css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
        <link href="<?php echo web_root; ?>plugins/home-plugins/css/flexslider.css" rel="stylesheet" /> 
        <link href="<?php echo web_root; ?>plugins/home-plugins/css/style.css" rel="stylesheet" />
        <link href="<?php echo web_root; ?>plugins/home-plugins/css/tiny-slider.css" rel="stylesheet" />
        <link href="<?php echo web_root; ?>plugins/home-plugins/css/LineIcons.2.0.css" rel="stylesheet" />
        <link href="<?php echo web_root; ?>plugins/home-plugins/css/glinhtbox.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo web_root;?>plugins/font-awesome/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="<?php echo web_root;?>plugins/dataTables/jquery.dataTables.min.css"> 
        <link rel="stylesheet" href="<?php echo web_root;?>plugins/dataTables/jquery.dataTables_themeroller.css"> 
        <link href="<?php echo web_root; ?>plugins/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo web_root; ?>plugins/datepicker/datepicker3.css" rel="stylesheet" media="screen">
        <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper" class="home-page">
            <header class="header style4 other-page">
                <div class="navbar-area sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">      
                                <nav class="navbar navbar-expand-lg">
                                    <a class="navbar-brand logo" href="<?php echo web_root; ?>index.php">
                                        <img class="logo1" src="<?php echo web_root ?>plugins/home-plugins/img/logo_chambamx.png" alt="Logo">
                                    </a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="toggler-icon"></span>
                                        <span class="toggler-icon"></span>
                                        <span class="toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                        <ul id="nav" class="navbar-nav ml-auto">
                                            <li class="nav-item">
                                                <a id="nav-inicio" class="active" href="<?php echo web_root; ?>index.php">Inicio</a>
                                            </li>
                                            <li class="nav-item"><a href="<?php echo web_root; ?>index.php?q=advancesearch">Buscar empleos</a>
                                                <ul class="sub-menu">
                                                    <li class="<?php  if(isset($_GET['q'])) { if($_GET['q']=='advancesearch'){ echo 'active'; }else{ echo ''; }}  ?>"><a href="<?php echo web_root; ?>index.php?q=advancesearch"">Busqueda avanzada</a></li>
                                                    <li><a href="<?php echo web_root; ?>index.php?q=search-company">Empleos por compañia</a></li>
                                                    <li><a href="<?php echo web_root; ?>index.php?q=search-function">Empleos por funcion</a></li>
                                                    <li><a href="<?php echo web_root; ?>index.php?q=search-jobtitle">Empleos por nombres</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item <?php  if(isset($_GET['q'])) { if($_GET['q']=='category'){ echo 'active'; }else{ echo ''; }}  ?>"><a href="#">Empleos populares</a>
                                                <ul class="sub-menu">
                                                <?php 
                                                    $sql = "SELECT * FROM `t_categoria` LIMIT 10";
                                                    $mydb->setQuery($sql);
                                                    $cur = $mydb->loadResultList();
                                                    foreach ($cur as $result) {
                                                        if (isset($_GET['search'])) {
                                                            if ($result->nombre_categoria==$_GET['search']) {
                                                                $viewresult = '<li class="active"><a href="'.web_root.'index.php?q=category&search='.$result->nombre_categoria.'">'.'Empleos de'.$result->nombre_categoria.'</a></li>';
                                                            }else{
                                                                $viewresult = '<li><a href="'.web_root.'index.php?q=category&search='.$result->nombre_categoria.'">'.'Empleos de'.$result->nombre_categoria.'</a></li>';
                                                            }
                                                        }else{
                                                            $viewresult = '<li><a href="'.web_root.'index.php?q=category&search='.$result->nombre_categoria.'">'.'Empleos de'.$result->nombre_categoria.'</a></li>';
                                                        } 
                                                        echo $viewresult;
                                                    }
                                                ?> 
                                                </ul>
                                            </li>
                                            <!--<li class="nav-item "<?php  if(isset($_GET['q'])) { if($_GET['q']=='company'){ echo 'active'; }else{ echo ''; }}  ?>"><a  href="<?php echo web_root; ?>index.php?q=company">Compañia</a>
                                            </li>-->
                                            <li class="nav-item "<?php  if(isset($_GET['q'])) { if($_GET['q']=='employer'){ echo 'active'; }else{ echo ''; }}  ?>"><a  href="<?php echo web_root; ?>index.php?q=employer">Empleadores</a>
                                            </li>
                                            <!--<li class="nav-item <?php  if(isset($_GET['q'])) { if($_GET['q']=='hiring'){ echo 'active'; }else{ echo ''; }} ?>"><a  href="<?php echo web_root; ?>index.php?q=hiring">Contratando </a>-->
                                            <li class="nav-item <?php  if(isset($_GET['q'])) { if($_GET['q']=='About'){ echo 'active'; }else{ echo ''; }}  ?>"><a  href="<?php echo web_root; ?>index.php?q=About">Sobre nosotros </a>
                                            <li class="nav-item <?php  if(isset($_GET['q'])) { if($_GET['q']=='Contact'){ echo 'active'; }else{ echo ''; }}  ?>"><a href="<?php echo web_root; ?>index.php?q=Contact">Contacto </a>
                                            </li>
                                            <?php
                                                if(isset($_SESSION['id_candidato'])){
                                                    $sql = "SELECT count(*) as 'numero_notificacion' FROM `t_empleos` ORDER BY `fecha_publicacion` DESC";
                                                    $mydb->setQuery($sql);
                                                    $showNotif = $mydb->loadSingleResult();
                                                    $notif =isset($showNotif->numero_notificacion) ? $showNotif->numero_notificacion : 0;
                                                    $applicant = new Applicants();
                                                    $appl  = $applicant->single_applicant($_SESSION['id_candidato']);
                                                    $sql ="SELECT count(*) as 'COUNT' FROM `t_empleos_aplicados` WHERE `aplicacion_pendiente`=0 AND `visto`=0 AND `id_candidato`='{$appl->id}'";
                                                    $mydb->setQuery($sql);
                                                    $showMsg = $mydb->loadSingleResult();
                                                    $msg =isset($showMsg->COUNT) ? $showMsg->COUNT : 0; 
                                                    echo '<li class="nav-item"><a class="nav-link " href="#"><img src="'.web_root.'applicant/'.$appl->foto_candidato.'" alt="Avatar"> '. $appl->nombre. ' '.$appl->apellido_paterno .'<i class="fa fa-caret-down"></i></a>
                                                        <ul class="sub-menu">
                                                        <li><a href="'.web_root.'applicant/"><i class="fa fa-user"></i> Perfil</a></li>
                                                        <li><a href="'.web_root.'logout.php"><i class="fa fa-sign-out"> </i> Salir</a></li>
                                                        </ul>
                                                        </li>';
                                                }else{ ?>
                                                     
                                                <?php }
                                            ?>   
                                        </ul>
                                 

                                    </div>
                                    <div class="button">
                                        <?php
                                            if(isset($_SESSION['id_candidato'])){
                                                
                                            }else{ ?>
                                                <a href="javacript:" data-toggle="modal" data-target="#login" class="login"><i class="lni lni-lock-alt"></i>Login</a>
                                                <a href="<?php echo web_root; ?>index.php?q=register" class="btn">Registrarse</a>      
                                            <?php }
                                        ?>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </header>
        <body>
            <br><br><br><br>
        </body>
<?php
    if (!isset($_SESSION['id_candidato'])) { 
        include("login.php");
    }
?>
<?php
    if (isset($_GET['q'])) {
        echo '<section id="inner-headline"><div class="container"><div class="row"><div class="col-lg-12"><h2 class="pageTitle">'.$title.'</h2></div></div></div></section>';
    }
    require_once $content;
?>   
        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-12">
                            <div class="download-text">
                                <h3>Descarga nuestra App</h3>
                                <p>Descarga nuestra app<br> para que puedas recibir notificaciones sobre empleos y reguir tus procesos de aplicacion a tus empleos</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="download-button">
                                <div class="button">
                                    <a class="btn" href="https://www.apple.com/mx/app-store/" target="_blank"><i class="lni lni-apple"></i> App Store</a>
                                    <a class="btn" href="https://play.google.com/store" target="_blank"><i class="lni lni-play-store"></i> Google Play</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">    
                            <div class="f-about single-footer">
                                <div class="logo">
                                    <a href="#"><img src="<?php echo web_root ?>plugins/home-plugins/img/logo_chambamx.png" alt="Logo"></a>
                                </div>
                                <p>Ponte en contacto con nosotros a alguno de los siguientes medios</p>
                                <ul class="contact-address">
                                    <li><span>Direccion:</span> Calle 25 , Centro, Tuxtla Gtz</li>
                                    <li><span>Email:</span> contacto@chamba.com</li>
                                    <li><span>Telefono:</span> 9612168345</li>
                                </ul>
                                <div class="footer-social">
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="lni lni-facebook-original"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="https://www.linkedin.com/home/" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="https://www.pinterest.com.mx/" target="_blank"><i class="lni lni-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">    
                            <div class="single-footer f-link">
                                <h3>Candidatos</h3>
                                <ul>
                                    <li><a href="#">Perfil</a></li>
                                    <li><a href="#">Subir CV</a></li>
                                    <li><a href="#">Empleos destacados</a></li>
                                    <li><a href="#">Empleos urgentes</a></li>
                                    <li><a href="#">Buscar empleos</a></li>
                                </ul>
                            </div>    
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">    
                            <div class="single-footer f-link">
                                <h3>Empleadores</h3>
                                <ul>
                                    <li><a href="#">Publicar empleo</a></li>
                                    <li><a href="#">Buscar candidatos</a></li>
                                    <li><a href="#">Membresias</a></li>
                                </ul>
                            </div>    
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-footer newsletter">
                                <h3>Susbribete a nuestro boletín</h3>
                                <p>Suscribete para recibir los últimos empleos publicados, candidatos ..</p>
                                <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                    <input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Su dirección de correo electrónico'" required="" type="email">
                                    <div class="button">
                                        <button class="btn">¡Suscríbase ahora!<span class="dir-part"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="left">
                            <p>Diseñado y desarrollado por<a href="https://codersof.com/" rel="nofollow" target="_blank">Codersof</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="right">
                            <ul>
                                <li><a href="#">Términos de Uso</a></li>
                                <li><a href="#">Políticas de Privacidad</a></li>
                                <li><a href="#">Freguntas Frecuentes</a></li>
                                <li><a href="">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    </div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.js"></script>
<script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.easing.1.3.js"></script>
<!--<script src="<?php echo web_root; ?>plugins/home-plugins/js/bootstrap.min.js"></script>-->
<script src="<?php echo web_root; ?>plugins/home-plugins/js/bootstrap-5.1.min.js"></script>
 

<script type="text/javascript" src="<?php echo web_root; ?>plugins/dataTables/dataTables.bootstrap.min.js" ></script>  
<script src="<?php echo web_root; ?>plugins/datatables/jquery.dataTables.min.js"></script> 

<script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.extensions.js"></script> 

<script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.fancybox-media.js"></script>  
<script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.flexslider.js"></script>
<script src="<?php echo web_root; ?>plugins/home-plugins/js/animate.js"></script>


<!-- Vendor Scripts -->
<script src="<?php echo web_root; ?>plugins/home-plugins/js/modernizr.custom.js"></script>
<script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.isotope.min.js"></script>
<script src="<?php echo web_root; ?>plugins/home-plugins/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo web_root; ?>plugins/home-plugins/js/animate.js"></script>
<script src="<?php echo web_root; ?>plugins/home-plugins/js/custom.js"></script> 
<!-- <script src="<?php echo web_root; ?>plugins/paralax/paralax.js"></script>  -->

 <script type="text/javascript">
   
     $(function () {
        $('#example').DataTable();

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


     $("#btnlogin").click(function(){
        var username = document.getElementById("user_email");
        var pass = document.getElementById("user_pass");

        // alert(username.value)
        // alert(pass.value)
        if(username.value=="" && pass.value==""){   
          $('#loginerrormessage').fadeOut(); 
                $('#loginerrormessage').fadeIn();  
                $('#loginerrormessage').css({ 
                        "background" :"#EF9A9A",
                        "color"      : "#fff",
                        "padding"    : "5px;",
                        "font-weight":  "bold"
                    }); 
          $("#loginerrormessage").html("Usuario o contraseña invalido!");
          //  $("#loginerrormessage").css(function(){ 
          //   "background-color" : "red";
          // });
        }else{

          $.ajax({    //create an ajax request to load_page.php
              type:"POST",  
              url: "process.php?action=login",    
              dataType: "text",  //expect html to be returned  
              data:{USERNAME:username.value,PASS:pass.value},               
              success: function(data){   
                // alert(data);
                $('#loginerrormessage').fadeOut(); 
                $('#loginerrormessage').fadeIn();  
                $('#loginerrormessage').css({ 
                        "background" :"red",
                        "color"      : "#fff",
                        "padding"    : "5px;"
                    }); 
               $('#loginerrormessage').html(data);   
              } 
              }); 
          }
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
 
</body>
</html>
 