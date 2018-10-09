<div class="container">
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Editar contato</h2>
       
        <?php echo form_open('funcao/atualizar'); ?>
            <div class="form-group">
            <input type="hidden" name="idfuncao" id="idfuncao" value="<?php echo $funcaoEditar[0]->idfuncao; ?>">
            <label for="nomeFuncao">Nome</label>
            <input name="nomefuncao" type="text" id="nomefuncao" class="col-sm-5  form-control" value="<?php echo $funcaoEditar[0]->nomefuncao; ?>" required/>
            </div>
            <p></p>
           
            <input class="btn btn-success" type="submit" value="Salvar"/>
            <input class="btn btn-secondary" type="reset" value="Limpar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() .  'funcao'; ?>">Cancelar</a>
       
        </div>