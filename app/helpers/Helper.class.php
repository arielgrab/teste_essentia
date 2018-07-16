<?php

namespace App;


class Helper
{

	/**
	 * retorna um botão para a action delete
	 * @param string $model 
	 * @param int $id 
	 * @return string 
	 */
	static function delete($model, $id)
	{
		return '<form action="/'.$model.'/delete/'.$id.'" method="DELETE"><button type="submit" class="btn btn-danger"> <i class="glyphicon glyphicon-trash" aria-hidden="true"></i></button></form>';
	}

	/**
	 * formata uma data
	 * @param date|string $date 
	 * @param string $format 
	 * @return date|string
	 */
	static function date_format($date, $format = '')
	{
		$format = $format ? $format : 'd/m/Y H:i';
		return date($format, strtotime($date));
	}

	/**
	 * helper para tag de imagem
	 * @param string $src 
	 * @param string $class 
	 * @return string
	 */
	static function img($src = '', $class = '')
	{
		return $src ? '<img src="'.ROOT_URL.'/uploads/' . $src . '" class="'.$class.'">' : '';
	}

	/**
	 * redirecina para alguma rota
	 * @param string $where
	 * 
	 */
	static function redirect($where = '')
	{
		if($where){
			header('Location: ' . $where); 
		}
	}
}