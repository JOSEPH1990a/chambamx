<div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper" data-dismiss="modal"><i class="lni lni-close"></i></button>
        <div class="login-modal-main">
            <div class="row no-gutters">
                <div class="row">
                    <div class="heading">
                        <h3>Iniciar Sesión</h3>
                    </div>
                        <div class="alert alert-sucess" id="loginerrormessage" role="alert">
                    </div>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email" class="label">Correo</label>
                            <input type="text" class="form-control" placeholder="ejemplo@gmail.com" id="user_email" name="user_email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="label">Contraseña</label>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="user_pass" placeholder="Escribe tu contraseña" name="user_pass">
                            </div>
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between">    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Recordar Contraseña</label>
                                </div>
                                <a href="" class="font-size-3 text-dodger line-height-reset">Contraseña Olvidada</a>
                        </div>
                    </form>   
                    <div class="form-group mb-8 button">
                        <button class="btn" id="btnlogin" name="btnlogin">Iniciar Sesión </button>
                    </div>    
                    <p class="text-center create-new-account">No tienes una cuenta? <a href="<?php echo web_root; ?>index.php?q=register">Crea una nueva cuenta</a></p>
                </div>
            </div>
        </div>
    </div>
</div>