<?php

namespace Bigbank\Omniva\Soap\Wsdl;

class SingleAddress2_5_1Request
{

    /**
     * @var aadressType $aadress
     */
    protected $aadress = null;

    /**
     * @var ainultKorrektsedType $ainult_korrektsed
     */
    protected $ainult_korrektsed = null;

    /**
     * @var korrektsedKorteridType $korrektsed_korterid
     */
    protected $korrektsed_korterid = null;

    /**
     * @var jpTyypType $jp_tyyp
     */
    protected $jp_tyyp = null;

    /**
     * @var AuthPhraseType $authPhrase
     */
    protected $authPhrase = null;

    /**
     * @param aadressType $aadress
     * @param ainultKorrektsedType $ainult_korrektsed
     * @param korrektsedKorteridType $korrektsed_korterid
     * @param jpTyypType $jp_tyyp
     * @param AuthPhraseType $authPhrase
     */
    public function __construct($aadress = null, $ainult_korrektsed = null, $korrektsed_korterid = null, $jp_tyyp = null, $authPhrase = null)
    {
      $this->aadress = $aadress;
      $this->ainult_korrektsed = $ainult_korrektsed;
      $this->korrektsed_korterid = $korrektsed_korterid;
      $this->jp_tyyp = $jp_tyyp;
      $this->authPhrase = $authPhrase;
    }

    /**
     * @return aadressType
     */
    public function getAadress()
    {
      return $this->aadress;
    }

    /**
     * @param aadressType $aadress
     * @return \Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1Request
     */
    public function setAadress($aadress)
    {
      $this->aadress = $aadress;
      return $this;
    }

    /**
     * @return ainultKorrektsedType
     */
    public function getAinult_korrektsed()
    {
      return $this->ainult_korrektsed;
    }

    /**
     * @param ainultKorrektsedType $ainult_korrektsed
     * @return \Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1Request
     */
    public function setAinult_korrektsed($ainult_korrektsed)
    {
      $this->ainult_korrektsed = $ainult_korrektsed;
      return $this;
    }

    /**
     * @return korrektsedKorteridType
     */
    public function getKorrektsed_korterid()
    {
      return $this->korrektsed_korterid;
    }

    /**
     * @param korrektsedKorteridType $korrektsed_korterid
     * @return \Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1Request
     */
    public function setKorrektsed_korterid($korrektsed_korterid)
    {
      $this->korrektsed_korterid = $korrektsed_korterid;
      return $this;
    }

    /**
     * @return jpTyypType
     */
    public function getJp_tyyp()
    {
      return $this->jp_tyyp;
    }

    /**
     * @param jpTyypType $jp_tyyp
     * @return \Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1Request
     */
    public function setJp_tyyp($jp_tyyp)
    {
      $this->jp_tyyp = $jp_tyyp;
      return $this;
    }

    /**
     * @return AuthPhraseType
     */
    public function getAuthPhrase()
    {
      return $this->authPhrase;
    }

    /**
     * @param AuthPhraseType $authPhrase
     * @return \Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1Request
     */
    public function setAuthPhrase($authPhrase)
    {
      $this->authPhrase = $authPhrase;
      return $this;
    }

}
