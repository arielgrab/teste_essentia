<?php
namespace Database;

use \Database\Connection;


class Model extends Connection
{
	/**
     * conexão com o banco
     *
     * @var string
     */
    private $connect;
    /**
     * nome da table
     *
     * @var string
     */
    public $table;
 
    function __construct() 
    {
        $this->connect = parent::getInstance();
    }


    /**
     * Insere um registro no banco
     *
     * @param  array $values
     * @return bool
     */
    function insert($values)
    {
    	try {
            if (is_array($values)) {
                foreach ($values as $field => $value) {
                    if ($field) {
                        $array_values[] = $field . '=:' . $field;
                    }
                }
            }
            if (count($array_values)) {
                $str_values = implode(",", $array_values);
                $query = 'INSERT INTO ' . $this->tabela . ' SET ' . $str_values;
                
                $sth = $this->connect->prepare($query);
                $sth->execute($values);

                $result = ['status' => true, 'id' => $id];
            }
        } catch (PDOException $e) {
        	$result = ['status' => false, 'query' => $query, 'message' => $e->getMessage()];
        }
        return $result;
    }

    /**
     * Altera um determinado registro no banco
     *
     * @param  int $id
     * @param  array $values
     * @return bool
     */
    function update($id, $values)
    {
    	try {
            if (is_array($values)) {
                foreach ($values as $field => $value) {
                    if ($field) {
                        $array_values[] = $field . '=:' . $field;
                    }
                }
            }
            if (count($array_values)) {
                $str_values = implode(",", $array_values);
                $query = 'UPDATE ' . $this->tabela . ' SET ' . $str_values . ' WHERE id = :id';
                
                $sth = $this->connect->prepare($query);
                $values['id'] = $id;
                $sth->execute($values);

                $result = ['status' => true, 'id' => $id];
            }
        } catch (PDOException $e) {
        	$result = ['status' => false, 'query' => $query, 'message' => $e->getMessage()];
        }
        return $result;
    }

	/**
     * Deleta um determinado registro no banco
     *
     * @param  int $id
     * @return bool
     */
    function delete($id)
    {

    }

	/**
     * retorna todos os registros da tabela
     *
     * @param  array $params ['order', 'limit']
     * @return array
     */
    function select($params = '')
    {

    }

    /**
     * retorna um determinado registro 
     *
     * @param  int $int
     * @return array
     */
    function find($id)
    {

    }

    /**
     * executa um comando sql
     *
     * @param  string $query
     * @return array|bol
     */
    function runQuery($query)
    {

    }



} 