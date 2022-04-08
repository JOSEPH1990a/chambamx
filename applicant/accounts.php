<?php 
    $applicant = new Applicants();
    $appl = $applicant->single_applicant($_SESSION['APPLICANTID']);
?>
<style type="text/css">
    .form-group {
        margin-bottom: 5px;
    }
</style>
<div class="container">
        <div class="row">
            <div class="col-lg-10 col-12">
                <div class="add-resume-inner box">
                    <div class="post-header align-items-center justify-content-center">
                        <h3>Información Básica</h3>
                    </div>
                    <form class="form-ad">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="control-label">Nombre</label>
                                    <input type="text" class="form-control" placeholder="Nombre" value="<?php echo ($appl->FNAME.' '.$appl->LNAME.' '.$appl->MNAME); ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="text" class="form-control" placeholder="Tu email" value="<?php echo $appl->EMAILADDRESS; ?>">
                                </div>
                            </div>
                            <!--<div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="control-label">Profesión</label>
                                    <input type="text" class="form-control" placeholder="Profesión (p.e. Front-end developer)">
                                </div>
                            </div>-->
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="control-label">Localización</label>
                                    <input type="text" class="form-control" placeholder="localización" value="<?php echo $appl->ADDRESS; ?>">
                                </div>
                            </div>
                            <!--<div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="control-label">Página Web</label>
                                    <input type="text" class="form-control" placeholder="Página Web">
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="control-label">Precion x Hora</label>
                                    <input type="text" class="form-control" placeholder="Salario">
                                </div>
                            </div>-->
                        </div>
                        <!--<div class="form-group">
                            <label class="control-label">Edad</label>
                            <input type="text" class="form-control" placeholder="Edad">
                        </div>-->
                        <!--<div class="form-group">
                            <div class="button-group">
                                <div class="action-buttons">
                                    <div class="upload-button button">
                                        <button class="btn">Subir Imagen de Perfil</button>
                                        <input id="cover_img_file_2" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <!--<h3 class="single-section-title">Educaión</h3>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="control-label">Licenciatura</label>
                                    <input type="text" class="form-control" placeholder="Educaión">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label class="control-label">Campo de Estudio</label>
                                    <input type="text" class="form-control" placeholder="Campo de Estudio">
                                </div>
                            </div>
                        </div>-->
                        <!--<div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">De</label>
                                    <input type="text" class="form-control" placeholder="Año">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">A</label>
                                    <input type="text" class="form-control" placeholder="Año">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Escuela</label>
                            <input type="text" class="form-control" placeholder="Nombre de la Escuela">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Descripción</label>
                            <textarea class="form-control" rows="7"></textarea>
                        </div>-->
                        <!--<div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 col-md-5 col-12">
                                <div class="form-group">
                                    <div class="button-group">
                                        <div class="action-buttons">
                                            <div class="upload-button button">
                                                <button class="btn">Subir un Logotipo</button>
                                                <input id="cover_img_file_3" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-12">
                                <div class="add-post-btn float-right">
                                    <ul>
                                        <li><a href="#" class="btn-added"><i class="lni lni-add-files"></i>Agregar Nueva Educación</a></li>
                                        <li><a href="#" class="btn-delete"><i class="lni lni-remove-file"></i>Eliminar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        <!--<h3 class="single-section-title">Experiencia Laboral</h3>
                        <div class="form-group">
                            <label class="control-label">Nombre de la Compañía</label>
                            <input type="text" class="form-control" placeholder="Nombre de la Compañía">     
                        </div>
                        <div class="form-group">
                            <label class="control-label">Título</label>
                            <input type="text" class="form-control" placeholder="Título">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Desde</label>
                                    <input type="text" class="form-control" placeholder="Desde">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Hasta</label>
                                    <input type="text" class="form-control" placeholder="Hasta">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Descripción</label>
                        </div>
                        <div id="editor" style="margin-bottom: 30px;">
                            <div id="summernote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quia aut modi
                                fugit, ratione saepe perferendis odio optio repellat dolorum voluptas excepturi
                                possimus similique veritatis nobis. Provident cupiditate delectus, optio?</p>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 col-md-5 col-12">
                                <div class="form-group">
                                    <div class="button-group">
                                        <div class="action-buttons">
                                            <div class="upload-button button">
                                                <button class="btn">Subir un Logo</button>
                                                <input id="#" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-12">
                                <div class="add-post-btn float-right">
                                    <ul>
                                        <li><a href="#" class="btn-added"><i class="lni lni-add-files"></i>Agregar Nueva Experiencia</a></li>
                                        <li><a href="#" class="btn-delete"><i class="lni lni-remove-file"></i>Eliminar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h3 class="single-section-title">Habilidades</h3>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Nombre de la Habilidad</label>
                                    <input class="form-control" placeholder="Nombre de la Habilidad, p.e. HTML" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">% (1-100)</label>
                                    <input class="form-control" placeholder="Porcentaje, p.e. 90" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 col-md-5 col-12">
                                <div class="button">
                                    <a href="resume.html" class="btn">Guardar</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-12">
                                <div class="add-post-btn float-right">
                                    <ul>
                                        <li><a href="#" class="btn-added"><i class="lni lni-add-files"></i>Agregar Nueva Habilidad</a></li>
                                        <li><a href="#" class="btn-delete"><i class="lni lni-remove-file"></i>Eliminar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>


