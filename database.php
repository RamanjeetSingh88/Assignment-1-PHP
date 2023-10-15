<?php
  class Database{
    private $connection;
    function __construct(){
      $this->connect_db();
    }
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'Mydata');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error());
      }
    }
    public function create($name,$email,$age,$grade){
      $sql = "INSERT INTO Student_credentials (name, email, age, grade) VALUES ('$name', '$email', '$age', '$grade')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read(){
		    $sql = "SELECT * FROM Student_credentials";
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
    
  }
  $database = new Database();
?>
