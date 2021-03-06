<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Rma;

final class QuantityReturned
{
    private $value;

    public function __construct(int $value)
    {
        if (!\Assert\Assertion::between($value, 1, 9999)) {
            throw new \InvalidArgumentException('');
        }

        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }

    public static function fromScalar(int $quantityReturned): QuantityReturned
    {
        return new self($quantityReturned);
    }

    public function toScalar(): int
    {
        return $this->value;
    }
}
