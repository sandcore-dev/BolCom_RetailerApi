<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer;

final class BundlePrice
{
    private $quantity;
    private $price;

    public function __construct(int $quantity, \BolCom\RetailerApi\Model\CurrencyAmount $price)
    {
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function quantity(): int
    {
        return $this->quantity;
    }

    public function price(): \BolCom\RetailerApi\Model\CurrencyAmount
    {
        return $this->price;
    }

    public function withQuantity(int $quantity): BundlePrice
    {
        return new self($quantity, $this->price);
    }

    public function withPrice(\BolCom\RetailerApi\Model\CurrencyAmount $price): BundlePrice
    {
        return new self($this->quantity, $price);
    }

    public static function fromArray(array $data): BundlePrice
    {
        if (! isset($data['quantity']) || ! \is_int($data['quantity'])) {
            throw new \InvalidArgumentException("Key 'quantity' is missing in data array or is not a int");
        }

        $quantity = $data['quantity'];

        if (! isset($data['price']) || (! \is_float($data['price']) && ! \is_int($data['price']))) {
            throw new \InvalidArgumentException("Key 'price' is missing in data array or is not a float");
        }

        $price = \BolCom\RetailerApi\Model\CurrencyAmount::fromScalar($data['price']);

        return new self($quantity, $price);
    }

    public function toArray(): array
    {
        return [
            'quantity' => $this->quantity,
            'price' => $this->price->toScalar(),
        ];
    }
}
