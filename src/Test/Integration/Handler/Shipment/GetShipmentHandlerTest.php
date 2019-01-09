<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Test\Integration\Handler\Order;

use BolCom\RetailerApi\Client;
use BolCom\RetailerApi\Client\ClientConfig;
use BolCom\RetailerApi\Handler\Shipment\GetShipmentHandler;
use BolCom\RetailerApi\Model\Shipment\Query\GetShipment;
use BolCom\RetailerApi\Model\Shipment\ShipmentId;

class GetShipmentHandlerTest extends \PHPUnit\Framework\TestCase
{
    public function test__invoke(): void
    {
        $this->markTestSkipped('Unable to fetch shipment, contacted bol.com about this issue.');

        $handler = new GetShipmentHandler(
            new Client(new ClientConfig(BOL_CLIENT_ID, BOL_CLIENT_SECRET, 'https://api.bol.com/retailer-demo/'))
        );

        $handler(GetShipment::with(ShipmentId::fromScalar(541757635)));
    }
}
