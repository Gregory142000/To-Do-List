<?php
// namespace ConnectionDataBase;
  
require_once "ConnectionData.php";
  
class Connection {
  private $server_name = SERVER_NAME;
  private $user_name = USER_NAME;
  private $password = PASSWORD;
  private $db_name = DB_NAME;
  protected $conn;
    
  function __construct() {
    try{
      $this->conn = new PDO("mysql:host=$this->server_name;dbname=$this->db_name", $this->user_name, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e){
      echo "Error: " . $e->getMessage() . "<br/>" . "In line: " . $e->getLine();
    }
  }
    
  function __destruct() {
    $this->conn = null;
  }
}