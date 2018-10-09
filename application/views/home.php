<div class="container"> 

        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>       
         <font style="font-family:Century Gothic"> <h2>Gerenciamento:</h2>
        <p></p>
        <br>
        <a class="btn btn-info" href="<?php echo base_url() . 
                                            'contato' ; ?>">Contatos</a>  
        <p></p>
        <br>
        <?php if($this->session->userdata('logado')->perfilacesso == 'ADM'){?>
        <a class="btn btn-info" href="<?php echo base_url() . 
                                            'funcao' ; ?>">Função</a> 
        <p></p>
        <br>
        <a class="btn btn-info" href="<?php echo base_url() . 
                                            'usuario' ; ?>">Usuario</a> 
        <p></p>
        <br>
        <a class="btn btn-info" href="<?php echo base_url() . 
                                            'teste' ; ?>">teste</a> 
<!--        <p></p>
        <a class="btn btn-info" href="<?php echo base_url() . 
                                            'login' ; ?>">Login</a> -->
        <p></p>
        <br>
<!--        <a class="btn btn-info" href="<?php echo base_url() . 
                                            'login/sair' ; ?>">Sair</a> -->
        <?php } ?>

            <br>
<body background="imagens/ronaldo.jpg" height="100%" width="100%">
</body>
     </br>
     
     </div>
        
        
        