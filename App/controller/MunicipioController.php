<?php

require_once "../model/Municipio.php";

class MunicipioController extends Controller
{

    /**
     * Lista os municipios
     */
    public function listar()
    {
        $municipios = municipio::all();
        return $this->view('gradeMunicipio', ['Municipio' => $municipios]);
    }

    /**
     * Mostrar formulario para criar um novo municipio
     */
    public function criar()
    {
        return $this->view('formMunicipio');
    }

    /**
     * Mostrar formulário para editar um municipio
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $municipio = municipio::find($id);

        return $this->view('formMunicipio', ['Municipio' => $municipio]);
    }

    /**
     * Salvar o municipio submetido pelo formulário
     */
    public function salvar()
    {
        $municipio           = new Municipio;
        $municipio->nome_municipio     = $this->request->nome_municipio;
        $municipio->tipo_municipio = $this->request->tipo_municipio;
        $municipio->ponto_municipio    = $this->request->ponto_municipio;
        $municipio->un_municipio    = $this->request->un_municipio;
        if ($municipio->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar o municipio conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $municipio           = municipio::find($id);
        $municipio->nome_municipio     = $this->request->nome_municipio;
        $municipio->tipo_municipio = $this->request->tipo_municipio;
        $municipio->ponto_municipio    = $this->request->ponto_municipio;
        $municipio->un_municipio    = $this->request->un_municipio;
        $municipio->save();

        return $this->listar();
    }

    /**
     * Apagar um municipio conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $municipio = municipio::destroy($id);
        return $this->listar();
    }
}
