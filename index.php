<?php
use App\Models\Tarefa;
use App\Database\Mariadb;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();
$banco = new Mariadb();

$app->get('/usuario/{id}/tarefas', function (Request $request, Response $response, array $args) use ($banco) {
    $user_id = (int)$args['id'];
    $tarefa = new Tarefa($banco->getConnection());
    $tarefas = $tarefa->getAllByUser($user_id);
    $response->getBody()->write(json_encode($tarefas));
    return $response;
});

$app->run();