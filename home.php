<section class="hero-area">
    <div class="hero-inner">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 co-12">
                    <div class="inner-content">
                        <div class="hero-text">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Encuentra el empleo <br>que estas buscando</h1>
                            <p class="wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><i>"Un triunfador es aquel que se levanta <br> y busca las circunstancias que desea<br> y si no las encuentra las fabrica"</i></p>
                        </div>
                        <div class="job-search-wrap-two mt-50 wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            <div class="job-search-form">
                                <form action="index.php?q=result&searchfor=bytitle" method="POST">
                                    <div class="single-field-item keyword">
                                        <label for="keyword">Nombre del empleo</label>
                                        <input id="keyword" placeholder="Que empleo buscas?" name="SEARCH" type="text">
                                    </div>
                                    <div class="single-field-item location">
                                        <label for="location">Donde</label>
                                        <input id="location" class="input-field input-field-location" placeholder="Ciudad o Estado" name="localizacion" type="text">
                                    </div>
                                    <div class="submit-btn">
                                        <button class="btn" type="submit">Buscar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="trending-keywords mt-30">
                                <div class="keywords style-two">
                                    <span class="title">Palabras clave Populares</span>
                                    <ul>
                                        <li><a href="#">Administrativo</a></li>
                                        <li><a href="#">Android</a></li>
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">Desarrollador Web</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 co-12">
                    <div class="hero-video-head wow fadeInRight" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                        <div class="video-inner">
                            <img src="<?php echo web_root ?>plugins/home-plugins/img/hero-image.png" alt="#">
                            <a href="https://www.youtube.com/watch?v=cz4z8CyvDas" class="glightbox hero-video"><i class="lni lni-play"></i></a>
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="apply-process section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="process-item">
                    <i class="lni lni-user"></i>
                    <h4>Registrate</h4>
                    <p>Registrate para que recibas alertas de empleo personalizados.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="process-item">
                    <i class="lni lni-book"></i>
                    <h4>Suube tu CV</h4>
                    <p>Sube tu CV para que las empresas te conozcan.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="process-item">
                    <i class="lni lni-briefcase"></i>
                    <h4>Aplica a un empleo</h4>
                    <p>Aplica a un empleo de tu preferencia.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-job section p-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Compañias</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Asociarse con líderes empresariales</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Desarrollo de relaciones estratégicas exitosas a largo plazo entre clientes y proveedores, basadas en el logro de mejores prácticas y ventajas competitivas sostenibles. En el modelo de socio comercial, los profesionales de recursos humanos trabajan en estrecha colaboración con los líderes comerciales y los gerentes de línea para lograr objetivos organizacionales compartidos.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="content">

<section class="featured-job section pt-0">
    <div class="container">
        <div class="single-head">
            <div class="row">
                <?php 
                $sql = "SELECT *FROM `t_compania`";
                $mydb->setQuery($sql);
                $comp = $mydb->loadResultList();
                foreach ($comp as $key => $company) { ?>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="single-job wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="content">
                                <h4><a href="job-details.html"><?php echo $company->COMPANYNAME;?></a></h4>
                                <ul>
                                    <li><i class="lni lni-map-marker"></i>Direccion: <?php echo $company->COMPANYADDRESS;?></li>
                                </ul>
                                <p>Contacto No.<?php echo $company->COMPANYCONTACTNO;?> </p>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="job-category section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span>Categorias</span>
                    <h2>lista de categorias de empleos</h2>
                    <p>Selecciona una categoría para ver los ultimos empleos publicados.</p>
                </div>
            </div>
        </div>
        <div class="cat-head">
            <div class="row">
                <?php
                    $sql = "SELECT *FROM `t_categoria`";
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="<?php echo web_root ?>index.php?q=category&search=<?php echo $result->CATEGORY ?>" class="single-cat wow fadeInUp" data-wow-delay=".2s"  animation-delay: 0.2s; animation-name: none;">
                        <div class="icon">
                            <?php echo($result->ICONO) ?>
                        </div>
                        <h3><?php echo $result->CATEGORY ?></h3>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<!--<section class=" testimonials">
    <img class="patern1 wow fadeInRight" data-wow-delay=".3s" src="<?php //echo media(); ?>/images/testimonios/patern1.png" alt="#" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
    <img class="patern2 wow fadeInLeft" data-wow-delay=".5s" src="<?php //echo media(); ?>/images/testimonios/patern1.png" alt="#" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="section-title align-left wow fadeInLeft" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <span>Que dicen nuestros clientes?</span>
                    <h2>Nuestros Testimonios  </h2>
                </div>
                <div class=" testimonial-inner-head wow fadeInLeft" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <div class=" testimonial-inner">
                        <div class="tns-outer" id="tns2-ow">
                            <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0">
                                <button type="button" data-controls="prev" tabindex="-1" aria-controls="tns2"><i class="lni lni-arrow-left"></i></button>
                                <button type="button" data-controls="next" tabindex="-1" aria-controls="tns2"><i class="lni lni-arrow-right"></i></button>
                            </div>
                            <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">2</span>  of 4</div>
                            <div id="tns2-mw" class="tns-ovh">
                                <div class="tns-inner" id="tns2-iw">
                                    <div class="testimonial-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns2" style="transition-duration: 0s; transform: translate3d(-16.6667%, 0px, 0px);">
                                        <?php
                                            //foreach ($data['testimonios'] as $value) {
                                        ?>
                                        <div class="single-testimonial tns-item" aria-hidden="true" tabindex="-1">
                                            <div class="quote">
                                                <i class="lni lni-quotation"></i>
                                            </div>
                                            <p>"<?php //echo($value['descripcion_testimonio']);?>"</p>
                                            <div class="bottom">
                                                <div class="clien-image">
                                                    <img src="<?php //echo media(); ?><?php //echo $value['url']?>" alt="#">
                                                </div>
                                                <h4 class="name"><?php //echo $value['username']; ?><span><?php //echo $value['titulo_empleo'];?></span></h4>
                                            </div>
                                        </div>
                                        <?php //} ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="testimonial-right wow fadeInRight" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                    <img src="<?php //echo media(); ?>/images/testimonios/testimonial-right.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>-->