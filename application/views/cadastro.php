    <!DOCTYPE html>
 
    <div class="container">
        
 
        <div class="row"></div>
 
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
<!--        <div class="col-xs-10 col-sm-10 col-lg-6">-->
        <?php
        // put your code here
//        echo $acronico;
        echo "<br>";
    //        echo $completo;
        echo "<p>";
        ?>
<font style="font-family:Century Gothic"> <h3>Formulario de Cadastro:</h3>
<p></p>
<p></p>
<p></p>
<p></p>
        <?php echo form_open('usuario/inserir'); ?>
 <div class="form-group">
            <label for="nomeusuario">Nome Usuario:</label>
            <input name="nomeusuario" type="text" class="col-sm-6 form-control"  id="nomeusuario">
        </div>
        
         <div class="form-group">
            <label for="user">User:</label>
            <input name="user" type="text" class="col-sm-6 form-control"  id="user">
        </div>
        
         <div class="form-group">
            <label for="senha">Senha:</label>
            <input name="senha" type="password" required placeholder="Mínimo 8 Caracteres" minlength="8" class="col-sm-6 form-control"  id="senha">
        </div>
        
         <div class="form-group">
            <label for="perfilacesso">Perfil Acesso:</label>
            <select name="perfilacesso" type="text" class="col-sm-6 form-control"  id="perfilacesso">          
             <option> Selecionar Acesso... </option>
            <option value="USER">Usuário</option>
            </select>
         </div>       
        <p></p>
        
        <input class="btn btn-success" type="submit" value="Salvar"/>
        <input class="btn btn-secondary" type="reset" value="Limpar"/>
        <?php form_close(); ?>
        <p></p>
 
                    <br>
<body background="imagens/ronaldo.jpg" height="100%" width="100%">
</body>
     </br>
 
 
 <div class="hide" id="div-lista">
  <table id="usuario" class="table table-striped">
    


        <thead>
            <tr>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
 
    <p></p>
    <a href="<?php echo base_url() . 'home'; ?>">Voltar</a>
    </div>
        </div>
   
