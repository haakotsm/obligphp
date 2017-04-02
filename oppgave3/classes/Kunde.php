<?php
include_once("Bestilling.php");
/**
 * Created by PhpStorm.
 * User: hakon
 * Date: 28.03.2017
 * Time: 20.30
 */
class Kunde
{
    private $navn, $epost, $telefonnummer, $bestilling;

    /**
     * Kunde constructor.
     * @param $navn
     * @param $epost
     * @param $telefonnummer
     * @param $bestilling
     */
    public function __construct($navn, $epost, $telefonnummer, $bestilling)
    {
        $this->navn = $navn;
        $this->epost = $epost;
        $this->telefonnummer = $telefonnummer;
        $this->bestilling = $bestilling;
    }

    /**
     * @return mixed
     */
    public function getNavn()
    {
        return $this->navn;
    }

    /**
     * @param mixed $navn
     */
    public function setNavn($navn)
    {
        $this->navn = $navn;
    }

    /**
     * @return mixed
     */
    public function getEpost()
    {
        return $this->epost;
    }

    /**
     * @param mixed $epost
     */
    public function setEpost($epost)
    {
        $this->epost = $epost;
    }

    /**
     * @return mixed
     */
    public function getTelefonnummer()
    {
        return $this->telefonnummer;
    }

    /**
     * @param mixed $telefonnummer
     */
    public function setTelefonnummer($telefonnummer)
    {
        $this->telefonnummer = $telefonnummer;
    }

    /**
     * @return mixed
     */
    public function getBestilling()
    {
        return $this->bestilling;
    }

    /**
     * @param mixed $bestilling
     */
    public function setBestilling($bestilling)
    {
        $this->bestilling = $bestilling;
    }

    function __toString()
    {
        return 'Navn: ' . $this->navn . '<br>'
            . 'Telefonnummer: ' . $this->telefonnummer . '<br>'
            . 'Epost: ' . $this->epost. '<br>'
            . 'Bestilling: ' . $this->bestilling;
        // TODO: Implement __toString() method.
    }


}