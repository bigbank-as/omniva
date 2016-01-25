<?php

namespace Bigbank\Omniva\Soap\Wsdl;

class juurdepaasupunktNimekiriType
{

    /**
     * @var juurdepaasupunktType $juurdepaasupunkt
     */
    protected $juurdepaasupunkt = null;

    /**
     * @param juurdepaasupunktType $juurdepaasupunkt
     */
    public function __construct($juurdepaasupunkt = null)
    {
      $this->juurdepaasupunkt = $juurdepaasupunkt;
    }

    /**
     * @return juurdepaasupunktType
     */
    public function getJuurdepaasupunkt()
    {
      return $this->juurdepaasupunkt;
    }

    /**
     * @param juurdepaasupunktType $juurdepaasupunkt
     * @return \Bigbank\Omniva\Soap\Wsdl\juurdepaasupunktNimekiriType
     */
    public function setJuurdepaasupunkt($juurdepaasupunkt)
    {
      $this->juurdepaasupunkt = $juurdepaasupunkt;
      return $this;
    }

}
