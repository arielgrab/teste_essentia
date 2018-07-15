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
    protected $table;
    /**
     * campos da tabela
     *
     * @var string
     */
    protected $fields;
 
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
                $values = $this->filter($values);

                foreach ($values as $field => $value) {
                    if ($field) {
                        $array_values[] = $field . '=:' . $field;
                    }
                }
                $array_values[] = 'created_at = :created_at';
                $array_values[] = 'updated_at = :updated_at';
                $values['created_at'] = date('Y-m-d H:i:s');
                $values['updated_at'] = date('Y-m-d H:i:s');
            }
            if (count($array_values)) {
                $str_values = implode(",", $array_values);
                $query = 'INSERT INTO ' . $this->table . ' SET ' . $str_values;
                
                $sth = $this->connect->prepare($query);
                $sth->execute($values);
                $id = $this->connect->lastInsertId();

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
                $array_values[] = 'updated_at = :updated_at';
                $values['updated_at'] = date('Y-m-d H:i:s');
            }
            if (count($array_values)) {
                $str_values = implode(",", $array_values);
                $query = 'UPDATE ' . $this->table . ' SET ' . $str_values . ' WHERE id = :id';
                
                $stmt = $this->connect->prepare($query);
                $values['id'] = $id;
                $stmt->execute($values);

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
     * @return array
     */
    function select()
    {
        $query = 'SELECT * FROM ' . $this->table;

        try {
            $stmt = $this->connect->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    /**
     * retorna um determinado registro 
     *
     * @param  int $int
     * @return array|bol
     */
    function find($id)
    {
        if(!$id){
            return false;
        }
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id = :id';

        try {
            $stmt = $this->connect->prepare($query);
            $values['id'] = $id;
            $stmt->execute($values);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
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

    /**
     * filtra os campos do request
     *
     * @param  array $request
     * @return array
     */
    function filter($request){
        if(!count($request)){
            return false;
        }
        if(!count($this->fields)){
            return false;
        }
        foreach ($request as $field => $value) {
            if(!in_array($field, $this->fields)){
                unset($request[$field]);
            }
        }
        return $request;
    }


} 