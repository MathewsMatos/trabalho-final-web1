<?php

require_once "../model/Resgate.php";

class ResgateController extends Controller
{

    /**
     * Lista os resgates
     */
    public function listar()
    {
        $resgates = resgate::all();
        return $this->view('gradeResgate', ['Resgate' => $resgates]);
    }

    /**
     * Mostrar formulario para criar um novo resgate
     */
    public function criar()
    {
        return $this->view('formResgate');
    }

    /**
     * Mostrar formulário para editar um resgate
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $resgate = resgate::find($id);

        return $this->view('formResgate', ['Resgate' => $resgate]);
    }

    /**
     * Salvar o resgate submetido pelo formulário
     */
    public function salvar()
    {
        $resgate           = new Resgate;
        $resgate->id_use     = $this->request->id_user;
        $resgate->id_product = $this->request->id_product;
        $resgate->id_store    = $this->request->id_store;
        $resgate->custo_resgate    = $this->request->custo_resgate;
        $resgate->cupom_resgate    = Resgate::generateCouponCode(6);
        if ($resgate->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar o resgate conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $resgate           = resgate::find($id);
        $resgate->nome_resgate     = $this->request->nome_resgate;
        $resgate->tipo_resgate = $this->request->tipo_resgate;
        $resgate->ponto_resgate    = $this->request->ponto_resgate;
        $resgate->un_resgate    = $this->request->un_resgate;
        $resgate->save();

        return $this->listar();
    }

    /**
     * Apagar um resgate conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $resgate = resgate::destroy($id);
        return $this->listar();
    }
}
