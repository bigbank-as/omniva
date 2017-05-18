<?php

namespace Bigbank\Omniva\Test\Services;

use Bigbank\Omniva\Services\AddressSearch;
use Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType;
use Bigbank\Omniva\Soap\Wsdl\aadressKomponentNimekiriKoordsType;
use Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1PortTypeService;
use Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1Request;
use Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1ResponseType;

/**
 * @coversDefaultClass \Bigbank\Omniva\Services\AddressSearch
 */
class AddressSearchTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers ::findAddresses
     */
    public function testFindAddressesReturnsAnArrayOfTranslatedAddressComponents()
    {

        // Create SOAP request and response DTO-s
        $request  = new SingleAddress2_5_1Request;
        $response = new SingleAddress2_5_1ResponseType(
            new aadressKomponentNimekiriKoordsType([$this->createTestAddress()])
        );

        // Mock the SOAP service class to return the response DTO
        /** @var SingleAddress2_5_1PortTypeService|\PHPUnit_Framework_MockObject_MockObject $mockSoapService */
        $mockSoapService = $this->getMockBuilder(SingleAddress2_5_1PortTypeService::class)
            ->setMethods(['SingleAddress2_5_1'])
            ->disableOriginalConstructor()
            ->getMock();
        $mockSoapService->expects($this->once())
            ->method('SingleAddress2_5_1')
            ->with($this->callback(function (SingleAddress2_5_1Request $request) {

                return $request->getAadress() === 'Tartu';
            }))
            ->willReturn($response);

        $addressSearch = new AddressSearch($mockSoapService, $request);

        $addresses = $addressSearch->findAddresses('Tartu');

        $expected = [
            [
                'address'                => 'Tartu maakond, Alatskivi vald, Alatskivi alevik, Tartu maantee 18a',
                'addressNumber'          => '18a',
                'county'                 => 'Tartu maakond',
                'countyId'               => '0078',
                'designation'            => null,
                'flatNumber'             => null,
                'latitude'               => '682273.54',
                'level'                  => 'A7',
                'longitude'              => '6499908.62',
                'mailboxType'            => null,
                'mainAddress'            => null,
                'municipality'           => 'Alatskivi vald',
                'municipalityId'         => '0126',
                'municipalityType'       => 'vald',
                'nationalAddressId'      => '7812611810000064L00008SKC00000000',
                'omnivaAddressId'        => '4823246',
                'postalIndex'            => '60201',
                'postOfficeBoxNumber'    => null,
                'settlement'             => 'Alatskivi alevik',
                'settlementId'           => '1181',
                'settlementType'         => 'alevik',
                'status'                 => 'Kontrollitud, kehtiv',
                'territorialAddress'     => null,
                'territorialAddressType' => null,
                'trafficSurface'         => 'Tartu maantee',
                'trafficSurfaceType'     => 'tee',
            ]
        ];
        $this->assertSame($expected, $addresses);
    }

    /**
     * @covers ::findAddresses no addresses found
     */
    public function testFindAddressesReturnsEmptyArray()
    {

        // Create SOAP request and response DTO-s
        $request  = new SingleAddress2_5_1Request;
        $response = new SingleAddress2_5_1ResponseType(
            new aadressKomponentNimekiriKoordsType([])
        );

        // Mock the SOAP service class to return the response DTO
        /** @var SingleAddress2_5_1PortTypeService|\PHPUnit_Framework_MockObject_MockObject $mockSoapService */
        $mockSoapService = $this->getMockBuilder(SingleAddress2_5_1PortTypeService::class)
            ->setMethods(['SingleAddress2_5_1'])
            ->disableOriginalConstructor()
            ->getMock();
        $mockSoapService->expects($this->once())
            ->method('SingleAddress2_5_1')
            ->with($this->callback(function (SingleAddress2_5_1Request $request) {

                return $request->getAadress() === 'TartuPoleOlemas';
            }))
            ->willReturn($response);

        $addressSearch = new AddressSearch($mockSoapService, $request);

        $addresses = $addressSearch->findAddresses('TartuPoleOlemas');

        $this->assertSame([], $addresses);
    }

    /**
     * @return aadressKomponentKoordsType
     */
    protected function createTestAddress()
    {

        $address = new aadressKomponentKoordsType;
        return $address->setAid('4823246')
            ->setTase('A7')
            ->setAdsId('7812611810000064L00008SKC00000000')
            ->setMaakondEhak('0078')
            ->setMaakond('Tartu maakond')
            ->setOmavalitusEhak('0126')
            ->setOmavalitusLiik('vald')
            ->setOmavalitus('Alatskivi vald')
            ->setAsustusyksusEhak('1181')
            ->setAsustusyksusLiik('alevik')
            ->setAsustusyksus('Alatskivi alevik')
            ->setVaikekohtLiik(null)
            ->setVaikekoht(null)
            ->setLiikluspindLiik('tee')
            ->setLiikluspind('Tartu maantee')
            ->setNimetus(null)
            ->setAadressinumber('18a')
            ->setKorterinumber(null)
            ->setSihtnumber('60201')
            ->setStaatus('Kontrollitud, kehtiv')
            ->setAadress('Tartu maakond, Alatskivi vald, Alatskivi alevik, Tartu maantee 18a')
            ->setPohiaadress(null)
            ->setPostkastiTyyp(null)
            ->setNimekapiNr(null)
            ->setXKoordinaat('6499908.62')
            ->setYKoordinaat('682273.54');
    }
}
