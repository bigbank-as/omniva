<?php

namespace Bigbank\Omniva\Soap\Wsdl;

class SingleAddress2_5_1ResponseType
{

    /**
     * @var aadressKomponentNimekiriKoordsType $aadressKomponentNimekiriKoords
     */
    protected $aadressKomponentNimekiriKoords = null;

    /**
     * @var vastusType $vastus
     */
    protected $vastus = null;

    /**
     * @param aadressKomponentNimekiriKoordsType $aadressKomponentNimekiriKoords
     * @param vastusType $vastus
     */
    public function __construct($aadressKomponentNimekiriKoords = null, $vastus = null)
    {
      $this->aadressKomponentNimekiriKoords = $aadressKomponentNimekiriKoords;
      $this->vastus = $vastus;
    }

    /**
     * @return aadressKomponentNimekiriKoordsType
     */
    public function getAadressKomponentNimekiriKoords()
    {
      return $this->aadressKomponentNimekiriKoords;
    }

    /**
     * @param aadressKomponentNimekiriKoordsType $aadressKomponentNimekiriKoords
     * @return \Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1ResponseType
     */
    public function setAadressKomponentNimekiriKoords($aadressKomponentNimekiriKoords)
    {
      $this->aadressKomponentNimekiriKoords = $aadressKomponentNimekiriKoords;
      return $this;
    }

    /**
     * @return vastusType
     */
    public function getVastus()
    {
      return $this->vastus;
    }

    /**
     * @param vastusType $vastus
     * @return \Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1ResponseType
     */
    public function setVastus($vastus)
    {
      $this->vastus = $vastus;
      return $this;
    }

}
