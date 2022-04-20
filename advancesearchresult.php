<?php 
	$searchfor = (isset($_GET['searchfor']) && $_GET['searchfor'] != '') ? $_GET['searchfor'] : '';
    $search = isset($_POST['buscarpor']) ? ($_POST['buscarpor']!='') ? $_POST['buscarpor'] : 'All' : 'All';
    $company = isset($_POST['compania']) ? ($_POST['compania']!='') ? $_POST['compania'] : 'All' : 'All';
    $category = isset($_POST['categoria']) ? ($_POST['categoria']!='') ? $_POST['categoria'] : 'All' : 'All';
	
?>
<style type="text/css">
	/*    --------------------------------------------------
	:: General
	-------------------------------------------------- */
body {
	font-family: 'Open Sans', sans-serif;
	color: #353535;
}
.content {
	padding: 30px;
	min-height: 500px;
}
.content h1 {
	text-align: center;
}
.content .content-footer p {
	color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
.content .content-footer p a {
	color: inherit;
	font-weight: bold;
}

/*	--------------------------------------------------
	:: Table Filter
	-------------------------------------------------- */
.panel {
	border: 1px solid #ddd;
	background-color: #fcfcfc;
}
.panel .btn-group {
	margin: 15px 0 30px;
} 
.table-filter {
	background-color: #fff;
	border-bottom: 1px solid #eee;
}
.table-filter tbody tr:hover {
	cursor: pointer;
	background-color: #eee;
}
.table-filter tbody tr td {
	padding: 10px;
	vertical-align: middle;
	border-top-color: #eee;
}
.table-filter tbody tr.selected td {
	background-color: #eee;
}
.table-filter tr td:first-child {
	width: 38px;
}
.table-filter tr td:nth-child(2) {
	width: 35px;
}
 
.table-filter .star {
	color: #ccc;
	text-align: center;
	display: block;
}
.table-filter .star.star-checked {
	color: #F0AD4E;
}
.table-filter .star:hover {
	color: #ccc;
}
.table-filter .star.star-checked:hover {
	color: #F0AD4E;
}
.table-filter .media-photo {
	width: 35px;
}
.table-filter .media-body {
    display: block;
    /* Had to use this style to force the div to expand (wasn't necessary with my bootstrap version 3.3.6) */
}
.table-filter .media-meta {
	font-size: 11px;
	color: #999;
}
.table-filter .media .title {
	color: #2BBCDE;
	font-size: 14px;
	font-weight: bold;
	line-height: normal;
	margin: 0;
}
.table-filter .media .title span {
	font-size: .8em;
	margin-right: 20px;
}
.table-filter .media .title span.pagado {
	color: #5cb85c;
}
.table-filter .media .title span.pendiente {
	color: #f0ad4e;
}
.table-filter .media .title span.cancelado {
	color: #d9534f;
}
.table-filter .media .summary {
	font-size: 14px;
}
</style>
<div class="container">
	<div class="row">
		<section class="find-job section">
            <div class="container">
                <div class="single-head">
                    <div class="row">
                        <!--<div class="col-md-12 ">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pull-left">
                                        <div class="btn-group">
                                            <?php 
                                            /*switch ($searchfor) {
                                                case 'bycompany':
                                                    # code...
                                                echo 'Result : '  . $search . ' | Company : ' . $company;
                                                    break;
                                                case 'advancesearch':
                                                    # code... 
                                                echo 'Result : '  . $search . ' | Company : ' . $company . ' | Function : ' . $category; 
                                                    break;
                                                case 'byfunction':
                                                    # code... 
                                                echo 'Result : '  . $search . ' | Function : ' . $category; 
                                                    break;

                                                case 'bytitle':
                                                    # code... 
                                                echo 'Result : '  . $search; 
                                                    break;
                                                
                                                default:
                                                    # code...
                                                    break;
                                            }*/


                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>-->
                        <?php 
                        $search = isset($_POST['buscarpor']) ? $_POST['buscarpor'] : '';
                        $company = isset($_POST['compania']) ? $_POST['compania'] : '';
                        $category = isset($_POST['categoria']) ? $_POST['categoria'] : '';
                        $sql = "SELECT c.nombre_compania,j.titulo_empleo,j.descripcion_empleo,j.id FROM `t_empleos` j, `t_compania` c 
                            WHERE j.`id_compania`=c.`id` AND nombre_compania LIKE '%{$company}%' AND categoria LIKE '%{$category}%' AND (`titulo_empleo` LIKE '%{$search}%' OR `descripcion_empleo` LIKE '%{$search}%' OR `anios_experiencia` LIKE '%{$search}%')";
                        $mydb->setQuery($sql);
                        $cur = $mydb->executeQuery();
                        $maxrow = $mydb->num_rows($cur);
                        if ($maxrow > 0) {
                            $res = $mydb->loadResultList();
                            foreach ($res as $row) {  ?>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single-job wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s;">
                                        <div class="job-image">
                                            <img src="http://localhost:8888/chamba/Assets/images/jobs/img1.png" alt="#">
                                        </div>
                                        <div class="job-content">
                                            <h4><a href="#"><?php echo $row->titulo_empleo; ?></a></h4>
                                            <p><?php echo $row->descripcion_empleo; ?></p>
                                            <ul>
                                                <li><i class="lni lni-website"></i><a href="#"><?php echo $row->nombre_compania ?></a></li>
                                                <li><i class="lni lni-dollar"></i><?php echo $row->nombre_compania ?></li>
                                                <li><i class="lni lni-map-marker"></i><?php echo $row->nombre_compania ?></li>
                                            </ul>
                                        </div>
                                        <div class="job-button">
                                            <ul>
                                                <li><a href="index.php?q=viewjob&search=<?php echo $row->id ?>">Ver oferta</a></li>
                                                <li><span>Remoto</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        }else{
                            echo '<tr><td>Sin resultado...</td></tr>';
                        }
                        ?>
                    </div>  
                </div>
            </div>  
		</section>
	</div>
</div>