<?php
use App\Core\controller;
class users extends controller
{
    protected $nome;
    public function Cadastrar()
    {
        
        
        $this->view('users/cadastro');
    }
    public function Logar()
    {
        $this->view('users/login');
    }
}