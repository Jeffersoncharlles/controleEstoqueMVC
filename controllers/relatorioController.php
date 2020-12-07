<?php
class relatorioController extends Controller {

    private $user;

    public function __construct(){
        parent::__construct();

        $this->user = new Users();
        if(!$this->user->checkLogin()){
            header("Location: ".BASE_URL."login");
            exit;
        }
    }

    public function index() {
        $data = array(
            'menu' => array(
                BASE_URL => 'Voltar',
                BASE_URL.'home/add' => 'Adicionar Produto',
                BASE_URL.'login/sair' => 'Sair'
            )
        );
        $p = new Products();

        $data['list'] = $p->getLowQuantityProducts();


        $this->loadTemplate('relatorio', $data);
    }
}