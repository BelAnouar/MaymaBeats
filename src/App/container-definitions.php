<?php

declare(strict_types=1);

use App\Config\Paths;
use Framework\TemplateEngine;


return [
    TemplateEngine::class => fn () => new TemplateEngine(Paths::VIEW)
];
