<?php

declare(strict_types=1);

namespace StrictlyPHP\Value\Contracts\DateTime;

use StrictlyPHP\Value\Contracts\ValueObjectInterface;
use Stringable;

interface DateTimeInterface extends ValueObjectInterface, Stringable
{
    public function addInterval(int $seconds): DateTimeInterface;

    public function removeInterval(int $seconds): DateTimeInterface;

    public function firstDayOfLastMonth(TimezoneInterface $timezone, string $time = '00:00:00'): DateTimeInterface;

    public function firstDayOfNextMonth(TimezoneInterface $timezone, string $time = '00:00:00'): DateTimeInterface;

    public function lastDayOfThisMonth(TimezoneInterface $timezone, string $time = '00:00:00'): DateTimeInterface;

    public function firstDayOfThisMonth(TimezoneInterface $timezone, string $time = '00:00:00'): DateTimeInterface;

    public function format(string $format, TimezoneInterface $timeZone): string;

    public function toPhpDateTime(): \DateTime;

    public function getValue(): string;

    public function getTimestamp(): int;

    public function isBefore(DateTimeInterface $compareDate, bool $inclusive = false): bool;

    public function isAfter(DateTimeInterface $compareDate, bool $inclusive = false): bool;

    public function jsonSerialize(): string;
}
