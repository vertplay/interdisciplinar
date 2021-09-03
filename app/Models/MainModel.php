<?php namespace App\Models;

use CodeIgniter\Model;

class MainModel extends Model{


    public function index() : array{
        $db = \Config\Database::connect();
		$dados = $db->query("
		SELECT id, nome
		FROM vw_usuariosmusicas
		LIMIT 0, 10")->getResultArray();
		$db->close();
        return $dados;
    }

	public function pegaimg($id) : array{
		$db = \Config\Database::connect();
		$dados = $db->query("
		SELECT img, imgtype
		FROM usuarios
		WHERE id = $id")->getResultArray();
		$db->close();
		return $dados[0];
	}
}