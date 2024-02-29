<?php

namespace App\Services\Slot\Dto;

use Spatie\LaravelData\Data;

class SlotTransaction extends Data
{
    public function __construct(
        public int $Status,
        public ?string $TransactionID,
        public ?string $WagerID,
        public ?float $BetAmount,
        public ?float $TransactionAmount,
        public ?float $PayoutAmount,
    ) {
    }
}
