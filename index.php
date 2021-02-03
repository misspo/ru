<?php
class user {
    public $name, $pass, $id;
    
    public function __construct() {
        $this->name = $name;
        $this->pass = $pass;
        $this->id = $id;
    }
    private function userId ($id = NULL) {
        
    }
    public function userName($id = NULL) {
        global $sql;
        $us = $sql->getRow("select * from users where id = ?i", $id);
        return $us['name'];
    }
    public function __destruct() {
        ob_end_flush();
        exit;
    }
}

$user = new user;
$user->id = '1';
echo $user->userName($user->id)."<br>";
