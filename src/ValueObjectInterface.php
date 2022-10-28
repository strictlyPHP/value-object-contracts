<?php

declare(strict_types=1);

namespace StrictlyPHP\Value\Contracts;

use JsonSerializable;

interface ValueObjectInterface extends JsonSerializable
{
    public function isEqual(self $compareValueObject): bool;
}
