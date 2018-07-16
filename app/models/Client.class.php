<?php
namespace App;

use \Database\Model;

class Client extends Model
{
	function __construct()
	{
		parent::__construct();
		$this->table = 'clients';
		$this->fields = ['name', 'email', 'tel', 'image'];
	}
}