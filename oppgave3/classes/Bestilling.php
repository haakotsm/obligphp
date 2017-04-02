<?php

/**
 * Created by PhpStorm.
 * User: hakon
 * Date: 28.03.2017
 * Time: 20.29
 */
class Bestilling
{
    private $billettype, $antall, $dato;

    /**
     * Bestilling constructor.
     * @param $billettype
     * @param $antall
     * @param $dato
     */
    public function __construct($billettype, $antall)
    {
        $this->billettype = $billettype;
        $this->antall = $antall;
        $this->dato = date("d/m/Y - H:i");
    }

    /**
     * @return mixed
     */
    public function getBillettype()
    {
        return $this->billettype;
    }

    /**
     * @param mixed $billettype
     */
    public function setBillettype($billettype)
    {
        $this->billettype = $billettype;
    }

    /**
     * @return mixed
     */
    public function getAntall()
    {
        return $this->antall;
    }

    /**
     * @param mixed $antall
     */
    public function setAntall($antall)
    {
        $this->antall = $antall;
    }

    /**
     * @return mixed
     */
    public function getDato()
    {
        return $this->dato;
    }

    /**
     * @param mixed $dato
     */
    public function setDato($dato)
    {
        $this->dato = $dato;
    }

    function __toString()
    {
        return 'Billettype: ' . $this->billettype . '<br>Antall: ' . $this->antall . '<br>Dato: ' . $this->dato;
        // TODO: Implement __toString() method.
    }


}