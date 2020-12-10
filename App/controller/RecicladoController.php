<?php

require_once "../model/Reciclado.php";

class RecicladoController extends Controller
{

    /**
     * Lista os reciclados
     */
    public function listar()
    {
        $reciclados = reciclado::all();
        return $this->view('gradeReciclado', ['Reciclado' => $reciclados]);
    }

    public function allRecic()
    {
        $reciclados = reciclado::all();
        return $reciclados;
    }

    /**
     * Mostrar formulario para criar um novo reciclado
     */
    public function criar()
    {
        return $this->view('formReciclado');
    }

    /**
     * Mostrar formulário para editar um reciclado
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $reciclado = reciclado::find($id);

        return $this->view('formReciclado', ['Reciclado' => $reciclado]);
    }

    /**
     * Salvar o reciclado submetido pelo formulário
     */
    public function salvar()
    {
        $reciclado           = new Reciclado;
        $reciclado->nome_reciclado     = $this->request->nome_reciclado;
        $reciclado->tipo_reciclado = $this->request->tipo_reciclado;
        $reciclado->ponto_reciclado    = $this->request->ponto_reciclado;
        $reciclado->un_reciclado    = $this->request->un_reciclado;
        if ($reciclado->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar o reciclado conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $reciclado           = reciclado::find($id);
        $reciclado->nome_reciclado     = $this->request->nome_reciclado;
        $reciclado->tipo_reciclado = $this->request->tipo_reciclado;
        $reciclado->ponto_reciclado    = $this->request->ponto_reciclado;
        $reciclado->un_reciclado    = $this->request->un_reciclado;
        $reciclado->save();

        return $this->listar();
    }

    /**
     * Apagar um reciclado conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $reciclado = reciclado::destroy($id);
        return $this->listar();
    }
}
