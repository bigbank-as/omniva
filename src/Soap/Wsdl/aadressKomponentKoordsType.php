<?php

namespace Bigbank\Omniva\Soap\Wsdl;

class aadressKomponentKoordsType
{

    /**
     * @var int $aid
     */
    protected $aid = null;

    /**
     * @var taseType $tase
     */
    protected $tase = null;

    /**
     * @var adsIdType $adsId
     */
    protected $adsId = null;

    /**
     * @var ehakType $maakondEhak
     */
    protected $maakondEhak = null;

    /**
     * @var string $maakond
     */
    protected $maakond = null;

    /**
     * @var ehakType $omavalitusEhak
     */
    protected $omavalitusEhak = null;

    /**
     * @var string $omavalitusLiik
     */
    protected $omavalitusLiik = null;

    /**
     * @var string $omavalitus
     */
    protected $omavalitus = null;

    /**
     * @var ehakType $asustusyksusEhak
     */
    protected $asustusyksusEhak = null;

    /**
     * @var string $asustusyksusLiik
     */
    protected $asustusyksusLiik = null;

    /**
     * @var string $asustusyksus
     */
    protected $asustusyksus = null;

    /**
     * @var string $vaikekohtLiik
     */
    protected $vaikekohtLiik = null;

    /**
     * @var string $vaikekoht
     */
    protected $vaikekoht = null;

    /**
     * @var string $liikluspindLiik
     */
    protected $liikluspindLiik = null;

    /**
     * @var string $liikluspind
     */
    protected $liikluspind = null;

    /**
     * @var string $nimetus
     */
    protected $nimetus = null;

    /**
     * @var string $aadressinumber
     */
    protected $aadressinumber = null;

    /**
     * @var string $korterinumber
     */
    protected $korterinumber = null;

    /**
     * @var string $sihtnumber
     */
    protected $sihtnumber = null;

    /**
     * @var staatusType $staatus
     */
    protected $staatus = null;

    /**
     * @var string $aadress
     */
    protected $aadress = null;

    /**
     * @var string $pohiaadress
     */
    protected $pohiaadress = null;

    /**
     * @var string $postkastiTyyp
     */
    protected $postkastiTyyp = null;

    /**
     * @var string $nimekapiNr
     */
    protected $nimekapiNr = null;

    /**
     * @var string $xKoordinaat
     */
    protected $xKoordinaat = null;

    /**
     * @var string $yKoordinaat
     */
    protected $yKoordinaat = null;

    /**
     * @var juurdepaasupunktNimekiriType $juurdepaasupunktNimekiri
     */
    protected $juurdepaasupunktNimekiri = null;

    /**
     * @param int $aid
     * @param taseType $tase
     * @param adsIdType $adsId
     * @param ehakType $maakondEhak
     * @param string $maakond
     * @param string $aadress
     */
    public function __construct($aid = null, $tase = null, $adsId = null, $maakondEhak = null, $maakond = null, $aadress = null)
    {
      $this->aid = $aid;
      $this->tase = $tase;
      $this->adsId = $adsId;
      $this->maakondEhak = $maakondEhak;
      $this->maakond = $maakond;
      $this->aadress = $aadress;
    }

    /**
     * @return int
     */
    public function getAid()
    {
      return $this->aid;
    }

    /**
     * @param int $aid
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setAid($aid)
    {
      $this->aid = $aid;
      return $this;
    }

    /**
     * @return taseType
     */
    public function getTase()
    {
      return $this->tase;
    }

    /**
     * @param taseType $tase
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setTase($tase)
    {
      $this->tase = $tase;
      return $this;
    }

    /**
     * @return adsIdType
     */
    public function getAdsId()
    {
      return $this->adsId;
    }

    /**
     * @param adsIdType $adsId
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setAdsId($adsId)
    {
      $this->adsId = $adsId;
      return $this;
    }

    /**
     * @return ehakType
     */
    public function getMaakondEhak()
    {
      return $this->maakondEhak;
    }

    /**
     * @param ehakType $maakondEhak
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setMaakondEhak($maakondEhak)
    {
      $this->maakondEhak = $maakondEhak;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaakond()
    {
      return $this->maakond;
    }

    /**
     * @param string $maakond
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setMaakond($maakond)
    {
      $this->maakond = $maakond;
      return $this;
    }

    /**
     * @return ehakType
     */
    public function getOmavalitusEhak()
    {
      return $this->omavalitusEhak;
    }

    /**
     * @param ehakType $omavalitusEhak
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setOmavalitusEhak($omavalitusEhak)
    {
      $this->omavalitusEhak = $omavalitusEhak;
      return $this;
    }

    /**
     * @return string
     */
    public function getOmavalitusLiik()
    {
      return $this->omavalitusLiik;
    }

    /**
     * @param string $omavalitusLiik
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setOmavalitusLiik($omavalitusLiik)
    {
      $this->omavalitusLiik = $omavalitusLiik;
      return $this;
    }

    /**
     * @return string
     */
    public function getOmavalitus()
    {
      return $this->omavalitus;
    }

    /**
     * @param string $omavalitus
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setOmavalitus($omavalitus)
    {
      $this->omavalitus = $omavalitus;
      return $this;
    }

    /**
     * @return ehakType
     */
    public function getAsustusyksusEhak()
    {
      return $this->asustusyksusEhak;
    }

