<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Test\Integration\Handler\Order;

use BolCom\RetailerApi\Client\ClientConfig;
use BolCom\RetailerApi\Infrastructure\ClientPool;
use BolCom\RetailerApi\Infrastructure\MessageBus;
use BolCom\RetailerApi\Model\Shipment\Query\GetShipment;
use BolCom\RetailerApi\Model\Shipment\ShipmentId;
use PHPUnit\Framework\TestCase;

class GetShipmentHandlerTest extends TestCase
{
    /** @var MessageBus $messageBus */
    private $messageBus;

    protected function setUp()
    {
        $clientPool = ClientPool::configure(new ClientConfig(BOL_CLIENT_ID, BOL_CLIENT_SECRET, true));
        $this->messageBus = new MessageBus($clientPool);
    }

    public function test__invoke()
    {
        $this->messageBus->dispatch(GetShipment::with(ShipmentId::fromScalar(914587795)));
    }
}
