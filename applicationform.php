<section id="content">
  <div class="container content">     
 <?php
if (isset($_GET['search'])) {
# code...
$jobid = $_GET['search'];
}else{
$jobid = '';

}
$sql = "SELECT j.id,j.titulo_empleo,j.num_empleados_requeridos,j.salario,j.duracion_empleo,j.preferencia_sexo,j.sector_vacante,j.anios_experiencia,j.descripcion_empleo,c.nombre_compania,c.direccion_compania,j.fecha_publicacion FROM `t_compania` c,`t_empleos` j WHERE c.`id`=j.`id_compania` AND j.`id` LIKE '%" . $jobid ."%' ORDER BY fecha_publicacion DESC" ;
$mydb->setQuery($sql);
$result = $mydb->loadSingleResult();
?> 
 <p> <?php check_message();?></p>     
<?php 
if (isset($_SESSION['APPLICANTID'])) {
?>
    <div class="col-sm-12">
                   <div class="row">
                    <h2 class=" " >Job Details</h2>
                     <div class="panel">
                         <div class="panel-header">
                              <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;"><a href="<?php echo web_root.'index.php?q=viewjob&search='.$result->id;?>"><?php echo $result->titulo_empleo ;?></a> 
                              </div> 
                         </div>
                         <div class="panel-body">
                                  <div class="row contentbody">
                                        <div class="col-sm-6">
                                            <ul>
                                                <li><i class="fp-ht-bed"></i>Required No. of Employee's : <?php echo $result->num_empleados_requeridos; ?></li>
                                                <li><i class="fp-ht-food"></i>Salary : <?php echo number_format($result->salario,2);  ?></li>
                                                <li><i class="fa fa-sun-"></i>Duration of Employment : <?php echo $result->duracion_empleo; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul> 
                                                <li><i class="fp-ht-tv"></i>Prefered Sex : <?php echo $result->preferencia_sexo; ?></li>
                                                <li><i class="fp-ht-computer"></i>Sector of Vacancy : <?php echo $result->sector_vacante; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12">
                                            <p>Qualification/Work Experience :</p>
                                             <ul style="list-style: none;"> 
                                                <li><?php echo $result->anios_experiencia ;?></li> 
                                            </ul> 
                                        </div>
                                        <div class="col-sm-12"> 
                                            <p>Job Description:</p>
                                            <ul style="list-style: none;"> 
                                                 <li><?php echo $result->descripcion_empleo ;?></li> 
                                            </ul> 
                                         </div>
                                        <div class="col-sm-12">
                                            <p>Employer :  <?php echo  $result->nombre_compania; ?></p> 
                                            <p>Location :  <?php echo  $result->direccion_compania; ?></p>
                                        </div>
                                    </div>
                         </div>
                         <div class="panel-footer">
                              Date Posted :  <?php echo date_format(date_create($result->fecha_publicacion),'M d, Y'); ?>
                         </div>
                     </div>
                     
                       
                </div>
            </div> 
             <form class="form-horizontal span6 " action="process.php?action=submitapplication&JOBID=<?php echo $result->id; ?>"  enctype="multipart/form-data"  method="POST">
            <div class="col-sm-12">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-header">
                            <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">Attach your Resume here.
                                <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
                            </div>
                        </div>
                        <div class="panel-body"> 
                            <label class="col-md-2" for="picture" style="padding: 0;margin: 0;">Attachtment File:</label> 
                            <div class="col-md-10" style="padding: 0;margin: 0;">
                                <input id="picture" name="picture" type="file">
                                <input name="MAX_FILE_SIZE" type="hidden" value="1000000"> 
                            </div> 
                        </div>
                    </div> 
                </div> 
            </div>
           <div class="form-group">
            <div class="col-md-12"> 
                 <button class="btn btn-primary btn-sm pull-right" name="submit" type="submit" >Submit <span class="fa fa-arrow-right"></span></button>
              <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-left"></span>&nbsp;<strong>Back</strong></a> 
            </div>
           </div> 
        </form>
<?php }else{ ?>
  <form class="form-horizontal span6  wow fadeInDown" action="process.php?action=submitapplication&JOBID=<?php echo $result->id; ?>"  enctype="multipart/form-data"  method="POST">
			<div class="col-sm-8"> 
                <div class="row">
                    <h2 class=" ">Personal Info</h2>   
                        <?php require_once('applicantform.php') ?>   
                 </div>
			</div>
			<div class="col-sm-4">
				   <div class="row">
                    <h2 class=" " >Job Details</h2>
                     <div class="panel">
                         <div class="panel-header">
                              <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;"><a href="<?php echo web_root.'index.php?q=viewjob&search='.$result->id;?>"><?php echo $result->titulo_empleo ;?></a> 
                              </div> 
                         </div>
                         <div class="panel-body">
                                  <div class="row contentbody">
                                        <div class="col-sm-6">
                                            <ul>
                                                <li><i class="fp-ht-bed"></i>Required No. of Employee's : <?php echo $result->num_empleados_requeridos; ?></li>
                                                <li><i class="fp-ht-food"></i>Salary : <?php echo number_format($result->salario,2);  ?></li>
                                                <li><i class="fa fa-sun-"></i>Duration of Employment : <?php echo $result->duracion_empleo; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul> 
                                                <li><i class="fp-ht-tv"></i>Prefered Sex : <?php echo $result->preferencia_sexo; ?></li>
                                                <li><i class="fp-ht-computer"></i>Sector of Vacancy : <?php echo $result->sector_vacante; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12">
                                            <p>Qualification/Work Experience :</p>
                                             <ul style="list-style: none;"> 
                                                <li><?php echo $result->anios_experiencia ;?></li> 
                                            </ul> 
                                        </div>
                                        <div class="col-sm-12"> 
                                            <p>Job Description:</p>
                                            <ul style="list-style: none;"> 
                                                 <li><?php echo $result->descripcion_empleo ;?></li> 
                                            </ul> 
                                         </div>
                                        <div class="col-sm-12">
                                            <p>Employer :  <?php echo  $result->nombre_compania; ?></p> 
                                            <p>Location :  <?php echo  $result->direccion_compania; ?></p>
                                        </div>
                                    </div>
                         </div>
                         <div class="panel-footer">
                              Date Posted :  <?php echo date_format(date_create($result->fecha_publicacion),'M d, Y'); ?>
                         </div>
                     </div>
                     
                       
                </div>
			</div>
              <div class="col-sm-12">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-header">
                            <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">Attach your Resume here.
                            </div>
                        </div>
                        <div class="panel-body"> 
                            <label class="col-md-2" for="picture" style="padding: 0;margin: 0;">Attachtment File:</label> 
                            <div class="col-md-10" style="padding: 0;margin: 0;">
                                <input id="picture" name="picture" type="file">
                                <input name="MAX_FILE_SIZE" type="hidden" value="1000000"> 
                            </div> 
                        </div>
                    </div> 
                </div> 
            </div>
          <div class="form-group">
            <div class="col-md-12"> 
                 <button class="btn btn-primary btn-sm pull-right" name="submit" type="submit" >Submit <span class="fa fa-arrow-right"></span></button>
              <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-left"></span>&nbsp;<strong>Back</strong></a> 
            </div>
           </div>   
        </form> 
<?php } ?>
		</div> 
</section> 
  