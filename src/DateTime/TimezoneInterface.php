<?php

declare(strict_types=1);

namespace StrictlyPHP\Value\Contracts\DateTime;

use StrictlyPHP\Value\Contracts\ValueObjectInterface;
use Stringable;

interface TimezoneInterface extends ValueObjectInterface, Stringable
{
    public function jsonSerialize(): string;

    public function getValue(): string;
}
