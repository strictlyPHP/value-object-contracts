<?php

declare(strict_types=1);
namespace StrictlyPHP\Value\Contracts\Identity;

use StrictlyPHP\Value\Contracts\ValueObjectInterface;

use Stringable;

interface IdInterface extends ValueObjectInterface, Stringable
{
    public function getValue(): string;
}
