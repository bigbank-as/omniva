<?php
namespace Bigbank\Omniva;

use Bigbank\Omniva\Services\AddressSearch;
use Bigbank\Omniva\Services\AddressSearchInterface;
use Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1PortTypeService;
use Bigbank\Omniva\Soap\Wsdl\SingleAddress2_5_1Request;
use League\Container\ServiceProvider\AbstractServiceProvider;

/**
 * Default service provider for the DI container
 *
 * See [Service Providers](http://container.thephpleague.com/service-providers).
 */
class ServiceProvider extends AbstractServiceProvider
{

    /**
     * @var array
     */
    protected $provides = [
        AddressSearchInterface::class
    ];

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

        $container->add('omniva.address.search', function () {

            return new SingleAddress2_5_1PortTypeService([
                'proxy_host' => $this->getProxyHost(),
                'proxy_port' => $this->getProxyPort()
            ]);
        });
        $container->add(AddressSearchInterface::class, AddressSearch::class)
            ->withArguments(['omniva.address.search', new SingleAddress2_5_1Request]);
    }

    /**
     * Get Proxy URL from the environment
     *
     * @return string|false Proxy URL in the form of http(s)://host:port
     */
    private function getProxyString()
    {

        return getenv('HTTPS_PROXY') ?: getenv('HTTP_PROXY');
    }

    /**
     * @return string Proxy host name
     */
    private function getProxyHost()
    {

        return parse_url($this->getProxyString(), PHP_URL_HOST);
    }

    /**
     * @return int Proxy port
     */
    private function getProxyPort()
    {

        return parse_url($this->getProxyString(), PHP_URL_PORT);
    }
}
