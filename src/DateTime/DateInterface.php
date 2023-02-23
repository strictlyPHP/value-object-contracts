<?php

declare(strict_types=1);

namespace StrictlyPHP\Value\Contracts\DateTime;

use StrictlyPHP\Value\Contracts\ValueObjectInterface;
use Stringable;

interface DateInterface extends ValueObjectInterface, Stringable
{
    /**
     * @return string in 'Y-m-d' format
     */
    public function getValue(): string;

    public function toPhpDateTime(): \DateTime;

    public static function fromPhpDateTime(\DateTime $dateTime): self;

    public function getYear(): int;

    public function getMonth(): int;

    public function getDay(): int;

    public function addDays(int $days): self;

    public function addMonths(int $months): self;

    public function addYears(int $years): self;
}
