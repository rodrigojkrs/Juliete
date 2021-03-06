<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

<!--        <title>Meu Projeto Framework</title>-->

        <!--Bootstrap-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">  
        <link href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>" rel="stylesheet">  
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">  
        
        
<!--        Login-->

<script src="vendor/animsition/js/animsition.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<script src="vendor/countdowntime/countdowntime.js"></script>
<script src="js/main.js"></script>
<link rel="icon" type="image/png" href="images/icons/favicon.ico">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">




        <!--Datatable-->

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        

    </head>
    

    <body>
        

        <?php if ($this->session->userdata('estou_logado')) { ?>
            <div class="container"  >
                <style>
/*        .navbar
        {
            border:1px solid #0000FF;
        }*/
      </style>
                <nav class="navbar navbar-expand-lg navbar navbar-light">
                    <a class="navbar-brand" href="home" <font style="font-family:Century Gothic"> Sistema Ti-N4</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="home" <font style="font-family:Century Gothic"> Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" 
                                   aria-expanded="false">  <font style="font-family:Century Gothic">
                                    Opções
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url() . 'contato' ?>">Contato</a>
                                    <?php if($this->session->userdata('logado')->perfilacesso == 'ADM'){?>
                                    <div class="dropdown-divider"></div>                                    
                                    <a class="dropdown-item" href="<?php echo base_url() . 'funcao' ?>">Função</a>
                                    <a class="dropdown-item" href="<?php echo base_url() . 'usuario' ?>">Usuário</a>
                                    <?php }?>
                                </div>
                            </li>
                        </ul>
                    </div>
                      <?php
                    if ($this->session->userdata('estou_logado')) {
                        echo $this->session->userdata('logado')->nomeusuario;
                        ?>
                        &nbsp;<a class="btn btn-primary mb-2" href="<?php echo base_url() . 'login/sair'; ?>">Sair</a>
                    <?php } ?>
                </nav>
            </div>
        
        <?php }?>