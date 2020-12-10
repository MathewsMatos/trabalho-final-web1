<?php

require_once "../model/Produto.php";

class ProdutoController extends Controller
{

    /**
     * Lista os produtos
     */
    public function listar()
    {
        $produtos = produto::all();
        return $this->view('gradeProduto', ['Produto' => $produtos]);
    }

    /**
     * Mostrar formulario para criar um novo produto
     */
    public function criar()
    {
        return $this->view('formProduto');
    }

    /**
     * Mostrar formulário para editar um produto
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $produto = produto::find($id);

        return $this->view('formProduto', ['Produto' => $produto]);
    }

    /**
     * Salvar o produto submetido pelo formulário
     */
    public function salvar()
    {
        $produto           = new Produto;
        $produto->nome_produto     = $this->request->nome_produto;
        $produto->tipo_produto = $this->request->tipo_produto;
        $produto->ponto_produto    = $this->request->ponto_produto;
        $produto->un_produto    = $this->request->un_produto;
        if ($produto->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar o produto conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $produto           = produto::find($id);
        $produto->nome_produto     = $this->request->nome_produto;
        $produto->tipo_produto = $this->request->tipo_produto;
        $produto->ponto_produto    = $this->request->ponto_produto;
        $produto->un_produto    = $this->request->un_produto;
        $produto->save();

        return $this->listar();
    }

    /**
     * Apagar um produto conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $produto = produto::destroy($id);
        return $this->listar();
    }
}
