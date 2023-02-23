<?php 
spl_autoload_register(function($name){
    require $name.'.php';
});
$conn=new DB("localhost","root","","project1");
$conn->insert("user",123,"loma","sm@gmail.com","221221");
