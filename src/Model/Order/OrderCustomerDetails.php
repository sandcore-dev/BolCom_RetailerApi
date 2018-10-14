<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Order;

final class OrderCustomerDetails
{
    private $shipmentDetails;
    private $billingDetails;

    public function __construct(AddressDetails $shipmentDetails, AddressDetails $billingDetails)
    {
        $this->shipmentDetails = $shipmentDetails;
        $this->billingDetails = $billingDetails;
    }

    public function shipmentDetails(): AddressDetails
    {
        return $this->shipmentDetails;
    }

    public function billingDetails(): AddressDetails
    {
        return $this->billingDetails;
    }

    public function withShipmentDetails(AddressDetails $shipmentDetails): OrderCustomerDetails
    {
        return new self($shipmentDetails, $this->billingDetails);
    }

    public function withBillingDetails(AddressDetails $billingDetails): OrderCustomerDetails
    {
        return new self($this->shipmentDetails, $billingDetails);
    }

    public static function fromArray(array $data): OrderCustomerDetails
    {
        if (! isset($data['shipmentDetails']) || ! \is_array($data['shipmentDetails'])) {
            throw new \InvalidArgumentException("Key 'shipmentDetails' is missing in data array or is not an array");
        }

        $shipmentDetails = AddressDetails::fromArray($data['shipmentDetails']);

        if (! isset($data['billingDetails']) || ! \is_array($data['billingDetails'])) {
            throw new \InvalidArgumentException("Key 'billingDetails' is missing in data array or is not an array");
        }

        $billingDetails = AddressDetails::fromArray($data['billingDetails']);

        return new self($shipmentDetails, $billingDetails);
    }
}