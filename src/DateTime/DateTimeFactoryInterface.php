<?php

declare(strict_types=1);

namespace StrictlyPHP\Value\Contracts\DateTime;

interface DateTimeFactoryInterface
{
    public function dateTimeNow(): DateTimeInterface;
}
