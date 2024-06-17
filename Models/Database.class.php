<?php
require 'const.php' ; 
 class Database{
        public $host = HOST ; 
        public $server_user = USER  ;
        public $pass = PASSWORD ; 
        public $dbname = DBNAME ; 
        public $con ;

        public function __construct(){
            try{
                $this->con = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->server_user,$this->pass);
                $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) ;
            } 
            catch(PDOException $e){
                die("connection failed ");
            }
        }
        public function selectAll($sql_command){
            $query = $this->con->query($sql_command) ;
            $query->execute() ;
            $allrows = $query->fetchAll(PDO::FETCH_OBJ) ; 
            if($query){
                return $allrows; 
            }
            else{
                    return false ;
                }
        }
        public function insert($sql_command,$record_arr){
            if(!empty($record_arr)){
                $insert = $this->con->prepare($sql_command) ; 
                $insert->execute($record_arr) ;
            }
            else{

                echo "Insert error" ; 
            }
        }

        public function update($sql_command,/*$path*/){
            try{
                $stmt = $this->con->prepare($sql_command);
                $stmt->execute();
                echo $stmt->rowCount() . "records UPDATED successfully";
                //header("location:$path") ; 
            }catch(PDOException $e){
                echo $sql_command . "<br>" . $e->getMessage();
            }
        }

        public function delete($sql,/*$path*/){
           $this->con->exec($sql);
           //header("location:$path");
        }
}
$u = new Database() ; 
$sql = "INSERT INTO user(nom,email,`password`,adresse,cuisine,telephone) VALUES(?,?,?,?,?,?)" ; 
$arr = ["user3","user3@gmail.com","123456789","c3","02433333"];
$u->update($sql,$arr) ; 


