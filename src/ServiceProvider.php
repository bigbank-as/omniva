<?php
namespace Bigbank\Omniva;

use Bigbank\Omniva\Services\AddressSearch;
use Bigbank\Omniva\Services\AddressSearchInterface;
use Bigbank\Omniva\Soap\SoapClientInterface;
use Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1PortTypeService;
use Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1Request;
use League\Container\ServiceProvider\AbstractServiceProvider;

class ServiceProvider extends AbstractServiceProvider
{

    /**
     * @var array
     */
    protected $provides = [
        AddressSearchInterface::class
    ];

    /**
     * @var string
     */
    protected $apiUrl;

    /**
     * @var string
     */
    protected $apiPassword;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register()
    {

        $container = $this->getContainer();

        $container->add(SoapClientInterface::class, function () {

            $proxy = getenv('HTTP_PROXY') ?: null;

            if ($proxy) {
                $this->options['proxy_host'] = parse_url($proxy, PHP_URL_HOST);
                $this->options['proxy_port'] = parse_url($proxy, PHP_URL_PORT);
            }

            return new SingleAddress2_5_1PortTypeService($this->options, $this->apiUrl);
        });

        $container->add(
            AddressSearchInterface::class,
            AddressSearch::class
        )->withArguments([
            new SingleAddress2_5_1PortTypeService,
            new SingleAddress2_5_1Request(null, null, null, null, $this->apiPassword)
        ]);
    }

    /**
     * @param string $apiUrl
     *
     * @return $this
     */
    public function setApiUrl($apiUrl)
    {

        $this->apiUrl = $apiUrl;
        return $this;
    }

    /**
     * @param array $options
     *
     * @return $this
     */
    public function setOptions(array $options)
    {

        $this->options = $options;
        return $this;
    }

    /**
     * @param string $apiPassword
     *
     * @return $this
     */
    public function setApiPassword($apiPassword)
    {

        $this->apiPassword = $apiPassword;
        return $this;
    }
}
