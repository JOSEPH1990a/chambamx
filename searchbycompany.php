 
<style type="text/css">
#content {
	min-height: 500px; 
}
#content .panel {
	padding: 10px;
}

 .panel-body label {
 	font-size: 20px; 
 }
 .panel-body input {
 	font-size: 15px;
 }
  .panel-body > .row {
  	margin-bottom:10px;
  }
</style>
<form action="index.php?q=result&searchfor=bycompany" method="POST">
    <section class="find-job section">
        <div class="search-job">
            <div class="container">
                <div class="search-nner">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <label class="col-sm-3">Buscar:</label>
                            <input type="text" class="form-control" type="" name="buscarpor" placeholder="Buscar por">
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12">
                            <label class="col-sm-3">Empresa:</label>
                            <select class="form-select form-select-lg" name="compania">
                                <option value="">Todos</option>
                                <?php
                                    $sql = "SELECT * FROM t_compania";
                                    $mydb->setQuery($sql);
                                    $res = $mydb->loadResultList();
                                    foreach ($res as $row) { 
                                        echo '<option>'.$row->nombre_compania.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 button d-flex align-items-en">
                            <button type="submit" name="submit" class="btn btn-common float-right">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>