    /**
     * @param ehakType $asustusyksusEhak
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setAsustusyksusEhak($asustusyksusEhak)
    {
      $this->asustusyksusEhak = $asustusyksusEhak;
      return $this;
    }

    /**
     * @return string
     */
    public function getAsustusyksusLiik()
    {
      return $this->asustusyksusLiik;
    }

    /**
     * @param string $asustusyksusLiik
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setAsustusyksusLiik($asustusyksusLiik)
    {
      $this->asustusyksusLiik = $asustusyksusLiik;
      return $this;
    }

    /**
     * @return string
     */
    public function getAsustusyksus()
    {
      return $this->asustusyksus;
    }

    /**
     * @param string $asustusyksus
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setAsustusyksus($asustusyksus)
    {
      $this->asustusyksus = $asustusyksus;
      return $this;
    }

    /**
     * @return string
     */
    public function getVaikekohtLiik()
    {
      return $this->vaikekohtLiik;
    }

    /**
     * @param string $vaikekohtLiik
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setVaikekohtLiik($vaikekohtLiik)
    {
      $this->vaikekohtLiik = $vaikekohtLiik;
      return $this;
    }

    /**
     * @return string
     */
    public function getVaikekoht()
    {
      return $this->vaikekoht;
    }

    /**
     * @param string $vaikekoht
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setVaikekoht($vaikekoht)
    {
      $this->vaikekoht = $vaikekoht;
      return $this;
    }

    /**
     * @return string
     */
    public function getLiikluspindLiik()
    {
      return $this->liikluspindLiik;
    }

    /**
     * @param string $liikluspindLiik
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setLiikluspindLiik($liikluspindLiik)
    {
      $this->liikluspindLiik = $liikluspindLiik;
      return $this;
    }

    /**
     * @return string
     */
    public function getLiikluspind()
    {
      return $this->liikluspind;
    }

    /**
     * @param string $liikluspind
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setLiikluspind($liikluspind)
    {
      $this->liikluspind = $liikluspind;
      return $this;
    }

    /**
     * @return string
     */
    public function getNimetus()
    {
      return $this->nimetus;
    }

    /**
     * @param string $nimetus
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setNimetus($nimetus)
    {
      $this->nimetus = $nimetus;
      return $this;
    }

    /**
     * @return string
     */
    public function getAadressinumber()
    {
      return $this->aadressinumber;
    }

    /**
     * @param string $aadressinumber
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setAadressinumber($aadressinumber)
    {
      $this->aadressinumber = $aadressinumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getKorterinumber()
    {
      return $this->korterinumber;
    }

    /**
     * @param string $korterinumber
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setKorterinumber($korterinumber)
    {
      $this->korterinumber = $korterinumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSihtnumber()
    {
      return $this->sihtnumber;
    }

    /**
     * @param string $sihtnumber
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setSihtnumber($sihtnumber)
    {
      $this->sihtnumber = $sihtnumber;
      return $this;
    }

    /**
     * @return staatusType
     */
    public function getStaatus()
    {
      return $this->staatus;
    }

    /**
     * @param staatusType $staatus
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setStaatus($staatus)
    {
      $this->staatus = $staatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getAadress()
    {
      return $this->aadress;
    }

    /**
     * @param string $aadress
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setAadress($aadress)
    {
      $this->aadress = $aadress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPohiaadress()
    {
      return $this->pohiaadress;
    }

    /**
     * @param string $pohiaadress
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setPohiaadress($pohiaadress)
    {
      $this->pohiaadress = $pohiaadress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostkastiTyyp()
    {
      return $this->postkastiTyyp;
    }

    /**
     * @param string $postkastiTyyp
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setPostkastiTyyp($postkastiTyyp)
    {
      $this->postkastiTyyp = $postkastiTyyp;
      return $this;
    }

    /**
     * @return string
     */
    public function getNimekapiNr()
    {
      return $this->nimekapiNr;
    }

    /**
     * @param string $nimekapiNr
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setNimekapiNr($nimekapiNr)
    {
      $this->nimekapiNr = $nimekapiNr;
      return $this;
    }

    /**
     * @return string
     */
    public function getXKoordinaat()
    {
      return $this->xKoordinaat;
    }

    /**
     * @param string $xKoordinaat
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setXKoordinaat($xKoordinaat)
    {
      $this->xKoordinaat = $xKoordinaat;
      return $this;
    }

    /**
     * @return string
     */
    public function getYKoordinaat()
    {
      return $this->yKoordinaat;
    }

    /**
     * @param string $yKoordinaat
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setYKoordinaat($yKoordinaat)
    {
      $this->yKoordinaat = $yKoordinaat;
      return $this;
    }

    /**
     * @return juurdepaasupunktNimekiriType
     */
    public function getJuurdepaasupunktNimekiri()
    {
      return $this->juurdepaasupunktNimekiri;
    }

    /**
     * @param juurdepaasupunktNimekiriType $juurdepaasupunktNimekiri
     * @return \Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType
     */
    public function setJuurdepaasupunktNimekiri($juurdepaasupunktNimekiri)
    {
      $this->juurdepaasupunktNimekiri = $juurdepaasupunktNimekiri;
      return $this;
    }

}
