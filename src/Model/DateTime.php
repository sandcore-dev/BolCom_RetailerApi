<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model;

final class DateTime
{
    private $value;

    public function __construct(string $value)
    {
        if (!\Assert\Assertion::date($value, 'c')) {
            throw new \InvalidArgumentException('');
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public static function fromString(string $dateTime): DateTime
    {
        return new self($dateTime);
    }

    public function toString(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
