<?php
class ajaxController extends controller{
    
    public function index(){
        $dados = array();
    }
    
    public function getUF(){
        $dados = array();
        
        $c = new cidadeEstado();
        $dados['uf'] = $c->getUF();
        print_r($dados['uf']);
        echo json_encode($dados);
    }
}