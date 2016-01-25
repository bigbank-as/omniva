<?php

namespace Bigbank\Omniva\Soap\Wsdl;

class juurdepaasupunktType
{

    /**
     * @var string $jpId
     */
    protected $jpId = null;

    /**
     * @var string $jpTyyp
     */
    protected $jpTyyp = null;

    /**
     * @var string $jpNimi
     */
    protected $jpNimi = null;

    /**
     * @var string $jpOlek
     */
    protected $jpOlek = null;

    /**
     * @param string $jpId
     * @param string $jpTyyp
     * @param string $jpNimi
     * @param string $jpOlek
     */
    public function __construct($jpId = null, $jpTyyp = null, $jpNimi = null, $jpOlek = null)
    {
      $this->jpId = $jpId;
      $this->jpTyyp = $jpTyyp;
      $this->jpNimi = $jpNimi;
      $this->jpOlek = $jpOlek;
    }

    /**
     * @return string
     */
    public function getJpId()
    {
      return $this->jpId;
    }

    /**
     * @param string $jpId
     * @return \Bigbank\Omniva\Soap\Wsdl\juurdepaasupunktType
     */
    public function setJpId($jpId)
    {
      $this->jpId = $jpId;
      return $this;
    }

    /**
     * @return string
     */
    public function getJpTyyp()
    {
      return $this->jpTyyp;
    }

    /**
     * @param string $jpTyyp
     * @return \Bigbank\Omniva\Soap\Wsdl\juurdepaasupunktType
     */
    public function setJpTyyp($jpTyyp)
    {
      $this->jpTyyp = $jpTyyp;
      return $this;
    }

    /**
     * @return string
     */
    public function getJpNimi()
    {
      return $this->jpNimi;
    }

    /**
     * @param string $jpNimi
     * @return \Bigbank\Omniva\Soap\Wsdl\juurdepaasupunktType
     */
    public function setJpNimi($jpNimi)
    {
      $this->jpNimi = $jpNimi;
      return $this;
    }

    /**
     * @return string
     */
    public function getJpOlek()
    {
      return $this->jpOlek;
    }

    /**
     * @param string $jpOlek
     * @return \Bigbank\Omniva\Soap\Wsdl\juurdepaasupunktType
     */
    public function setJpOlek($jpOlek)
    {
      $this->jpOlek = $jpOlek;
      return $this;
    }

}
