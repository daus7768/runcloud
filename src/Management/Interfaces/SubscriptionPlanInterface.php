<?php
namespace RunCloud\Management\Interfaces;

interface SubscriptionPlanInterface {
    public function getMaxServers(): int;
    public function getName(): string;
    public function getMonthlyPrice(): float;
}