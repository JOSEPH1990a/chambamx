<section id="content">
    <div class="container content">   
    <?php 
    if (isset($_GET['search'])) {
        $jobid = $_GET['search'];
    }else{
        $jobid = '';
    }
    $sql = "SELECT * FROM `t_compania` c,`t_empleos` j WHERE c.`COMPANYID`=j.`COMPANYID` AND JOBID LIKE '%" . $jobid ."%' ORDER BY DATEPOSTED DESC" ;
    $mydb->setQuery($sql);
    $cur = $mydb->loadResultList();
    foreach ($cur as $result) { ?> 
        <div class="job-details section">
            <div class="container">
                <div class="row mb-n5">
                    <div class="col-lg-8 col-12">
                        <div class="job-details-inner">
                            <div class="job-details-head row mx-0">
                                <div class="company-logo col-auto">
                                    <a href="#" style="border-radius: 4px; overflow: hidden;"><img src="assets/images/universal-image/job-details.png" alt="Company Logo"></a>
                                </div>
                                <div class="salary-type col-auto order-sm-3">
                                    <span class="salary-range"><?php echo number_format($result->SALARIES,2);  ?></span>
                                    <!--<span class="badge badge-success">Full Time</span>-->
                                </div>
                                <div class="content col">
                                    <h5 class="title"><?php echo $result->OCCUPATIONTITLE ;?> </h5>
                                    <ul class="meta">
                                        <li><strong class="text-primary"><a href="http://www.graygrids.com"><?php echo  $result->COMPANYNAME; ?></a></strong></li>
                                        <li><i class="lni lni-map-marker"></i> <?php echo  $result->COMPANYADDRESS; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="job-details-body">
                                <h6 class="mb-3">Job Description</h6>
                                <p><?php echo $result->JOBDESCRIPTION ;?></p>
                                <h6 class="mb-3 mt-4">Responsibilities</h6>
                                <ul>
                                    <!--<li>Proven work experienceas a web designer</li>
                                    <li>Demonstrable graphic design skills with a strong portfolio</li>
                                    <li>Proficiency in HTML, CSS and JavaScript for rapid prototyping</li>
                                    <li>Experience working in an Agile/Scrum development process</li>
                                    <li>Proven work experienceas a web designer</li>
                                    <li>Excellent visual design skills with sensitivity to user-system interaction</li>
                                    <li>Ability to solve problems creatively and effectively</li>
                                    <li>Proven work experienceas a web designer</li>
                                    <li>Up-to-date with the latest Web trends, techniques and technologies</li>
                                    <li>BS/MS in Human-Computer Interaction, Interaction Design or a Visual Arts subject</li>-->
                                </ul>
                                <h6 class="mb-3 mt-4">Education + Experience</h6>
                                <ul>
                                    <!--<li>Advanced degree or equivalent experience in graphic and web design</li>
                                    <li>3 or more years of professional design experience</li>
                                    <li>Direct response email experience</li>
                                    <li>Ecommerce website design experience</li>
                                    <li>Familiarity with mobile and web apps preferred</li>
                                    <li>Excellent communication skills, most notably a demonstrated ability to solicit and
                                    address creative and design feedback</li>
                                    <li>Must be able to work under pressure and meet deadlines while maintaining a positive
                                    attitude and providing exemplary customer service</li>
                                    <li>Ability to work independently and to carry out assignments to completion within
                                    parameters of instructions given, prescribed routines, and standard accepted
                                    practices</li>-->
                                </ul>
                                <h6 class="mb-3 mt-4">Benefits</h6>
                                <ul>
                                    <!--<li>Medical insurance</li>
                                    <li>Dental insurance</li>
                                    <li>Vision insurance</li>
                                    <li>Supplemental benefits (Short Term Disability, Cancer &amp; Accident).</li>
                                    <li>Employer-sponsored Basic Life &amp; AD&amp;D Insurance</li>
                                    <li>Employer-sponsored Long Term Disability</li>
                                    <li>Employer-sponsored Value Adds – Fresh Beanies</li>
                                    <li>401(k)with matching</li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="job-details-sidebar">
                            <div class="sidebar-widget">
                                <div class="inner">
                                    <div class="row m-n2 button">
                                        <div class="col-xl-auto col-lg-12 col-sm-auto col-12 p-2">
                                            <!--<a href="bookmarked.html" class="d-block btn"><i class="fa fa-heart-o mr-1"></i> Save Job</a>-->
                                        </div>
                                        <div class="col-xl-auto col-lg-12 col-sm-auto col-12 p-2">
                                            <a href="<?php echo web_root; ?>index.php?q=apply&job=<?php echo $result->JOBID;?>&view=personalinfo" class="d-block btn btn-alt">Aplicar ahora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <div class="inner">
                                    <h6 class="title">Detalles</h6>
                                    <ul class="job-overview list-unstyled">
                                        <li><strong>Publicado en:</strong> <?php echo date_format(date_create($result->DATEPOSTED),'M d, Y'); ?></li>
                                        <li><i class="fp-ht-bed"></i>Required No. of Employee's : <?php echo $result->REQ_NO_EMPLOYEES; ?></li>
                                        <li><i class="fa fa-sun-"></i>Duration of Employment : <?php echo $result->DURATION_EMPLOYEMENT; ?></li>
                                        <li><i class="fp-ht-dumbbell"></i>Qualification/Work Experience : <?php echo $result->QUALIFICATION_WORKEXPERIENCE; ?></li>
                                        <li><i class="fp-ht-computer"></i>Sector of Vacancy : <?php echo $result->SECTOR_VACANCY; ?></li>
                                        <!--<li><strong>Vacancy:</strong> 02</li>
                                        <li><strong>Employment Status:</strong> Full-time</li>
                                        <li><strong>Experience:</strong> 2 to 3 year(s)</li>
                                        <li><strong>Job Location:</strong> Willshire Glen</li>-->
                                        <p>Employer :  <?php echo  $result->COMPANYNAME; ?></p> 
                                                <p>Location :  <?php echo  $result->COMPANYADDRESS; ?></p>
                                        <li><?php echo $result->QUALIFICATION_WORKEXPERIENCE ;?></li> 

                                        <li><strong>Salary:</strong> <?php echo number_format($result->SALARIES,2);  ?></li>
                                        <li><strong>Gender:</strong> <?php echo $result->PREFEREDSEX; ?></li>
                                        <li><strong>Application Deadline:</strong> Dec 15, 2023</li>
                                        <a href="<?php echo web_root; ?>index.php?q=apply&job=<?php echo $result->JOBID;?>&view=personalinfo" class="btn btn-main btn-next-tab">Apply Now !</a>

                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <div class="inner">
                                    <h6 class="title">Ubicación</h6>
                                    <div class="mapouter">
                                        <div class="gmap_canvas">
                                            <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                            <a href="https://123movies-to.com">123movies old site</a>
                                            <style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style>
                                            <a href="https://maps-google.github.io/embed-google-map/">embed google map</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <?php  } ?>   
    </div>
</section> 