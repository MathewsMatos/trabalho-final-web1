<?php

require_once "../model/Troca.php";

class TrocaController extends Controller
{

    /**
     * Lista os trocas
     */
    public function listar()
    {
        $trocas = troca::all();
        return $this->view('gradeTroca', ['Troca' => $trocas]);
    }

    /**
     * Mostrar formulario para criar um novo troca
     */
    public function criar()
    {
        return $this->view('formTroca');
    }

    /**
     * Mostrar formulário para editar um troca
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $troca = troca::find($id);

        return $this->view('formTroca', ['Troca' => $troca]);
    }

    /**
     * Salvar o troca submetido pelo formulário
     */
    public function salvar()
    {
        $troca           = new Troca;
        $troca->id_troca     = $this->request->id_troca;
        $troca->idReciclado_troca     = $this->request->idReciclado_troca;
        $troca->cliente_troca = $this->request->cliente_troca;
        $troca->funcionario_troca = $this->request->funcionario_troca;
        $troca->qtdPonto_troca    = $this->request->qtdPonto_troca;
        $troca->qtdReciclado_troca    = $this->request->qtdReciclado_troca;
        $troca->data_troca     = $this->request->data_troca;
        if ($troca->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar o troca conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $troca           = troca::find($id);
        $troca->id_troca     = $this->request->id_troca;
        $troca->idReciclado_troca     = $this->request->idReciclado_troca;
        $troca->cliente_troca = $this->request->cliente_troca;
        $troca->funcionario_troca = $this->request->funcionario_troca;
        $troca->qtdPonto_troca    = $this->request->qtdPonto_troca;
        $troca->qtdReciclado_troca    = $this->request->qtdReciclado_troca;
        $troca->data_troca     = $this->request->data_troca;
        $troca->save();

        return $this->listar();
    }

    /**
     * Apagar um troca conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $troca = troca::destroy($id);
        return $this->listar();
    }
}
