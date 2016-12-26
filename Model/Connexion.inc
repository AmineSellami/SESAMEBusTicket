<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 12/25/2016
 * Time: 1:10 AM
 */
class Connexion extends PDO
{
    private $DB_TYPE = 'mysql';
    private $DB_HOST = 'localhost';
    private $DB_NAME = 'sesamebus';
    private $DB_USER = 'root';
    private $DB_PASSWORD = '';

    public function __construct() {

        try {

            parent::__construct($this->DB_TYPE . ':host=' . $this->DB_HOST . ';dbname=' . $this->DB_NAME, $this->DB_USER, $this->DB_PASSWORD);

        } catch (PDOException $e) {

            echo $e->getMessage();

            exit;

        }

    }


}