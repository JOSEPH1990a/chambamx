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
                    $sql = "SELECT * FROM `t_compania` c,`t_empleos` j WHERE c.`COMPANYID`=j.`COMPANYID` AND CATEGORY LIKE '%" . $category ."%' ORDER BY DATEPOSTED DESC" ;
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) { ?>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-job wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s;">
                                <div class="job-image">
                                    <img src="http://localhost:8888/chamba/Assets/images/jobs/img1.png" alt="#">
                                </div>
                                <div class="job-content">
                                    <h4><a href="#<?php echo web_root.'index.php?q=viewjob&search='.$result->JOBID;?>""><?php echo $result->OCCUPATIONTITLE ;?></a></h4>
                                    <p><?php echo $result->JOBDESCRIPTION ;?></p>
                                    <ul>
                                        <li><i class="lni lni-website"></i><a href="#"><?php echo  $result->COMPANYNAME ?></a></li>
                                        <li><i class="lni lni-dollar"></i>Google Ac</li>
                                        <li><i class="lni lni-map-marker"></i><?php echo  $result->COMPANYADDRESS ?></li>
                                        <li><i class="fp-ht-bed"></i>Required No. of Employee's : <?php echo $result->REQ_NO_EMPLOYEES; ?></li>
                                        <li><i class="fp-ht-food"></i>Salary : <?php echo number_format($result->SALARIES,2);  ?></li>
                                        <li><i class="fa fa-sun-"></i>Duration of Employment : <?php echo $result->DURATION_EMPLOYEMENT; ?></li>
                                        <li><i class="fp-ht-tv"></i>Prefered Sex : <?php echo $result->PREFEREDSEX; ?></li>
                                        <li><i class="fp-ht-computer"></i>Sector of Vacancy : <?php echo $result->SECTOR_VACANCY; ?></li>

                                        <li><?php echo $result->QUALIFICATION_WORKEXPERIENCE ;?></li>



                                    </ul>
                                    <div class="col-sm-2"> <a href="<?php echo web_root; ?>index.php?q=apply&job=<?php echo $result->JOBID;?>&view=personalinfo" class="btn btn-main btn-next-tab">Applicar ahora !</a></div>
                                    fecha publicación : <?php echo date_format(date_create($result->DATEPOSTED),'M d, Y'); ?>

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