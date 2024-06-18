<?php
require 'const.php'; 

class Database {
    public $host = HOST; 
    public $server_user = USER;
    public $pass = PASSWORD; 
    public $dbname = DBNAME; 
    public $con;

    public function __construct() {
        try {
            $this->con = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->server_user, $this->pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function selectAll($sql_command) {
        try {
            $query = $this->con->query($sql_command);
            $query->execute();
            $allrows = $query->fetchAll(PDO::FETCH_OBJ); 
            return $allrows;
        } catch(PDOException $e) {
            echo "Select error: " . $e->getMessage();
            return false;
        }
    }

    public function insert($sql_command, $record_arr) {
        if (!empty($record_arr)) {
            try {
                $insert = $this->con->prepare($sql_command);
                $insert->execute($record_arr);
                echo "Record inserted successfully";
            } catch(PDOException $e) {
                echo "Insert error: " . $e->getMessage();
            }
        } else {
            echo "Insert error: record array is empty";
        }
    }

    public function update($sql_command, $params) {
        try {
            $stmt = $this->con->prepare($sql_command);
            $stmt->execute($params);
            echo $stmt->rowCount() . " records UPDATED successfully";
        } catch(PDOException $e) {
            echo "Update error: " . $sql_command . "<br>" . $e->getMessage();
        }
    }

    public function delete($sql) {
        try {
            $this->con->exec($sql);
            echo "Record deleted successfully";
        } catch(PDOException $e) {
            echo "Delete error: " . $e->getMessage();
        }
    }
}

$u = new Database();

