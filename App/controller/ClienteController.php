<?php

require_once "../model/Cliente.php";

class ClienteController extends Controller
{

    /**
     * Lista os clientes
     */
    public function listar()
    {
        $clientes = cliente::all();
        return $this->view('gradeCliente', ['Cliente' => $clientes]);
    }

    /**
     * Mostrar formulario para criar um novo cliente
     */
    public function criar()
    {
        return $this->view('formCliente');
    }

    /**
     * Mostrar formulário para editar um cliente
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $cliente = cliente::find($id);

        return $this->view('formCliente', ['Cliente' => $cliente]);
    }

    /**
     * Salvar o cliente submetido pelo formulário
     */
    public function salvar()
    {
        $cliente           = new Cliente;
        $cliente->nome_cliente     = $this->request->nome_cliente;
        $cliente->tipo_cliente = $this->request->tipo_cliente;
        $cliente->ponto_cliente    = $this->request->ponto_cliente;
        $cliente->un_cliente    = $this->request->un_cliente;
        if ($cliente->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar o cliente conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $cliente           = cliente::find($id);
        $cliente->nome_cliente     = $this->request->nome_cliente;
        $cliente->tipo_cliente = $this->request->tipo_cliente;
        $cliente->ponto_cliente    = $this->request->ponto_cliente;
        $cliente->un_cliente    = $this->request->un_cliente;
        $cliente->save();

        return $this->listar();
    }

    /**
     * Apagar um cliente conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $cliente = cliente::destroy($id);
        return $this->listar();
    }
}
