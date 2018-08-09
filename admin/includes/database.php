<?php
/**
 * Created at:
 * Date: 08.08.2018
 * Time: 23:26
 */

require_once ('new_config.php');

class Database
{

    public $connection;


    function __construct(){

        $this->openDbConnection();

    }



    public function openDbConnection(){

        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->connection->connect_errno) {
            die("DB connection failed: <br>" . $this->connection->connect_error);
        }

    }

    public function query($sql){

        $result = $this->connection->query($sql);

        $this->confirmQuery($result);

        return $result;

    }

    private function confirmQuery($result){

        if (!$result) {
            die("DB connection failed!: <br>" . $this->connection->error);
        }

    }

    public function escapeString($string) {

        $escapedString = $this->connection->real_escape_string($string);
        return $escapedString;

    }

    public function insertId() {
        return $this->connection->insert_id;
    }

} //end of class

$database = new Database();


