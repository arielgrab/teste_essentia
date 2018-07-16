<?php

namespace App;


class Helper
{
	static function delete($model, $id)
	{
		return '<form action="/'.$model.'/delete/'.$id.'" method="DELETE"><button type="submit" class="btn btn-danger"> <i class="glyphicon glyphicon-trash" aria-hidden="true"></i></button></form>';
	}
}