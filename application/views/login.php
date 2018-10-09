<!DOCTYPE html>

<div class="limiter">
    
<div class="container-login100">
<!--    <div class="row"></div>

    <div class="col-xs-1 col-sm-1 col-lg-3"></div>-->
    <!--        <div class="col-xs-10 col-sm-10 col-lg-6">-->

    <!--<font color ="#FFFFFF" style="font-family:Century Gothic"> <h2><center>Login</center></h2>-->
    <div class="wrap-login100">
        <div class="login100-form validate-form p-l-15 p-r-25 p-t-8">
    <?php echo form_open('login/autenticar'); ?>
        <span class="login100-form-title">
						Login
					</span>
            <br>
            <span class="login100-form-avatar">
                <img src="images/icontwo.png" alt="AVATAR">
            </span>
            <br>
    <center>
    <div class="wrap-input100 validate-input m-b-16">
        <label for="nomeusuario">Nome Usuario:</label>
        <input name="usuario" type="text" class="input100"  id="nomeusuario">
    </div>
        </center>

    <center>
    <div class="wrap-input100 validate-input m-b-16">
        <label for="senha">Senha:</label>
        <input name="senha" type="password" class="input100"  id="senha">
    </div>
        
    </center>


    <p></p>
    <center>
        <div class="container-login100-form-btn">
    <input class="login100-form-btn" type="submit" value="Entrar"/>
        </div>
        <br>
    <input class="login100-form-btn" type="reset" value="Redefinir"/>
    </center>
    <br>
    <center>
    <a class="txt2" href="<?php echo base_url() . 
                                            'cadastro' ; ?>">Create a account</a>
    </center>
    <?php form_close(); ?>
        </div>
    </div>
    <p></p>
    
    <br>
<!--<body background="imagens/gg.jpg" height="100%" width="100%">-->
<!--</body>-->
     </br>






<p></p>
</div>

</div>