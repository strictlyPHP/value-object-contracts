<?php

namespace StrictlyPHP\Value\Contracts\Identity;

interface IdFactoryInterface
{
    public function generateNewId() : IdInterface;
}