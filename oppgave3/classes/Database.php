<?php

/**
 * Created by PhpStorm.
 * User: hakon
 * Date: 02.04.2017
 * Time: 18.51
 */
include_once('Kunde.php');
define('SERVER_NAME', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');

class Database
{

    private $conn;

    function __construct()
    {
        $this->conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        $this->conn->query("CREATE DATABASE IF NOT EXISTS `billettsystem`");
        $this->conn->select_db('billettsystem');
        $sql = "CREATE TABLE IF NOT EXISTS `billettsystem`.`bestilling`(
                `id` INT AUTO_INCREMENT PRIMARY KEY,
                `navn` VARCHAR(30) NOT NULL,
                `epost` VARCHAR(70) NOT NULL,
                `telefonnummer` VARCHAR(8) NOT NULL,
                `billettype` VARCHAR(10) NOT NULL,
                `antall` SMALLINT (10) NOT NULL,
                `dato` LONG NOT NULL);";
        $this->conn->query($sql);
    }


    function insertKunde($kunde)
    {
        $navn = $kunde->getNavn();
        $epost = $kunde->getEpost();
        $telefonnummer = $kunde->getTelefonnummer();
        $bestilling = $kunde->getBestilling();
        $billettype = $bestilling->getBillettype();
        $antall = $bestilling->getAntall();
        $dato = $bestilling->getDato();
        $sql = "INSERT INTO `billettsystem`.`bestilling` (`navn`,`epost`,`telefonnummer`,`billettype`,`antall`, `dato`)
        Values ('$navn','$epost','$telefonnummer','$billettype','$antall', '$dato')";
        return $this->conn->query($sql);
    }

    function getBestillinger()
    {
        return $this->conn->query("SELECT * FROM `billettsystem`.`bestilling`");
    }

    /**
     * @return mysqli
     */
    public function getConn(): mysqli
    {
        return $this->conn;
    }

    /**
     * @param mysqli $conn
     */
    public function setConn(mysqli $conn)
    {
        $this->conn = $conn;
    }

}