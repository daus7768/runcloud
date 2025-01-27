<?php
namespace RunCloud\Management;

use RunCloud\Management\Interfaces\SubscriptionPlanInterface;
use RunCloud\Management\Exceptions\ServerConnectionException;

class User {
    private string $name;
    private string $email;
    private ?SubscriptionPlanInterface $currentPlan = null;
    private array $connectedServers = [];

    public function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function subscribe(SubscriptionPlanInterface $plan): void {
        $this->currentPlan = $plan;
        $this->connectedServers = [];
    }

    public function unsubscribe(): void {
        $this->currentPlan = null;
        $this->connectedServers = [];
    }

    /**
     * @throws ServerConnectionException
     */
    public function connectServer(Server $server): bool {
        if ($this->currentPlan === null) {
            throw new ServerConnectionException("No active subscription plan.");
        }

        if (count($this->connectedServers) >= $this->currentPlan->getMaxServers()) {
            throw new ServerConnectionException("Plan server limit reached.");
        }

        $this->connectedServers[] = $server;
        return true;
    }

    public function getConnectedServers(): array {
        return $this->connectedServers;
    }
}