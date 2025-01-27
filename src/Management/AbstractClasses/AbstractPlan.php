<?php
namespace RunCloud\Management\AbstractClasses;

use RunCloud\Management\Interfaces\SubscriptionPlanInterface;

abstract class AbstractPlan implements SubscriptionPlanInterface {
    protected int $maxServers;
    protected string $name;
    protected float $monthlyPrice;

    public function getMaxServers(): int {
        return $this->maxServers;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getMonthlyPrice(): float {
        return $this->monthlyPrice;
    }
}