<?php
namespace App;

use \App\Client;


class ClientsController
{


	public function index()
	{
		$client = new Client();
		return $client->select();
	}


	public function create($post)
	{
		$client = new Client();
		$client->insert($post);

		return $client->select();
	}

	public function show($id)
	{
		$client = new Client();
		return $client->find($id);
	}
}