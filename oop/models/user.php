<?php

require_once "db.php";

class user extends db{
    public $table = 'user';
}

$user = new user();
$user->find(12,array('name','email','password'));

