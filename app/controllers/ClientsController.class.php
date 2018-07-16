<?php
namespace App;

use \App\Client;
use \App\Helper;


class ClientsController
{

	private $model;

	function __construct(){
		$this->model = new Client();
	}
	/**
	 * exibe uma lista de clientes
	 * @return array
	 */
	public function index()
	{
		return $this->model->select();
	}

	/**
	 * cria um novo cliente
	 * @param array $post 
	 * @param array $files 
	 * @return array
	 */
	public function create($post, $file = [])
	{
		if($file['avatar']['name'] != ""){
			$image = $this->uploadImage($file);
			$post['image'] = $image;
		}
		$result = $this->model->insert($post);

		Helper::redirect('/');
	}

	/**
	 * exibe um determinado cliente
	 * @param int $id 
	 * @return array
	 */
	public function show($id)
	{
		return $this->model->find($id);
	}

	/**
	 * exibe um determinado cliente na tela de edição
	 * @param type $id 
	 * @return type
	 */
	public function edit($id)
	{
		return $this->model->find($id);
	}

	/**
	 * altera um determinado cliente
	 * @param int $id 
	 * @param array $post 
	 * @param array $file 
	 * @return array
	 */
	public function update($id, $post, $file = [])
	{
		if($file['avatar']['name'] != ""){
			$this->destroyPreviousImg($id);
			$image = $this->uploadImage($file);
			$post['image'] = $image;
		}
		$this->model->update($id, $post);

		Helper::redirect('/');
	}

	/**
	 * exclui um determinado cliente
	 * @param int $id 
	 * @return array
	 */
	public function delete($id)
	{
		$this->destroyPreviousImg($id);
		$this->model->delete($id);

		Helper::redirect('/');
	}


	/**
	 * verifica a extensão, renomeia e faz o upload da imagem
	 * @param array $file 
	 * @return string 
	 */
	private function uploadImage($file)
	{
		if ($file['avatar']['name'] != "") {
            $path_parts = pathinfo($file['avatar']['name']);
            $permited_extensions = array('GIF', 'PNG', 'JPG', 'JPEG');
            if (in_array(strtoupper($path_parts['extension']), $permited_extensions)) {
            	$avatar_name = uniqid('IMG_') . '.' . $path_parts['extension'];
				$uploadfile = ROOT_DIR . '/uploads/' . $avatar_name;
                move_uploaded_file($file['avatar']['tmp_name'], $uploadfile);
				unlink($file['avatar']['tmp_name']);
            }
            return $avatar_name;
        }

	}

	/**
	 * exclui a imagem de um determinado cliente
	 * @param int $id 
	 * @return type
	 */
	private function destroyPreviousImg($id)
	{
		$client = $this->model->find($id);
		if($client['image']){
			unlink(ROOT_DIR . '/uploads/' . $client['image']);
		}
	}


}