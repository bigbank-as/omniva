<?php
namespace Bigbank\Omniva\Services;

use Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType;
use Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1PortTypeService;
use Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1Request;

/**
 *
 */
class AddressSearch implements AddressSearchInterface
{

    /**
     * @var SingleAddress2_5_1PortTypeService
     */
    private $omnivaService;

    /**
     * @var SingleAddress2_5_1Request
     */
    private $omnivaRequest;

    /**
     * @param SingleAddress2_5_1PortTypeService $omnivaService
     * @param SingleAddress2_5_1Request         $omnivaRequest
     */
    public function __construct(
        SingleAddress2_5_1PortTypeService $omnivaService,
        SingleAddress2_5_1Request $omnivaRequest
    ) {

        $this->omnivaService = $omnivaService;
        $this->omnivaRequest = $omnivaRequest;
    }

    /**
     * @param $partialAddress
     *
     * @return array
     */
    public function findAddresses($partialAddress)
    {

        $this->omnivaRequest->setAadress($partialAddress);
        $response         = $this->omnivaService->SingleAddress2_5_1($this->omnivaRequest);
        $addressComponent = $response->getAadressKomponentNimekiriKoords()->getAadressKomponent();
        return $this->formatResponseAddresses($addressComponent);
    }

    /**
     * @param array $addressComponent
     *
     * @return array
     */
    private function formatResponseAddresses(array $addressComponent)
    {

        return array_map(function (aadressKomponentKoordsType $address) {

            return [
                'omnivaAddressId'        => $address->getAid() ?: null,
                'level'                  => $address->getTase() ?: null,
                'nationalAddressId'      => $address->getAdsId() ?: null,
                'countyId'               => $address->getMaakondEhak() ?: null,
                'county'                 => $address->getMaakond() ?: null,
                // Typo in Omniva API: "omavalitsus"
                'municipalityId'         => $address->getOmavalitusEhak() ?: null,
                'municipalityType'       => $address->getOmavalitusLiik() ?: null,
                'municipality'           => $address->getOmavalitus() ?: null,
                'settlementId'           => $address->getAsustusyksusEhak() ?: null,
                'settlementType'         => $address->getAsustusyksusLiik() ?: null,
                'settlement'             => $address->getAsustusyksus() ?: null,
                'territorialAddressType' => $address->getVaikekohtLiik() ?: null,
                'territorialAddress'     => $address->getVaikekoht() ?: null,
                'trafficSurfaceType'     => $address->getLiikluspindLiik() ?: null,
                'trafficSurface'         => $address->getLiiklusPind() ?: null,
                'designation'            => $address->getNimetus() ?: null,
                'addressNumber'          => $address->getAadressinumber() ?: null,
                'flatNumber'             => $address->getKorterinumber() ?: null,
                'postalIndex'            => $address->getSihtnumber() ?: null,
                'status'                 => $address->getStaatus() ?: null,
                'address'                => $address->getAadress() ?: null,
                'mainAddress'            => $address->getPohiaadress() ?: null,
                'mailboxType'            => $address->getPostkastiTyyp() ?: null,
                'postOfficeBoxNumber'    => $address->getNimekapiNr() ?: null,
                'longitude'              => $address->getXKoordinaat() ?: null,
                'latitude'               => $address->getYKoordinaat() ?: null
            ];
        }, $addressComponent);
    }
}
