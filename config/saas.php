<?php

declare(strict_types=1);

return [
    'app_domain' => env('APP_DOMAIN', 'localhost'),
    'central_host' => 'app.'.env('APP_DOMAIN', 'localhost'),
];
