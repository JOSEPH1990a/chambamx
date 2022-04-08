<section id="content" class="add-resume section">
    <div class="container">    
        <p> <?php check_message();?></p>     
        <div class="row"> 
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="add-resume-inner box">
                    <div class="post-header align-items-center justify-content-center">
                        <h3>Información Básica</h3>
                    </div>
                    <form class="form-ad" action="process.php?action=register" method="POST">
                        <div class="row"> 
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="FNAME">Nombre:</label>
                                    <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
                                    <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder="Nombre" type="text" value=""  required onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="LNAME">Apellido paterno:</label>
                                    <input name="deptid" type="hidden" value="">
                                    <input  class="form-control input-sm" id="LNAME" name="LNAME" placeholder="Apellido paterno"   required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="MNAME">Apellido materno:</label>
                                    <input name="deptid" type="hidden" value="">
                                    <input  class="form-control input-sm" id="MNAME" name="MNAME" placeholder="Apellido materno"  required   onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="ADDRESS">Direccion:</label>
                                    <textarea class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder="Direccion" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">                        
                                <div class="form">
                                    <label class="control-label" for="Gender">Sexo:</label>
                                    <div class="col-md-8">
                                        <div class="col-lg-5">
                                            <div class="radio">
                                                <label><input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Femenino</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="radio">
                                                <label><input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male"> Masculino</label>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="form-group">
			                        <div class="row">
			                                <div class="col-12">
			                                    <label class="col-lg-12 control-label">Fecha de cumpleaños :</label>
			                                </div>
			                                <div class="col-lg-3">
			                                    <select class="form-control form-select" required name="month">
			                                        <option>Mes</option>
			                                        <?php
			                                            $mon = array('Enero' => 1 ,'Febrero'=> 2,'Marzo' => 3 ,'Abril'=> 4,'Mayo' => 5 ,'Junio'=> 6,'Julio' => 7 ,'Agosto'=> 8,'Septiembre' => 9 ,'Octubre'=> 10,'Noviembre' => 11 ,'Diciembre'=> 8 );    
			                                            foreach ($mon as $month => $value ) {
			                                                echo '<option value='.$value.'>'.$month.'</option>';
			                                            } 
			                                        ?>
			                                    </select>
			                                </div>
			                                <div class="col-lg-3">
			                                    <select class="form-control form-select" required name="day">
			                                        <option>Dia</option>
			                                        <?php 
			                                            $d = range(31, 1);
			                                            foreach ($d as $day) {
			                                                echo '<option value='.$day.'>'.$day.'</option>';
			                                            }
			                                        ?>
			                                    </select>
			                                </div>
			                                <div class="col-lg-3">
			                                    <select class="form-control form-select"  required name="year">
			                                        <option>Año</option>
			                                        <?php 
			                                            $years = range(2022, 1900);
			                                            foreach ($years as $yr) {
			                                                echo '<option value='.$yr.'>'.$yr.'</option>';
			                                            }
			                                        ?>
			                                    </select>
			                                </div> 
			                        </div>
			                    </div> 
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
			                        <label class="control-label" for="BIRTHPLACE">Lugar de nacimiento:</label>
			                        <div class="col-12">
			                            <textarea class="form-control input-sm" id="BIRTHPLACE" name="BIRTHPLACE" placeholder="Lugar de nacimiento" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
			                        </div>
			                    </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
			                        <label class="control-label" for="TELNO">Numero de telefono.:</label>
			                        <input class="form-control" id="TELNO" name="TELNO" placeholder="Telefono" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
			                    </div> 
                            </div>
                            <div class="col-lg-6 col-12">
			                    <div class="form-group">
			                        <label class="col-md-4 control-label" for="CIVILSTATUS">Estado civil:</label>
			                        <select class="form-control input-sm" required name="CIVILSTATUS" id="CIVILSTATUS">
			                            <option value="none" >Seleccionar</option>
                                        <option value="Single">Soltero</option>
                                        <option value="Married">Casado</option>
                                        <option value="Widow" >Divorciado</option>
			                        </select> 
			                    </div> 
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="control-label">Correo</label>
                                    <input type="Email" class="form-control" id="EMAILADDRESS" name="EMAILADDRESS" placeholder="Correo" required  autocomplete="false"/> 
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
			                        <label class="col-md-4 control-label" for="USERNAME">Nombre usuario:</label>
			                        <input name="deptid" type="hidden" value="">
			                        <input  class="form-control" id="USERNAME" name="USERNAME" placeholder="Nombre usuario"  required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
			                    </div>
                            </div>
                            <div class="col-lg-6 col-12">
			                    <div class="form-group">
			                        <label class="col-md-4 control-label" for="PASS">Contraseña:</label>
			                        <input name="deptid" type="hidden" value="">
			                        <input  class="form-control" id="PASS" name="PASS" placeholder="Contraseña" type="password" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
			                    </div> 
                            </div>
                            <div class="col-lg-6 col-12">
			                    <div class="form-group">
			                        <label class="col-md-4 control-label" for="DEGREE">Ultimo grado de estudios:</label>
			                        <input name="deptid" type="hidden" value="">
			                        <input  class="form-control input-sm" id="DEGREE" name="DEGREE" placeholder="Nombre ultimo grado estudios"  required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
			                    </div>  
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" required    value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Al registrarse estás de acuerdo a nuestros <a href="#">términos y condiciones</a></label>
                                </div>
                            </div> 
                            <div class="form-group">
			                <div class="text-center">
			                    <label class="col-md-4 control-label" for="idno"></label>  
			                    <div class="">
			                        <button class="btn btn-primary" name="btnRegister" type="submit" ><span class="fa fa-save fw-fa"></span> Registrar</button> 
			                    </div>
			                </div>
			            </div> 
                        </div>    
                    </form>
                </div>
            </div>
        </div>
	</div>
</section>