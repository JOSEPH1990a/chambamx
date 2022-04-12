<div class="content-wrapper"> 
    <section class="content">
        <div class="row"> 
        <?php if (!isset($_GET['p'])) {  ?>
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Empleos aplicados</h3> 
                        <br>
                    </div>
                    <div class="box-body no-padding">
                        <div class="table-responsive mailbox-messages">
                            <table id="example" class="hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre empleo</th>
                                        <th>Empresa</th>
                                        <th>Ubicación</th>
                                        <th>Estatus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $sql="SELECT * FROM `t_compania` c,`t_empleos_aplicados` r, `t_empleos` j WHERE c.`COMPANYID`=r.`COMPANYID` AND r.`JOBID`=j.`JOBID` and r.`APPLICANTID` = {$_SESSION['APPLICANTID']}";
                                $mydb->setQuery($sql);
                                $cur = $mydb->loadResultList(); 
                                $numeracion = 0;
                                foreach ($cur as $key => $result) {
                                    $numeracion += 1; 
                                    echo '<tr>';
                                    echo '<td>'.$numeracion.'</td>';
                                    echo '<td class="mailbox-star"><a href="index.php?view=appliedjobs&p=job&id='.$result->REGISTRATIONID.'"><i class="fa fa-pencil-o text-yellow"></i> '.$result->OCCUPATIONTITLE.'</a></td>';
                                    echo '<td class="mailbox-attachment">'.$result->COMPANYNAME.'</td>';
                                    echo '<td class="mailbox-attachment">'.$result->COMPANYADDRESS.'</td>';
                                    echo '<td class="mailbox-attachment">'.$result->REMARKS.'</td>'; 
                                    echo '</tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
            </div>
            <?php }else{
            require_once ("viewjob.php");          
            } ?>
        </div>
    </section>
</div>
   
 