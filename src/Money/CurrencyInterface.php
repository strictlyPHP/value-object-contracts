<?php

declare(strict_types=1);

namespace StrictlyPHP\Value\Contracts\Money;

use StrictlyPHP\Value\Contracts\ValueObjectInterface;

use Stringable;

interface CurrencyInterface extends ValueObjectInterface, Stringable
{
    public function jsonSerialize(): string;

    public function getValue(): string;
}
