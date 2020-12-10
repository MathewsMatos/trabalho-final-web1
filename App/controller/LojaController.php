<?php

require_once "../model/Loja.php";

class StoreController extends Controller
{

    /**
     * Lista os stores
     */
    public function listar()
    {
        $stores = store::all();
        return $this->view('gradeLoja', ['Store' => $stores]);
    }

    /**
     * Mostrar formulario para criar um novo store
     */
    public function criar()
    {
        return $this->view('formLoja');
    }

    /**
     * Mostrar formulário para editar um store
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $store = store::find($id);

        return $this->view('formLoja', ['Store' => $store]);
    }

    /**
     * Salvar o store submetido pelo formulário
     */
    public function salvar()
    {
        $store           = new Store;
        $store->nome_store     = $this->request->nome_store;
        $store->endereco_store = $this->request->endereco_store;
        $store->descricao_store    = $this->request->descricao_store;
        $store->municipio_store    = $this->request->municipio_store;
        $store->ativo_store    = $this->request->ativo_store;
        if ($store->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar o store conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $store           = store::find($id);
        $store->nome_store     = $this->request->nome_store;
        $store->endereco_store = $this->request->endereco_store;
        $store->descricao_store    = $this->request->descricao_store;
        $store->municipio_store    = $this->request->municipio_store;
        $store->ativo_store    = $this->request->ativo_store;
        $store->save();

        return $this->listar();
    }

    /**
     * Apagar um store conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $store = store::destroy($id);
        return $this->listar();
    }
}