<!--<form class="form-horizontal" method="POST" action="controller.php?action=edit">  
    <div class="container">  
        <div class="box-header with-border">
            <h3 class="box-title">Accounts</h3>
        </div> 
        <div class="form-group">
            <div class="col-md-11">
            <label class="col-md-4 control-label" for="FNAME">Firstname:</label>
                  <div class="col-md-8">
                    <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
                     <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder="Firstname" type="text" value="<?php echo $appl->FNAME;?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "LNAME">Lastname:</label>

                  <div class="col-md-8"> 
                    <input  class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                        "Lastname"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" value="<?php echo $appl->LNAME;?>">
                    </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "MNAME">Middle Name:</label>

                  <div class="col-md-8"> 
                    <input  class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
                        "Middle Name"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" value="<?php echo $appl->MNAME;?>"> 
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "ADDRESS">Address:</label>

                  <div class="col-md-8">

                   <textarea class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                      "Address" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"><?php echo $appl->ADDRESS;?></textarea>
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "Gender">Sex:</label>

                  <div class="col-md-8">
                   <div class="col-lg-5">
                      <div class="radio">
                        <label><input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Female</label>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="radio">
                        <label><input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male"> Male</label>
                      </div>
                    </div> 
                   
                  </div>
                </div>
              </div> 

               <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "BIRTHDATE">Date of Birth:</label>

                  <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-addon"> 
                         <i class="fa fa-calendar"></i> 
                        </span>  
                         <input class="form-control input-sm date_picker" id="BIRTHDATE" name="BIRTHDATE" placeholder="Date of Birth" type="text"    value="<?php echo date_format(date_create($appl->BIRTHDATE),'m/d/Y');?>" required  autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>  

               <div class="form-group">
                  <div class="col-md-11">
                    <label class="col-md-4 control-label" for=
                    "BIRTHPLACE">Place of Birth:</label>

                    <div class="col-md-8">
                      
                       <textarea class="form-control input-sm" id="BIRTHPLACE" name="BIRTHPLACE" placeholder=
                          "Place of Birth" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"><?php echo $appl->BIRTHPLACE;?></textarea>
                    </div>
                  </div>
                </div> 


               <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "TELNO">Contact No.:</label>

                  <div class="col-md-8">
                    
                     <input class="form-control input-sm" id="TELNO" name="TELNO" placeholder=
                        "Contact No." type="text" any value="<?php echo $appl->CONTACTNO;?>" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                  </div>
                </div>
              </div> 

               <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "CIVILSTATUS">Civil Status:</label>

                  <div class="col-md-8">
                    <select class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
                        <option value="none" >Select</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow" >Widow</option>
                    </select> 
                  </div>
                </div>
              </div>  

               <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "EMAILADDRESS">Email Address:</label> 
                  <div class="col-md-8">
                     <input type="Email" class="form-control input-sm" id="EMAILADDRESS" name="EMAILADDRESS" placeholder="Email Address"   autocomplete="off" value="<?php echo $appl->EMAILADDRESS;?>" /> 
                  </div>
                </div>
              </div>  
              
              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "DEGREE">Educational Attainment:</label>

                  <div class="col-md-8"> 
                    <input  class="form-control input-sm" id="DEGREE" name="DEGREE" placeholder=
                        "Educational Attainment"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" value="<?php echo $appl->DEGREE;?>">
                    </div>
                </div>
              </div>  
              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "submit"></label>

                  <div class="col-md-8">
                     <button class="btn btn-primary btn-sm" name="submit" type="submit" ><span class="fa fa-save"></span> Submit </button>
                    </div>
                </div>
              </div>  
           
          </div>  
 </form>-->