#!/usr/bin/env php

<?php

use Wsdl2PhpGenerator\Config;
use Wsdl2PhpGenerator\Generator;

require './vendor/autoload.php';

echo sprintf(
    "Generating WSDL files from Omniva service (%s). " .
    "This happens as part of the Composer post-update hook and requires an active internet connection.\n",
    "https://otseturundus.post.ee/aadressid/ws/singleAddress2_5_1.wsdl"
);

$generator = new Generator;
$config    = new Config([
    'inputFile'                      => "https://otseturundus.post.ee/aadressid/ws/singleAddress2_5_1.wsdl",
    'outputDir'                      => './src/Soap/Wsdl',
    'namespaceName'                  => 'Bigbank\Omniva\Soap\Wsdl',
    'sharedTypes'                    => true,
    // 'soapClientClass' value must begin with a leading namespace class
    // otherwise the generated class uses a relative namespace which won't resolve
    'soapClientClass'                => '\Bigbank\Omniva\Soap\ProxyAwareClient',
    'constructorParamsDefaultToNull' => true
]);

$generator->generate($config);

// Delete autoloader - it's not needed as we use Composer's
if (file_exists('./src/Soap/Wsdl/autoload.php')) {
    unlink('./src/Soap/Wsdl/autoload.php');
}
