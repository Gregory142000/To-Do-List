<?php
namespace ConnectionDataBase;
  
require "./ConnectionData.php";
  
class Connection {
  private $server_name = \SERVER_NAME;
  private $user_name = \USER_NAME;
  private $password = \PASSWORD;
  private $db_name = \DB_NAME;
  protected $conn;
    
  function __construct() {
    try{
      $this->conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e){
      echo "Error: " . $e->getMessage() . "<br/>" . "In line: " . $e->getLine();
    }
  }
    
  function __destruct() {
    $this->conn = null;
  }
}