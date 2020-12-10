<?php
class Conexao
{
    private static $conexao;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$conexao)) {
            self::$conexao = new \PDO('mysql:host=localhost;port=3306;dbname=gcycle_db', 'root', '');
            self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$conexao->exec('set names utf8');
        }
        return self::$conexao;
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

    public function login($email,$senha){
        $stmt = $this->mysqli->prepare("SELECT email FROM tbl_func WHERE email=? and pass=?");
        $stmt->bind_param("ss",$email,$senha);
        $stmt->execute();
        $stmt->store_result();
        $rows = $stmt->num_rows;
        if ($rows>0) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
           
    }
}
