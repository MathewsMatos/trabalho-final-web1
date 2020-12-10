<?php

require_once "../model/Estado.php";

class EstadoController extends Controller
{

    /**
     * Lista os estados
     */
    public function listar()
    {
        $estados = estado::all();
        return $this->view('gradeEstado', ['Estado' => $estados]);
    }

    /**
     * Mostrar formulario para criar um novo estado
     */
    public function criar()
    {
        return $this->view('formEstado');
    }

    /**
     * Mostrar formulário para editar um estado
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $estado = estado::find($id);

        return $this->view('formEstado', ['Estado' => $estado]);
    }

    /**
     * Salvar o estado submetido pelo formulário
     */
    public function salvar()
    {
        $estado           = new Estado;
        $estado->nome_estado     = $this->request->nome_estado;
        $estado->uf_estado = $this->request->uf_estado;
        if ($estado->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar o estado conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $estado           = estado::find($id);
        $estado->nome_estado     = $this->request->nome_estado;
        $estado->uf_estado = $this->request->uf_estado;
        $estado->regiao    = $this->request->regiao;
        $estado->codigoUf    = $this->request->codigoUf;
        $estado->save();

        return $this->listar();
    }

    /**
     * Apagar um estado conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $estado = estado::destroy($id);
        return $this->listar();
    }
}
