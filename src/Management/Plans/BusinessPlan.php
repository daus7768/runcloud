<?php
namespace RunCloud\Plans;

use RunCloud\Interfaces\SubscriptionPlanInterface;

class BusinessPlan implements SubscriptionPlanInterface {
    public function getMaxServers(): int {
        return 10;
    }

    public function getPlanName(): string {
        return 'Business Plan';
    }

    public function getPlanPrice(): float {
        return 99.99;
    }
}