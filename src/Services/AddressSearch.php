<?php
namespace Bigbank\Omniva\Services;

use Bigbank\Omniva\Exceptions\OmnivaException;
use Bigbank\Omniva\Soap\Wsdl\aadressKomponentKoordsType;
use Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1PortTypeService;
use Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1Request;

/**
 * {@inheritdoc}
 */
class AddressSearch implements AddressSearchInterface
{

    /**
     * URL of the SOAP API for Omniva's address search service
     */
    const PRODUCTION_API_URL = 'https://otseturundus.post.ee/aadressid/ws/singleAddress2_5_1.wsdl';

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
     * {@inheritdoc}
     */
    public function setApiKey($key)
    {

        $this->omnivaRequest->setAuthPhrase($key);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function findAddresses($partialAddress)
    {

        $this->omnivaRequest->setAadress($partialAddress);
        $response  = $this->omnivaService->SingleAddress2_5_1($this->omnivaRequest);
        $responseContent = $response->getVastus();

        if ($responseContent === 'AADRESS_PUUDUB')
        {

            return [];
        } else {

            $addresses = $response->getAadressKomponentNimekiriKoords()->getAadressKomponent();
            return $this->formatResponseAddresses($addresses);
        }
    }

    /**
     * Translate Estonian keys into English
     *
     * @param array $addressComponent
     *
     * @return array
     */
    private function formatResponseAddresses(array $addressComponent)
    {

        return array_map(function (aadressKomponentKoordsType $address) {

            return [
                'address'                => $address->getAadress() ?: null,
                'addressNumber'          => $address->getAadressinumber() ?: null,
                'county'                 => $address->getMaakond() ?: null,
                'countyId'               => $address->getMaakondEhak() ?: null,
                'designation'            => $address->getNimetus() ?: null,
                'flatNumber'             => $address->getKorterinumber() ?: null,
                'latitude'               => $address->getYKoordinaat() ?: null,
                'level'                  => $address->getTase() ?: null,
                'longitude'              => $address->getXKoordinaat() ?: null,
                'mailboxType'            => $address->getPostkastiTyyp() ?: null,
                'mainAddress'            => $address->getPohiaadress() ?: null,
                'municipality'           => $address->getOmavalitus() ?: null,
                'municipalityId'         => $address->getOmavalitusEhak() ?: null, // Omniva typo
                'municipalityType'       => $address->getOmavalitusLiik() ?: null,
                'nationalAddressId'      => $address->getAdsId() ?: null,
                'omnivaAddressId'        => $address->getAid() ?: null,
                'postalIndex'            => $address->getSihtnumber() ?: null,
                'postOfficeBoxNumber'    => $address->getNimekapiNr() ?: null,
                'settlement'             => $address->getAsustusyksus() ?: null,
                'settlementId'           => $address->getAsustusyksusEhak() ?: null,
                'settlementType'         => $address->getAsustusyksusLiik() ?: null,
                'status'                 => $address->getStaatus() ?: null,
                'territorialAddress'     => $address->getVaikekoht() ?: null,
                'territorialAddressType' => $address->getVaikekohtLiik() ?: null,
                'trafficSurface'         => $address->getLiiklusPind() ?: null,
                'trafficSurfaceType'     => $address->getLiikluspindLiik() ?: null
            ];
        }, $addressComponent);
    }
}
