<?php
// include('db_info.php');
session_start();
class DB{
    protected $pdo;
    function __construct()
    {
        try {
            $this->pdo = new PDO(":host=localhost;dbname=youcode_gestion_blog_culturedev", "root", "");
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }

    function __destruct()
    {
        if ($this->pdo !== null) {$this->pdo = null;} //return false to close the connection
    }
}