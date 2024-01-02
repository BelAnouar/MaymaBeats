<?php

declare(strict_types=1);

namespace Framework;

class Router
{
  private array $routes = [];
  private array $middlewares = [];

  public function add(string $method, string $path, array $controller)
  {
    $path = $this->normalizePath($path);

    $this->routes[] = [
      'path' => $path,
      'method' => strtoupper($method),
      'controller' => $controller
    ];
  }

  private function normalizePath(string $path): string
  {
    $path = trim($path, '/');
    $path = "/{$path}/";
    $path = preg_replace('#[/]{2,}#', '/', $path);
<<<<<<< HEAD
    $path = str_replace("/MaymaBeats/public/index.php/", "/", $path);
=======
    $path = str_replace("/maymabeats/public/index.php/", "/", $path);
>>>>>>> 2e04b579211e3523d990f624e15c597b88f0c967

    return $path;
  }

  public function dispatch(string $path, string $method, Container $container = null)
  {
    $path = $this->normalizePath($path);
    $method = strtoupper($method);

    foreach ($this->routes as $route) {
      
      if (
      
        !preg_match("#^{$route['path']}$#", $path) ||
        $route['method'] !== $method
      ) {


        continue;
      }
      dd($route['controller']);
      [$class, $function] = $route['controller'];

      $controllerInstance = $container ?
        $container->resolve($class) : new $class;

      $action = fn () => $controllerInstance->{$function}();
      foreach ($this->middlewares as $middleware) {
        $middlewareInstance = $container ? $container->resolve($middleware) : new $middleware;
        $action = fn () => $middlewareInstance->process($action);
      }
      $action();

      return;
    }
  }

  public function addMiddleware(string $middleware)
  {
    $this->middlewares[] = $middleware;
  }
}
