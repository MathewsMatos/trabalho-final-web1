<?php

require_once "../core/Conexao.php";

class Troca
{
    private $atributos;
 
    public function __construct()
    {
 
    }
 
    public function __set(string $atributo, $valor)
    {
        $this->atributos[$atributo] = $valor;
        return $this;
    }
 
    public function __get(string $atributo)
    {
        return $this->atributos[$atributo];
    }
 
    public function __isset($atributo)
    {
        return isset($this->atributos[$atributo]);
    }
 
    /**
     * Salvar o troca
     * @return boolean
     */
    public function save()
    {
        $colunas = $this->preparar($this->atributos);
        if (!isset($this->id_troca)) {
            $query = "INSERT INTO tbl_troca (".
                implode(', ', array_keys($colunas)).
                ") VALUES (".
                implode(', ', array_values($colunas)).");";
        } else {
            foreach ($colunas as $key => $value) {
                if ($key !== 'id_troca') {
                    $definir[] = "{$key}={$value}";
                }
            }
            $query = "UPDATE tbl_troca SET ".implode(', ', $definir)." WHERE id_troca='{$this->id_troca}';";
        }
        if ($conexao = Conexao::getInstance()) {
            $stmt = $conexao->prepare($query);
            if ($stmt->execute()) {
                return $stmt->rowCount();
            }
        }
        return false;
    }
 
    /**
     * Tornar valores aceitos para sintaxe SQL
     * @param type $dados
     * @return string
     */
    private function escapar($dados)
    {
        if (is_string($dados) & !empty($dados)) {
            return "'".addslashes($dados)."'";
        } elseif (is_bool($dados)) {
            return $dados ? 'TRUE' : 'FALSE';
        } elseif ($dados !== '') {
            return $dados;
        } else {
            return 'NULL';
        }
    }
 
    /**
     * Verifica se dados são próprios para ser salvos
     * @param array $dados
     * @return array
     */
    private function preparar($dados)
    {
        $resultado = array();
        foreach ($dados as $k => $v) {
            if (is_scalar($v)) {
                $resultado[$k] = $this->escapar($v);
            }
        }
        return $resultado;
    }
 
    /**
     * Retorna uma lista de Trocas
     * @return array/boolean
     */
    public static function all()
    {
        $conexao = Conexao::getInstance();
        $stmt    = $conexao->prepare("SELECT * FROM tbl_troca;");
        $result  = array();
        if ($stmt->execute()) {
            while ($rs = $stmt->fetchObject(Troca::class)) {
                $result[] = $rs;
            }
        }
        if (count($result) > 0) {
            return $result;
        }
        return false;
    }
 
    /**
     * Retornar o número de registros
     * @return int/boolean
     */
    public static function count()
    {
        $conexao = Conexao::getInstance();
        $count   = $conexao->exec("SELECT count(*) FROM tbl_troca;");
        if ($count) {
            return (int) $count;
        }
        return false;
    }
 
    /**
     * Encontra um recurso pelo id
     * @param type $id
     * @return type
     */
    public static function find($id)
    {
        $conexao = Conexao::getInstance();
        $stmt    = $conexao->prepare("SELECT * FROM tbl_troca WHERE id_troca='{$id}';");
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $resultado = $stmt->fetchObject('Troca');
                if ($resultado) {
                    return $resultado;
                }
            }
        }
        return false;
    }
 
    /**
     * Destruir um recurso
     * @param type $id_troca
     * @return boolean
     */
    public static function destroy($id)
    {
        $conexao = Conexao::getInstance();
        if ($conexao->exec("DELETE FROM tbl_troca WHERE id_troca='{$id}';")) {
            return true;
        }
        return false;
    }

}