<?php
namespace RunCloud\Management\Plans;

use RunCloud\Management\AbstractClasses\AbstractPlan;

class BasicPlan extends AbstractPlan {
    public function __construct() {
        $this->name = 'Basic Plan';
        $this->maxServers = 1;
        $this->monthlyPrice = 9.99;
    }
}