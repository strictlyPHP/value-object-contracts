<?php

namespace StrictlyPHP\Value\Contracts\DateTime;

interface DateTimeFactoryInterface
{
    public function dateTimeNow() : DateTimeInterface;
}