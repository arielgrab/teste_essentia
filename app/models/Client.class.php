<?php
namespace App;

use \Database\Model;

class Client extends Model
{
	function __construct()
	{
		$this->table = 'client';
	}
}