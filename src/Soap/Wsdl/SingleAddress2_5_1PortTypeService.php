<?php

namespace Bigbank\Omniva\Soap\Wsdl;

class SingleAddress2_5_1PortTypeService extends \Bigbank\Omniva\Soap\ProxyAwareClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SingleAddress2_5_1Request' => 'Bigbank\\Omniva\\Soap\\Wsdl\\SingleAddress2_5_1Request',
      'SingleAddress2_5_1ResponseType' => 'Bigbank\\Omniva\\Soap\\Wsdl\\SingleAddress2_5_1ResponseType',
      'aadressKomponentNimekiriType' => 'Bigbank\\Omniva\\Soap\\Wsdl\\aadressKomponentNimekiriType',
      'aadressKomponentNimekiriKoordsType' => 'Bigbank\\Omniva\\Soap\\Wsdl\\aadressKomponentNimekiriKoordsType',
      'aadressKomponentKoordsType' => 'Bigbank\\Omniva\\Soap\\Wsdl\\aadressKomponentKoordsType',
      'aadressKomponentType' => 'Bigbank\\Omniva\\Soap\\Wsdl\\aadressKomponentType',
      'juurdepaasupunktNimekiriType' => 'Bigbank\\Omniva\\Soap\\Wsdl\\juurdepaasupunktNimekiriType',
      'juurdepaasupunktType' => 'Bigbank\\Omniva\\Soap\\Wsdl\\juurdepaasupunktType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://otseturundus.post.ee/aadressid/ws/singleAddress2_5_1.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param SingleAddress2_5_1Request $SingleAddress2_5_1Request
     * @return SingleAddress2_5_1ResponseType
     */
    public function SingleAddress2_5_1(SingleAddress2_5_1Request $SingleAddress2_5_1Request)
    {
      return $this->__soapCall('SingleAddress2_5_1', array($SingleAddress2_5_1Request));
    }

}
