<style type="text/css">
    .mailbox-controls .btn {
      padding: 3px 8px;
      margin: 0px 2px;
    }
</style>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Notificaciones</h3>
                        <br>
                        <!--  <div class="box-tools pull-right" style="margin-bottom: 5px;">
                        <div class="has-feedback">
                        <input type="text" class="form-control input-sm" placeholder="Search Notification">
                        <span class="fa fa-search form-control-feedback" style="margin-top: -25px"></span>
                        </div>
                        </div> -->
                    </div>
                    <div class="box-body no-padding">
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-striped table-hover">
                                <tbody>
                                <?php 
                                $sql = "SELECT * FROM `t_empleos` j, `t_compania` c WHERE j.`COMPANYID`=c.`COMPANYID` ORDER BY DATEPOSTED DESC LIMIT 10";
                                $mydb->setQuery($sql);
                                $cur = $mydb->loadResultList();
                                foreach ($cur as $result) {
                                # code...
                                echo '<tr>'; 
                                echo '<td class="mailbox-name"><a href="'.web_root.'index.php?q=viewjob&search='.$result->JOBID.'">'.$result->OCCUPATIONTITLE.'</a></td>';
                                echo '<td class="mailbox-subject">'.$result->JOBDESCRIPTION.'</td>'; 
                                echo '<td class="mailbox-date">'.$result->QUALIFICATION_WORKEXPERIENCE.'</td>';
                                echo '<td class="mailbox-date">'.$result->DATEPOSTED.'</td>';
                                echo '</tr>';
                                }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>