<?php 
class DB{
    private $connection;
    function __construct($hostname,$username,$password,$database){
        $this->connection = new mysqli($hostname,$username,$password,$database);
    }
    function deleteById($table,$id){
        $this->connection->query("DELETE from $table WHERE id=$id");
    }
    function insert($table,$id,$name,$email,$password){
        $this->connection->query("INSERT INTO $table(`id`, `name`, `email`, `password`) VALUES ($id,'$name','$email','$password')");
    }
    function update($table,$id=null,$name=null,$email=null,$password=null,$up){
        $this->connection->query("UPDATE $table SET `id`=$id,`name`='$name',`email`='$email',`password`='$password' WHERE `id`=$up");
    }
    function read($table){
        $q=$this->connection->query("SELECT * FROM $table");
        while($res=$q->fetch_assoc()){
            $values[]=$res;
        }
        return $values;
    }
    function __destruct(){
        $this->connection->close();
    }
}