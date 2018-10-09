<div class="container"> 

    <div class="row"></div>
     <?php
        // put your code here
        //echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>        
    <font style="font-family:Century Gothic"> <h3>Cadastro de Contatos:</h3>
    <p></p>
    <p></p>
        <?php echo form_open('contato/inserir'); ?>
        <div group
             
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input name="nome" type="text" class="col-sm-6  form-control" id="nome" placeholder="Nome"> 
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input name="email" type="email" class="col-sm-6  form-control" id="email" required="true"  placeholder="E-mail">
        </div>
        
        <div class="form-group">
            <label for="email">Função:</label>
            <select class="col-sm-6  form-control" id="idfuncao" name="idfuncao" type="funcao" required/>
            <option> Selecionar Função... </option>
            <?php foreach ($funcao as $funcao) : ?>
            <option value="<?php echo $funcao->idfuncao; ?>"><?php echo $funcao->nomefuncao; ?></option>
                    <?php                            endforeach;?>
        </select>
 
            <p></p>
        <input class="btn btn-success" type="submit" class="btn btn-success" value="Salvar"/>
        <input class="btn btn-secondary" type="reset" class="btn btn-dark" value="Limpar"/>
        <input class="btn btn-dark" id="btn-lista" value="Listar Contatos"/>
        <?php form_close(); ?>
        <p></p>
       
                    <br>
<body background="imagens/ronaldo.jpg" height="100%" width="100%">
</body>
     </br>




        <div>
            <div id="div-lista" class="hide">
                
            <table id="contato" class="table table-striped">
                <thead class="thead-dark">

                    <tr>
                        <th class="table-dark">Nome</th>
                        <th class="table-dark">Email</th>
                        <th class="table-dark">Função</th>
                        <th class="table-dark">Funções</th>
                    </tr>
                </thead>
                <thead>
                <tbody>
                    <?php if ($contatos == FALSE): ?>
                        <tr><td>Nenhum contato encontrado!</td></tr>
                    <?php else: ?>
                        <?php foreach ($contatos as $row): ?>
                            <tr>
                                <td><?php echo $row->nome; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->nomefuncao; ?></td>
                                <td>
                                    <a class="btn btn-dark" 
                                       href="<?php echo base_url() .
                    'contato/editar/' . $row->id;
                            ?>">Editar</a>
                                    |
                                    <a <a class="btn btn-danger"
                                          href="<?php echo base_url() . ''
                               . 'contato/excluir/' . $row->id;
                               ?>">Excluir</a>
                                </td>
                            </tr>
                            
    <?php endforeach; ?>
<?php endif; ?>
                </tbody>
            </table>
        
        <a class="btn btn-outline-secondary"
           href="<?php echo base_url() .
 'home';
?>">Voltar</a>
    </div>

   <script type="text/javascript">
        $("#btn-lista").click(function () {
            $("#div-lista").toggleClass("hide");
        });


        $(document).ready(function () {
            $('#contato').DataTable({
                language: {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                },

                iDisplayLength: 10,
                dom: 'Bfrtip',
                buttons: [
                    'copy',
                    'excel',
                    'print',
                    'pdf'
                ]

            });
        });
    </script> 