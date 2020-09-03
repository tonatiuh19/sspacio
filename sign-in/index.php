<?php
require_once('../admin/header.php');
?>
<style>
    .box{
		display: none;
	}
</style>
<link href="css/signin.css" rel="stylesheet">
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('../images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Inicia Sesion</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section" id="what">
      <div class="container">
        <form class="form-signin" method="post" action="log-in/">
            <i class="fas fa-door-open fa-5x"></i>
            <h1 class="h3 mb-3 font-weight-normal">Inicia Sesion</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electronico" name="email_i" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="pwd_i" required>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
            <br>
            <a data-toggle="modal" href="#sign-up">Registrarme</a>
        </form>
      </div>
    </section>

    <div class="modal fade" id="sign-up" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Bienvenido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="colorRadio" value="red">Necesito rentar un espacio
                        </label>
                        </div>
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="colorRadio" value="green">Quiero publicar un espacio
                        </label>
                    </div>
                    
                    <div class="red box">
                        <hr>
                        <h4>Renta un espacio</h4>
                        <form method="post" action="new-user/">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email_f" aria-describedby="emailHelp" placeholder="Correo Electronico" required>
                                <input type="hidden" name="type" value="2">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pwd_f" placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputPassword1" name="first_n" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputPassword1" name="last_n" placeholder="Apellido" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Telefono" required>
                            </div>
                            <div class="form-group">
                                Fecha de nacimiento:
                                <input type="date" class="form-control" id="exampleInputPassword1" name="date_of_birth" placeholder="Fecha de nacimiento" required>
                            </div>
                            <small id="emailHelp" class="form-text text-muted text-center">Al registrarme acepto los <a href="../terminosycondiciones/" target="_blank">Términos y Condiciones</a> y <a href="../politicasdeprivacidad" target="_blank">Políticas de Privacidad</a><!-- y <a href="#">Términos de Promociones</a>  --> de TienditaCafe.</a></small>
                            <button type="submit" class="btn btn-primary mx-auto d-block">Crear mi cuenta</button>
                        </form>
                    </div>
                    <div class="green box">
                        <hr>
                        <h4>Publica un espacio</h4>
                        <form method="post" action="new-user/">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email_f" aria-describedby="emailHelp" placeholder="Correo Electronico" required>
                                <input type="hidden" name="type" value="1">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pwd_f" placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputPassword1" name="first_n" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputPassword1" name="last_n" placeholder="Apellido" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Telefono" required>
                            </div>
                            <div class="form-group">
                                Fecha de nacimiento:
                                <input type="date" class="form-control" id="exampleInputPassword1" name="date_of_birth" placeholder="Fecha de nacimiento" required>
                            </div>
                            <small id="emailHelp" class="form-text text-muted text-center">Al registrarme acepto los <a href="../terminosycondiciones/" target="_blank">Términos y Condiciones</a> y <a href="../politicasdeprivacidad" target="_blank">Políticas de Privacidad</a><!-- y <a href="#">Términos de Promociones</a>  --> de TienditaCafe.</a></small>
                            <button type="submit" class="btn btn-primary mx-auto d-block">Crear mi cuenta</button>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
<?php
require_once('../admin/footer.php');
?>
<script>
    $(document).ready(function () {
        // Handler for .ready() called.
        
        $('input[type="radio"]').click(function(){
			var inputValue = $(this).attr("value");
			var targetBox = $("." + inputValue);
			$(".box").not(targetBox).hide();
			$(targetBox).show();
        });
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            locale: 'es-es',
        });
    });
</script>
