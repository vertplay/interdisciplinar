<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    public function novoUsuario($parametros) : array{
        
        $erros = [];
        $db = \Config\Database::connect();
    
        $dados = $db->query('
            INSERT INTO usuarios
            (login, senha, img, imgtype)
            VALUES(:login:, :senha:, ":img:", :imgtype:)
            ', $parametros);
        if($dados){
            $erros[] .= "sucesso";
        }
        else{
            $erros[] .= "Falha";
        }
        $db->close();
        
        return $erros;
    }
}