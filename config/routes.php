<?php $router = new Router();

$router->register('/', 'get', 'ProductsController', 'index');
$router->register('/produtos', 'get', 'ProductsController', 'index');
$router->register('/novo-produto', 'get', 'ProductsController', 'new');
$router->register('/criar-produto', 'post', 'ProductsController', 'create');
$router->register('/apagar-produto/:id', 'get', 'ProductsController', 'destroy');
$router->register('/editar-produto/:id', 'get', 'ProductsController', 'edit');
$router->register('/editar-produto/:id', 'post', 'ProductsController', 'update');
$router->register('/visualizar-produto/:id', 'get', 'ProductsController', 'show');

