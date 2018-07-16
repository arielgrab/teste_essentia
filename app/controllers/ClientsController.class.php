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

	public function edit($id)
	{
		$client = new Client();
		return $client->find($id);
	}

	public function update($id, $post)
	{
		$client = new Client();
		$client->update($id, $post);

		return $client->select();
	}

	public function delete($id)
	{
		$client = new Client();
		$client->delete($id);

		return $client->select();
	}

}