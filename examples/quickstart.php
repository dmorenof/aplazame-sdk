<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use AplazameSDK\Configuration;
use AplazameSDK\AplazameAPISDK;
use AplazameSDK\Orders;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['privateKey' => getenv('APLAZAME_PRIVATE_KEY') ?: '']);
AplazameAPISDK::configure($configuration);

$orders = Orders::get();

echo json_encode($orders), "\n";
