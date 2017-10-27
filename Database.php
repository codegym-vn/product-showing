<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 10/27/17
 * Time: 10:24 AM
 */

class Database
{
    private $url = 'mysql:host=localhost;dbname=classicmodels';
    private $user = 'root';
    private $password = '123456';

    public function connect(){
        return new PDO($this->url, $this->user, $this->password);
    }
}