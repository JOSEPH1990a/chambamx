<section id="content">
    <div class="container content"> 
        <section class="find-job section">
            <div class="container">
                <div class="single-head">
                    <div class="row">
                    <?php
                    if (isset($_GET['search'])) {
                        $category = $_GET['search'];
                    }else{
                        $category = '';
                    }
                    $sql = "SELECT j.id,j.titulo_empleo,j.descripcion_empleo,c.nombre_compania,c.direccion_compania,j.num_empleados_requeridos,j.salario,j.duracion_empleo,j.preferencia_sexo,j.sector_vacante,j.anios_experiencia,j.fecha_publicacion FROM `t_compania` c,`t_empleos` j WHERE c.`id`=j.`id_compania` AND categoria LIKE '%" . $category ."%' ORDER BY fecha_publicacion DESC" ;
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {?>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-job wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s;">
                                <div class="job-image">
                                    <img src="http://localhost:8888/chamba/Assets/images/jobs/img1.png" alt="#">
                                </div>
                                <div class="job-content">
                                    <h4><a href="#<?php echo web_root.'index.php?q=viewjob&search='.$result->id;?>""><?php echo $result->titulo_empleo ;?></a></h4>
                                    <p><?php echo $result->descripcion_empleo ;?></p>
                                    <ul>
                                        <li><i class="lni lni-website"></i><a href="#"><?php echo  $result->nombre_compania ?></a></li>
                                        <li><i class="lni lni-dollar"></i>Google Ac</li>
                                        <li><i class="lni lni-map-marker"></i><?php echo  $result->direccion_compania ?></li>
                                        <li><i class="fp-ht-bed"></i>Required No. of Employee's : <?php echo $result->num_empleados_requeridos; ?></li>
                                        <li><i class="fp-ht-food"></i>Salary : <?php echo number_format($result->salario,2);  ?></li>
                                        <li><i class="fa fa-sun-"></i>Duration of Employment : <?php echo $result->duracion_empleo; ?></li>
                                        <li><i class="fp-ht-tv"></i>Prefered Sex : <?php echo $result->preferencia_sexo; ?></li>
                                        <li><i class="fp-ht-computer"></i>Sector of Vacancy : <?php echo $result->sector_vacante; ?></li>

                                        <li><?php echo $result->anios_experiencia ;?></li>



                                    </ul>
                                    <div class="col-sm-2"> <a href="<?php echo web_root; ?>index.php?q=apply&job=<?php echo $result->id;?>&view=personalinfo" class="btn btn-main btn-next-tab">Applicar ahora !</a></div>
                                    fecha publicación : <?php echo date_format(date_create($result->fecha_publicacion),'M d, Y'); ?>

                                </div>
                                <div class="job-button">
                                    <ul>
                                        <li><a href="index.php?q=viewjob&amp;search=1">Ver oferta</a></li>
                                        <li><span>Remoto</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                    </div>  
                </div>
            </div>  
		</section>
    </div>
</section>