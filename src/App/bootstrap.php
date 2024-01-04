<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Config\Paths;
use Dotenv\Dotenv;


use function App\Config\registerRoutes;

$app = new App(Paths::SOURCE . "app/container-definitions.php");
$dotevn=Dotenv::createImmutable(Paths::ROOT);
$dotevn->load();
registerRoutes($app);

return $app;
