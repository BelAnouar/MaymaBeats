<?php

declare(strict_types=1);

use App\Config\Paths;

use App\Services\StylesService;
use App\Services\artisteModal;
use App\Services\artisteMusic;
use App\Services\indexServices;

use App\Services\TestService;

use Framework\Container;
use Framework\Database;
use Framework\TemplateEngine;
use App\Services\ValidatorService;

return [
    TemplateEngine::class => fn () => new TemplateEngine(Paths::VIEW),

    Database::class => fn () => new Database($_ENV['DB_DRIVER'], [
        'host' => $_ENV["DB_HOST"],
        'port' => $_ENV["DB_PORT"],
        'dbname' => $_ENV['DB_NAME']
    ], $_ENV['DB_USER'], $_ENV["DB_PASS"]),
    ValidatorService::class => function (Container $container) {
        $db = $container->get(Database::class);
        return new ValidatorService($db);
    },

    StylesService::class => function (Container $container) {
        $db = $container->get(Database::class);

        return new StylesService($db);
    },
    TestService::class => function (Container $container) {
        $db = $container->get(Database::class);

        return new TestService($db);
    },

    artisteModal::class => function (Container $container) {
        $db = $container->get(Database::class);
        return new artisteModal($db);
    },

    indexServices::class => function (Container $container) {
        $db = $container->get(Database::class);
        return new indexServices($db);
    },
    ValidatorService::class => function (Container $container) {
        $db = $container->get(Database::class);

        return new ValidatorService($db);
    }, indexServices::class => function (Container $container) {
        $db = $container->get(Database::class);

        return new indexServices($db);
    },

    artisteMusic::class => function (Container $container) {
        $db = $container->get(Database::class);
        return new artisteMusic($db);
    }



];
