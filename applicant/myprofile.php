<?php 
    $applicant = new Applicants();
    $appl = $applicant->single_applicant($_SESSION['id_candidato']);
?>
<style type="text/css">
    .form-group {
        margin-bottom: 5px;
    }
    .img-circular{
        border-radius:50%;
        width:100px;
        height:100px;
    }
</style>
<div class="personal-top-content">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-12">
            <div class="name-head">
                <a>
                    <img title="profile image"  class="img-circular" data-target="#myModal"  data-toggle="modal"  src="<?php echo web_root.'applicant/'.$appl->foto_candidato; ?>"> </a>
                <h4><a class="name" href="#"></a><?php echo $appl->nombre .' '.$appl->apellido_paterno; ?> </h4>
                <!--<p><a class="deg" href="#">Product Designer</a></p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
                </div><br>-->                                        
                <!--<a href=""><button type="button" class="btn btn-primary">Completar Perfil</button></a>-->
                <!--<ul class="social">
                    <li><a href="#"><i class="lni lni-facebook-original"></i></a></li>
                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    <li><a href="#"><i class="lni lni-dribbble"></i></a></li>
                    <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                </ul>-->
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-12">
            <div class="content-right">
                <h5 class="title-main">Informacion de Contatco</h5>
                <div class="single-list">
                    <h5 class="title">Dirección</h5>
                    <p><?php echo($appl->direccion) ?></p>
                </div>
                <div class="single-list">
                    <h5 class="title">E-mail</h5>
                    <p><?php echo($appl->email) ?></p>
                </div>
                <div class="single-list">
                    <h5 class="title">Telefono</h5>
                    <p><?php echo($appl->telefono) ?></p>
                </div>
                <!--<div class="single-list">
                    <h5 class="title">Sitio Web</h5>
                    <p><a href="#">yourwebsite.com</a></p>
                </div>-->
            </div>
        </div>
    </div>
</div>
<!--    <div class="single-section">
    <h4>Acerca de Mi</h4>
    <p class="font-size-4 mb-8">A talented professional with an academic background in IT and proven commercial development experience as C++ developer since 1999. Has a sound knowledge of the software
    development life cycle. Was involved in more than 140 software development outsourcing projects.</p>
    <p class="font-size-4 mb-8">Programming Languages: C/C++, .NET C++, Python, Bash, Shell, PERL, Regular expressions, Python, Active-script.</p>
</div>-->
<!--<div class="single-section skill">
    <h4>Habilidades</h4>
    <ul class="list-unstyled d-flex align-items-center flex-wrap">
        <li>
            <a href="#">Agil</a>
        </li>
        <li>
            <a href="#">Maquetacion</a>
        </li>
        <li>
            <a href="#">Prototipado</a>
        </li>
        <li>
            <a href="#">Informacion</a>
        </li>
        <li>
            <a href="#">Modelado</a>
        </li>
        <li>
            <a href="#">Desarrollo Android</a>
        </li>
        <li>
            <a href="#">Diseño Ui/Ux</a>
        </li>
        <li>
            <a href="#">Diseño Web</a>
        </li>
        <li>
            <a href="#">Diseño Grafico</a>
        </li>
    </ul>
</div>-->
<!--<div class="single-section exprerience">
    <h4>Experiencia Laboral</h4>
    <div class="single-exp mb-30">
        <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
            <div class="image">
                <img src="" alt="#">
            </div>
            <div class="w-100 mt-n2">       
                <h3 class="mb-0">
                    <a href="#">Diseñador Grafico</a>
                </h3>
                <a href="#">SEUAT</a>
                <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                    <a href="#">Jun 2020 - April 2023- 3 years</a>
                    <a href="#" class="font-size-3 text-gray">
                    <span class="mr-2" style="margin-top: -2px"><i class="lni lni-map-marker"></i></span>New York, USA</a>
                </div>
            </div>
        </div>
    </div>
    <div class="single-exp mb-30">
        <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
            <div class="image">
                <img src="" alt="#">
            </div>
            <div class="w-100 mt-n2">
                <h3 class="mb-0">
                    <a href="#">Desarrollo Web</a>
                </h3>
                <a href="#">Google Inc</a>
                <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                    <a href="#">Jun 2020 - April 2023- 3 years</a>
                    <a href="#" class="font-size-3 text-gray">
                    <span class="mr-2" style="margin-top: -2px"><i class="lni lni-map-marker"></i></span>New York, USA</a>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!--<div class="single-section education">
    <h4>Educacion</h4>
    <div class="single-edu mb-30">
        <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
            <div class="image">
                <img src="" alt="#">
            </div>
            <div class="w-100 mt-n2">   
                <h3 class="mb-0">
                    <a href="#">Maestria en Ciencia y Tecnologia</a>
                </h3>
                <a href="#">Universidad Sor Juana Ines de la Cruz</a>
                <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                    <a href="#">Jun 2020 - April 2023- 3 years</a>
                    <a href="#" class="font-size-3 text-gray">
                    <span class="mr-2" style="margin-top: -2px"><i class="lni lni-map-marker"></i></span>Brylin, USA</a>
                </div>
            </div>
        </div>
    </div>
    <div class="single-edu mb-30">
        <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
            <div class="image">
                <img src="" alt="#">
            </div>
            <div class="w-100 mt-n2">
                <h3 class="mb-0">
                    <a href="#">Ingenieria en Sistemas Computacionales</a>
                </h3>
                <a href="#">Sor juana Ines de la Cruz</a>
                <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                    <a href="#">Fed 2019 - April 2023 - 4 years </a>
                    <a href="#" class="font-size-3 text-gray">
                    <span class="mr-2" style="margin-top: -2px"><i class="lni lni-map-marker"></i></span>New York, USA</a>
                </div>
            </div>
        </div>
    </div>    
</div>-->