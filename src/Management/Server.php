<?php
namespace RunCloud\Management;

class Server {
    private string $name;
    private string $ipAddress;
    private ?string $status;

    public function __construct(string $name, string $ipAddress) {
        $this->name = $name;
        $this->ipAddress = $ipAddress;
        $this->status = null;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getIpAddress(): string {
        return $this->ipAddress;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }

    public function getStatus(): ?string {
        return $this->status;
    }
}