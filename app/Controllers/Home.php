<?php

namespace App\Controllers;

use App\Models\MainModel;

class Home extends BaseController
{
	public function index()
	{
		$home = new MainModel();
		$enviar['dados'] = $home->index();
		return view('index', $enviar);
		
	}

	public function user($id){
		$parametros = [
			'id_usuario' => $id
		];
		$db = \Config\Database::connect();

		$dados = $db->query("
			SELECT * 
			FROM musicas 
			WHERE iduser = :id_usuario:
			", $parametros);

		$db->close();
		print_r($dados->getResult());
	}
	//Gera imagem
	public function img($id){
		$img = new MainModel();
		$imgdata = $img->pegaimg($id);
		$this->response->setContentType($imgdata['imgtype']);
		echo base64_decode($imgdata['img']);
	}
}
