<?php

namespace Bigbank\Omniva\Soap\Wsdl;

class aadressKomponentNimekiriType
{

    /**
     * @var aadressKomponentType $aadressKomponent
     */
    protected $aadressKomponent = null;

    /**
     * @param aadressKomponentType $aadressKomponent
     */
    public function __construct($aadressKomponent = null)
    {
      $this->aadressKomponent = $aadressKomponent;
    }

    /**
     * @return aadressKomponentType
     */
    public function getAadressKomponent()
    {
      return $this->aadressKomponent;
    }

    /**
     * @param aadressKomponentType $aadressKomponent
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentNimekiriType
     */
    public function setAadressKomponent($aadressKomponent)
    {
      $this->aadressKomponent = $aadressKomponent;
      return $this;
    }

}
