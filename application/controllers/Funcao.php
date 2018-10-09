<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Funcao extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata ('estou_logado')) {
            redirect ('Login');
        } elseif ($this->session->userdata('logado')->perfilacesso=="USER") {
            redirect('home');
        }
        $this->load->model('Funcao_model', 'funcao');
        //contatos é um alias para o Contatos_model
    }
 
    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['funcao'] = $this->funcao->listar();
        $this->load->view('funcao', $dados);
        $this->load->view('template/footer');
    }
 
    public function inserir() {
        $dados['nomefuncao'] = $this->input->post('nomefuncao');
        $result = $this->funcao->inserir($dados);
                 if ($result == true) {
            $this->session->set_flashdata('salvarH', 'msg');
        redirect('funcao');
        } else {
            $this->session->set_flashdata('salvarJ', 'msg');
            redirect('funcao');
        }
    }
 
    public function excluir($id) {
        $result = $this->funcao->deletar($id);
        if ($result == true) {
            $this->session->set_flashdata('excluirS', 'msg');
        redirect('funcao');
        } else {
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('funcao');
        }
    }
 
    function editar($id) {
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['funcaoEditar'] = $this->funcao->editar($id);
        $this->load->view('funcaoEditar', $data);
        $this->load->view('template/footer');
    }
 
    public function atualizar() {
        $data['idfuncao'] = $this->input->post('idfuncao');
        $data['nomefuncao'] = $this->input->post('nomefuncao');
        $result = $this->funcao->atualizar($data);
                if ($result == true) {
            $this->session->set_flashdata('atualizarH', 'msg');
        redirect('funcao');
        } else {
            $this->session->set_flashdata('atualizarJ', 'msg');
            redirect('funcao');
    }
 
}
}