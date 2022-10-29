<?php

declare(strict_types=1);

namespace StrictlyPHP\Value\Contracts\Identity;

interface IdFactoryInterface
{
    public function generateNewUuId(): UuidInterface;
}
