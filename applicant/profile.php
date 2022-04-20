<?php   
    $view = isset($_GET['view']) ? $_GET['view'] :"";  
	  $appl = New Applicants();
	  $applicant = $appl->single_applicant($_SESSION['id_candidato']); 
  ?>
  <style type="text/css">
/*    #image-container {
      width: 230px;
    }*/
    .panel-body img{
      width: 100%;
      height: 50%;
    }
    .panel-body img:hover{
      cursor: pointer;
    }
  </style>

<div class="resume section">
    <div class="container">
        <div class="resume-inner">
            <div class="row">    
                <div class="col-lg-4 col-12">
                    <div class="dashbord-sidebar">
                        <ul>
                            <li class="heading">Perfil de usuario</li>
                            <li><a class="<?php echo ($view=='myprofile' || $view == '') ? 'active': '';?>" href="<?php echo web_root.'applicant/index.php?view=myprofile'; ?>"><i class="lni lni-clipboard"></i> Mi perfil</a></li>
                            <li><a class="<?php echo ($view=='accounts') ? 'active': '';?>" href="<?php echo web_root.'applicant/index.php?view=accounts'; ?>"><i class="lni lni-clipboard"></i> Mi Curriculum</a></li>
                            <li><a class="<?php echo ($view=='appliedjobs') ? 'active': '';?>" href="<?php echo web_root.'applicant/index.php?view=appliedjobs'; ?>"><i class="lni lni-bookmark"></i> Empleos Aplicados</a></li>
                            <li><a class="<?php echo ($view=='notification') ? 'active': '';?>" href="<?php echo web_root.'applicant/index.php?view=notification'; ?>"><i class="lni lni-alarm"></i> Notificaciones <span class="notifi"><?php echo $notif; ?></span></a></li>
                            <li><a class="<?php echo ($view=='message') ? 'active': '';?>" href="<?php echo web_root.'applicant/index.php?view=message'; ?>"><i class="lni lni-envelope"></i> Mensajes <span class="notifi"><?php echo isset($showMsg->COUNT) ? $showMsg->COUNT : 0;?></span></a></li>
                            <!--<li><a class="<?php echo ($view=='admoncv') ? 'active': '';?>" href="<?php echo web_root.'applicant/index.php?view=admoncv'; ?>"><i class="lni lni-files"></i> Administrar Curriculum</a></li>
                            <li><a class="<?php echo ($view=='alerts') ? 'active': '';?>" href="<?php echo web_root.'applicant/index.php?view=alerts'; ?>"><i class="lni lni-briefcase"></i> Alertas</a></li>
                            <li><a class="<?php echo ($view=='changepsw') ? 'active': '';?>" href="<?php echo web_root.'applicant/index.php?view=changepsw'; ?>"><i class="lni lni-lock"></i> Cambiar Contraseña</a></li>
                            <li><a class="<?php echo ($view=='logout') ? 'active': '';?>" href="<?php echo web_root.'applicant/index.php?view=logout'; ?>"><i class="lni lni-upload"></i> Salir</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="inner-content">                        
                        <?php
                            check_message();  
                            check_active(); 
                        ?>
                        <?php 
                            switch ($view) {
                                case 'message':
                                    require_once("message.php");
                                    break;
                                case 'myprofile':
                                    require_once("myprofile.php");
                                    break;
                                case 'notification':
                                    require_once("notification.php");
                                    break;
                                case 'appliedjobs':
                                    require_once("appliedjobs.php");
                                    break;
                                case 'accounts':
                                    require_once("accounts.php");
                                    break;
                                default:
                                    require_once("myprofile.php");
                                    break;
                            }
                        ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  
    unset($_SESSION['appliedjobs']);
    unset($_SESSION['accounts']); 
?>
 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">×</button>
                <h4 class="modal-title" id="myModalLabel">Escoger imágen.</h4>
            </div>
            <form action="controller.php?action=photos" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="rows">
                            <div class="col-md-12">
                                <div class="rows">
                                    <div class="col-md-8">
                                        <input name="MAX_FILE_SIZE" type="hidden" value="1000000"> <input id="photo" name="photo" type="file">
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type="button">Cerrar</button> 
                    <button  class="btn btn-primary" name="savephoto" type="submit">Subir foto</button>
                </div>
            </form>
        </div>
    </div>
</div>