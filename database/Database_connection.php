<?php

class Database_connection {
    function connect(){
        $connect = new PDO("mysql:host=localhost; dbname=chat-app", "root", "");

        return $connect;
    }
}

?>