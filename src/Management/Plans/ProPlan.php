<?php
namespace RunCloud\Management\Plans;

use RunCloud\Management\AbstractClasses\AbstractPlan;

class ProPlan extends AbstractPlan {
    public function __construct() {
        $this->name = 'Pro Plan';
        $this->maxServers = 3;
        $this->monthlyPrice = 29.99;
    }
}