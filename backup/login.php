<!DOCTYPE html>

<div class="container">
    

    <div class="row"></div>

    <div class="col-xs-1 col-sm-1 col-lg-3"></div>
<!--            <div class="col-xs-10 col-sm-10 col-lg-6">-->
    
    
    <font color ="#FFFFFF" style="font-family:Century Gothic"><h2><center>Login</center></h2>
    <?php echo form_open('login/autenticar'); ?>
    <center>
    <div class="form-group">
        <label for="nomeusuario">Nome Usuario:</label>
        <input name="usuario" type="text" class="col-sm-6 form-control"  id="nomeusuario">
    </div>
        </center>

    <center>
    <div class="form-group">
        <label for="senha">Senha:</label>
        <input name="senha" type="password" class="col-sm-6 form-control"  id="senha">
    </div>
    </center>


    <p></p>
    <center>
    <input class="btn btn-dark" type="submit" value="Entrar"/>
    <input class="btn btn-dark" type="reset" value="Redefinir"/>
    </center>
    <?php form_close(); ?>
    <p></p>
    
    <br>
<body background="imagens/gg.jpg" height="100%" width="100%">
</body>
     </br>






<p></p>
</div>

