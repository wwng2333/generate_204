<?php
use Workerman\Worker;
use Workerman\Connection\TcpConnection;
use Workerman\Protocols\Http\Request;
use Workerman\Protocols\Http\Response;

require_once __DIR__ . '/vendor/autoload.php';

$response = new Response(204, [
    'X-Powered-by' => 'github.com/wwng2333/generate_204',
    'Connection' => 'close'
]);

$http_worker = new Worker("http://0.0.0.0:2333");
$http_worker->count = 1;
$http_worker->name = 'generate_204';
$http_worker->onMessage = function (TcpConnection $connection, Request $request) {
    global $response;
    $connection->close($response);
};

Worker::runAll();
