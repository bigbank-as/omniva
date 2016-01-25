<?php

namespace Bigbank\Omniva\Soap\Wsdl;

class aadressKomponentNimekiriKoordsType
{

    /**
     * @var aadressKomponentKoordsType $aadressKomponent
     */
    protected $aadressKomponent = null;

    /**
     * @param aadressKomponentKoordsType $aadressKomponent
     */
    public function __construct($aadressKomponent = null)
    {
      $this->aadressKomponent = $aadressKomponent;
    }

    /**
     * @return aadressKomponentKoordsType
     */
    public function getAadressKomponent()
    {
      return $this->aadressKomponent;
    }

    /**
     * @param aadressKomponentKoordsType $aadressKomponent
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentNimekiriKoordsType
     */
    public function setAadressKomponent($aadressKomponent)
    {
      $this->aadressKomponent = $aadressKomponent;
      return $this;
    }

}
