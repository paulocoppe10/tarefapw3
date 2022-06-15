<?php

namespace App\Controllers;
use App\Models\VeiculoModel;
use App\Models\PessoasModel;

class Home extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('principal');        
        echo view('template/footer');
    }

    public function page($page='principal'){
        echo view('template/header');
        echo view($page);        
        echo view('template/footer');   
    }

    public function veiculo(){
        $model = new VeiculoModel();

        $data = [
            'title'     =>  'Veículos',
            'veiculo'   =>  $model->getVeiculos(),
        ];

        echo view('template/header');
        echo view('veiculo', $data);
        echo view('template/footer');
    }

    public function cadastro(){
        echo view('template/header');
        echo view('cadastroveiculo');
        echo view('template/footer');
    }
    public function gravar(){
        $model = new VeiculoModel();

        $model->save([
            'id' => $this->request->getVar('id'),
            'modelo' => $this->request->getVar('modelo'),
            'marca' => $this->request->getVar('marca'),
            'ano' => $this->request->getVar('ano')
        ]);

        return redirect('veiculo');
    }

    public function excluir($id = null){
        $model = new VeiculoModel();
        $model->delete($id);
        return redirect("veiculo");
    }

    public function editar($id = null){
        $model = new VeiculoModel();

        $data = [
            'veiculo' => $model->getVeiculo($id)
        ];

        echo view('template/header');
        echo view('cadastroveiculo',$data);
        echo view('template/footer');
    }




    public function pessoas(){
        $model = new PessoasModel();

        $data = [
            'title'=>'Pessoas',
            'pessoas'=>$model->getPessoas(),
            'session' =>\Config\Services::session()
        ];

        if(!$data['session']->get('logado')){
            return redirect("login");
        }

        echo view('template/header');
        echo view('pessoa',$data);
        echo view('template/footer');
    }


    public function login(){
        echo view('template/header');
        echo view('login');
        echo view('template/footer');
    }

    public function logar(){
       $model = new PessoasModel();

        $senha = $this->request->getVar("senha");
        $nome = $this->request->getVar("nome");

        $data['usuario'] = $model->userLogin($nome, $senha);
        $data['session'] = \Config\Services::session();

        if(empty($data['usuario'])){
            return redirect("login");
        }else{
            $sessionData = [
               'usuario' => $nome,
               'logado' => TRUE
            ];
            $data['session']->set($sessionData);
            return redirect("veiculo");

        }
    }

    public function sair(){       
        $data['session'] = \Config\Services::session();       
        $data['session']->destroy();
        return redirect("login");      
    }

}
