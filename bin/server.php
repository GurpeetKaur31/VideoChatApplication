<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;

    require dirname(__DIR__) . '/./vendor/autoload.php';
    // if (!file_exists($autoloadPath)) {
    //     die("Autoload file not found at: $autoloadPath");
    // }
    
    // require $autoloadPath;
    // Debugging the path
// $autoloadPath = dirname(__DIR__) . '/./vendor/autoload.php';
// echo "Autoload path: $autoloadPath\n"; // Print the path
// if (!file_exists($autoloadPath)) {
//     die("Autoload file not found at: $autoloadPath");
// }

// require $autoloadPath;


    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new Chat()
            )
        ),
        8080
    );

    $server->run();