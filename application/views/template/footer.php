
<script href="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script> 
<script href="<?php echo base_url('assets/js/pagina.js') ?>"></script> 

<!--Datatable-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.js"></script>




    
<?php if($this->session->flashdata('sucesso')){ ?>
    <script>
        $.bootstrapGrowl("Cadastro realizado com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 'auto', // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });</script>
<?php } elseif ($this->session->flashdata('falha')) {
    ?>
    <script>
        $.bootstrapGrowl("Erro ao cadastrar contato!", {
            ele: 'body', // which element to append to
            type: 'error', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    <?php } elseif ($this->session->flashdata('sucessoA')) {
    ?>
     <script>
        $.bootstrapGrowl("Cadastrado atualizado com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>

<?php } elseif ($this->session->flashdata('FalhaA')) {
    ?>
    <script>
        $.bootstrapGrowl("Erro ao atualizar!", {
            ele: 'body', // which element to append to
            type: 'danger', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>

<?php } elseif ($this->session->flashdata('excluirS')) {
    ?>
    <script>
        $.bootstrapGrowl("Função excluída com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>

<?php } elseif ($this->session->flashdata('excluirF')) {
    ?>
    <script>
        $.bootstrapGrowl("Falha ao excluir função!", {
            ele: 'body', // which element to append to
            type: 'danger', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
    <?php } elseif ($this->session->flashdata('excluirV')) {
    ?>
    <script>
        $.bootstrapGrowl("Contato excluído com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
    <?php } elseif ($this->session->flashdata('excluirB')) {
    ?>
    <script>
        $.bootstrapGrowl("Falha ao excluír contato!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
        <?php } elseif ($this->session->flashdata('atualizarA')) {
    ?>
    <script>
        $.bootstrapGrowl("Contato atualizado com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>

           <?php } elseif ($this->session->flashdata('atualizarB')) {
    ?>
    <script>
        $.bootstrapGrowl("Erro ao atualizar contato!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
               <?php } elseif ($this->session->flashdata('salvarH')) {
    ?>
    <script>
        $.bootstrapGrowl("Função cadastrada com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
                   <?php } elseif ($this->session->flashdata('salvarJ')) {
    ?>
    <script>
        $.bootstrapGrowl("Falha ao cadastrar função!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
            <?php } elseif ($this->session->flashdata('atualizarH')) {
    ?>
    <script>
        $.bootstrapGrowl("Função atualizada com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
                <?php } elseif ($this->session->flashdata('atualizarJ')) {
    ?>
    <script>
        $.bootstrapGrowl("Erro ao atualizar função!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
                    <?php } elseif ($this->session->flashdata('cadusu')) {
    ?>
    <script>
        $.bootstrapGrowl("Usuário cadastrado com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
                    <?php } elseif ($this->session->flashdata('cadusoerro')) {
    ?>
    <script>
        $.bootstrapGrowl("Erro ao cadastrar usuário!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
                        <?php } elseif ($this->session->flashdata('exsucess')) {
    ?>
    <script>
        $.bootstrapGrowl("Usuário excluído com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
                        <?php } elseif ($this->session->flashdata('exerro')) {
    ?>
    <script>
        $.bootstrapGrowl("Erro ao excluir usuário!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
                            <?php } elseif ($this->session->flashdata('editsuc')) {
    ?>
    <script>
        $.bootstrapGrowl("Usuário atualizado com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
                            <?php } elseif ($this->session->flashdata('editerro')) {
    ?>
    <script>
        $.bootstrapGrowl("Erro ao atualizar usuario!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
                                <?php } elseif ($this->session->flashdata('sairA')) {
    ?>
    <script>
        $.bootstrapGrowl("Você se desconectou!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
    
                                    <?php } elseif ($this->session->flashdata('sairB')) {
    ?>
    <script>
        $.bootstrapGrowl("Erro ao se desconectar!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>

    
<?php } ?>
    
    </body>
</html>
