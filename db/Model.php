<?php
namespace Database;

use \Database\Connection;


class Model extends Connection
{
    private $connect;
 
    function __construct() 
    {
        $this->connect = parent::getInstance();
    }



    function insert()
    {
    	
    }

    function update()
    {

    }

    function delete()
    {

    }

    function selectAll()
    {

    }

    function find()
    {

    }



} 