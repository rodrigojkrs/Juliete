<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $this->load->view('login');
        $this->load->view('template/footer');
    }

    public function autenticar() {
        $usuario = mb_convert_case($this->input->post('usuario'), MB_CASE_LOWER);
        $senha = md5($this->input->post('senha'));
        $this->db->where('user', $usuario);
        $this->db->where('senha', $senha);
        $usuario_logado = $this->db->get('usuario')->result();
        if (count($usuario_logado) == 1) {
            $dados['logado'] = $usuario_logado[0];
            $dados['estou_logado'] = TRUE;
            $this->session->set_userdata($dados);
            redirect('Home');
        } else {
            $dados['logado'] = NULL;
            $dados['estou_logado'] = FALSE;
            redirect('Login');
        }
    }
    public function sair() {
        $dados['logado'] = NULL;
        $dados['estou_logado'] = FALSE;
        $result = $this->session->set_userdata($dados);
                        if ($result == true) {
            $this->session->set_flashdata('sairB', 'msg');
        redirect('Login');
        } else {
            $this->session->set_flashdata('sairA', 'msg');
            redirect('Login');
    }
    }


}
