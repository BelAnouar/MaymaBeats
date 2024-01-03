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
    $regexPath = preg_replace('#{[^/]+}#', '([^/]+)', $path);
    $this->routes[] = [
      'path' => $path,
      'method' => strtoupper($method),
      'controller' => $controller, 'regexPath' => $regexPath
    ];
  }

  private function normalizePath(string $path): string
  {
    $path = trim($path, '/');
    $path = "/{$path}/";
    $path = preg_replace('#[/]{2,}#', '/', $path);
<<<<<<< HEAD
<<<<<<< HEAD
    $path = str_replace("/MaymaBeats/public/index.php/", "/", $path);
=======
    $path = str_replace("/maymabeats/public/index.php/", "/", $path);
>>>>>>> 2e04b579211e3523d990f624e15c597b88f0c967
=======
    $path = str_replace("/MaymaBeats/public/index.php/", "/", $path);
>>>>>>> de362ca00ce010dda243ad8cd291bd2772a58c23

    return $path;
  }

  public function dispatch(string $path, string $method, Container $container = null)
  {
    $path = $this->normalizePath($path);
    $method = strtoupper($_POST['_METHOD'] ?? $method);

    foreach ($this->routes as $route) {
      if (
        !preg_match("#^{$route['regexPath']}$#", $path, $paramValues) ||
        $route['method'] !== $method
      ) {
        continue;
      }


      array_shift($paramValues);

      preg_match_all('#{([^/]+)}#', $route['path'], $paramKeys);

      $paramKeys = $paramKeys[1];

      $params = array_combine($paramKeys, $paramValues);

      [$class, $function] = $route['controller'];

      $controllerInstance = $container ?
        $container->resolve($class) :
        new $class;

      $action = fn () => $controllerInstance->{$function}($params);
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
