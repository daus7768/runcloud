<?php
require_once __DIR__ . '/../vendor/autoload.php';

use RunCloud\Management\User;
use RunCloud\Management\Server;
use RunCloud\Management\Plans\BasicPlan;
use RunCloud\Management\Plans\ProPlan;
use RunCloud\Management\Exceptions\ServerConnectionException;

try {
    $user = new User('Ashraf Kamarudin', 'ashraf@example.com');
    
    $server1 = new Server('Server 1', '192.168.0.1');
    $server2 = new Server('Server 2', '192.168.0.2');

    // Basic Plan Flow
    $user->subscribe(new BasicPlan());
    $user->connectServer($server1);
    
    try {
        $user->connectServer($server2);
    } catch (ServerConnectionException $e) {
        echo "Basic Plan Limitation: " . $e->getMessage() . "\n";
    }

    // Pro Plan Flow
    $user->subscribe(new ProPlan());
    $user->connectServer($server2);

    // Unsubscribe Flow
    $user->unsubscribe();
    
    try {
        $user->connectServer($server2);
    } catch (ServerConnectionException $e) {
        echo "Unsubscribed Plan Limitation: " . $e->getMessage() . "\n";
    }
} catch (\Exception $e) {
    echo "Unexpected error: " . $e->getMessage() . "\n";
}